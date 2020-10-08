<?php

add_action('wp_enqueue_scripts', 'ct_script_and_styles');

function ct_script_and_styles() {
	// absolutely need it, because we will get $wp_query->query_vars and $wp_query->max_num_pages from it.
	global $wp_query;

	// when you use wp_localize_script(), do not enqueue the target script immediately
	wp_register_script('ct_scripts', get_stylesheet_directory_uri() . '/assets/js/post-loader-promise.js', array('jquery'));
	// passing parameters here
	// actually the <script> tag will be created and the object "ft_loadmore_params" will be inside it
	wp_localize_script('ct_scripts', 'ct_loadmore_params', array(
		'ajaxurl' => home_url() . '/wp-admin/admin-ajax.php', // WordPress AJAX

		'posts' => json_encode($wp_query->query_vars), // everything about your loop is here
		// 'current_page' => $wp_query->query_vars['paged'] ? $wp_query->query_vars['paged'] : 1,
		// 'max_page' => $wp_query->max_num_pages
	));

	wp_enqueue_script('ct_scripts');
}

add_action('wp_ajax_ctfilter', 'ct_filter_function');
add_action('wp_ajax_nopriv_ctfilter', 'ct_filter_function');

function ct_filter_function() {

	$params = array(
		'post_type' => 'resources',
		'post_status' => 'publish',
		'posts_per_page' => -1, // show all posts.

	);

	$answer = $_POST['filter'];
	if ($answer == "all") {

	}


	if (isset($_POST['cat']) && !empty($_POST['cat'])) {
		$params['tax_query'] = array(
			array(
				'taxonomy' => 'resource-types',
				'field' => 'id',
				'terms' => $_POST['cat'],
			),
		);
	} else {
		// get all terms in the taxonomy
		$terms = get_terms('resource-types');
		// convert array of term objects to array of term IDs
		$term_ids = wp_list_pluck($terms, 'term_id');

		$params['tax_query'] = array(
			array(
				'taxonomy' => 'resource-types',
				'field' => 'id',
				'terms' => $term_ids,
			),
		);
	}


	query_posts($params);

	global $wp_query;
	if (have_posts()):

		ob_start(); // start buffering because we do not need to print the posts now ?>
																														<!--  <div class="container">-->
			<div class="row">


    			<?php while (have_posts()): the_post();?>


				    <div class="col-12 resource-content <?php the_ID();?>">
				            <div class="row">
                                <div class="col-md-7 col-sm-12">
                                    <?php if(get_field('website_link')):?>
                                        <a href="<?php the_field('website_link');?>" target="_blank" rel="noopener noreferrer"><h3><?php the_title();?></h3></a>
                                        <?php else:?>
                                        <h3><?php the_title();?></h3>   
                                    <?php endif;?>
                                </div>            
                            </div>
				            <div class="row">
                                <div class="col-md-7 col-sm-12">
                                    <?php echo '<p class="small">' . get_the_excerpt() . '</p>';?>
                                </div>
                                <div class="col-md-3">
                            

                                <?php
                                   $terms = get_the_terms( $post->ID, 'resource-types' );
                                   foreach($terms as $term){
                                    echo '<a class="sapphire" href="' . home_url() . '/resource-type/' . $term->slug . '"><span>' . $term->name .   '</span></a>';
                                   }
                                    ?>


                                </div>
                                <div class="col-md-2 col-sm-12 social">
                                    <?php if( have_rows('social_media') ): ?>
                                    <?php while( have_rows('social_media') ): the_row(); 
                                        // Get sub field values.
                                        $twitter = get_sub_field('twitter');
                                        $instagram = get_sub_field('instagram');
                                        $facebook = get_sub_field('facebook');

                                        ?>
                                    
                                            <?php if($twitter):?>
                                                <a href="<?php echo $twitter;?>" target="_blank" rel="noopener noreferrer">Twitter</a>
                                            <?php endif;?>    
                                            <?php if($instagram):?>
                                                <a href="<?php echo $instagram;?>" target="_blank" rel="noopener noreferrer">Instagram</a>
                                            <?php endif;?>    
                                            <?php if($facebook):?>
                                                <a href="<?php echo $facebook;?>" target="_blank" rel="noopener noreferrer">Facebook</a>
                                            <?php endif;?>   
                                     
                                   
                                    <?php endwhile; ?>
                                <?php endif; ?>
                                </div>
                            </div>
				        
				       
				    </div>



				<?php endwhile;?>

           </div>


												<?php $posts_html = ob_get_contents(); // we pass the posts to variable
		ob_end_clean(); // clear the buffer
	else:
		// $posts_html = '<p>Nothing found for your criteria.</p>';

	endif;

	// no wp_reset_query() required

	echo json_encode(array(
		'posts' => json_encode($wp_query->query_vars),
		// 'max_page' => $wp_query->max_num_pages,
		'found_posts' => $wp_query->found_posts,
		'content' => $posts_html,
	));

	die();
}
