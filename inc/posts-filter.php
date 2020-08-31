<?php



add_action( 'wp_enqueue_scripts', 'ct_script_and_styles');
 
function ct_script_and_styles() {
    // absolutely need it, because we will get $wp_query->query_vars and $wp_query->max_num_pages from it.
    global $wp_query;

    // when you use wp_localize_script(), do not enqueue the target script immediately
    wp_register_script( 'ct_scripts', get_stylesheet_directory_uri() . '/assets/js/post-loader-promise.js', array('jquery') ); 
    // passing parameters here
    // actually the <script> tag will be created and the object "ft_loadmore_params" will be inside it 
    wp_localize_script( 'ct_scripts', 'ct_loadmore_params', array(
        'ajaxurl' => home_url() . '/wp-admin/admin-ajax.php', // WordPress AJAX
        'posts' => json_encode( $wp_query->query_vars ), // everything about your loop is here
        // 'current_page' => $wp_query->query_vars['paged'] ? $wp_query->query_vars['paged'] : 1,
        // 'max_page' => $wp_query->max_num_pages
    ) );
    
    wp_enqueue_script( 'ct_scripts' );
}

 
 
add_action('wp_ajax_ftfilter', 'ct_filter_function'); 
add_action('wp_ajax_nopriv_ftfilter', 'ct_filter_function');
 
function ct_filter_function(){

        $params = array(
            'post_type' => 'post',
            'post_status'     => 'publish',
            'posts_per_page' => -1 // show all posts.
          
        );

        $answer = $_POST['filter'];  
            if ($answer == "all") {          
                
            }
            // elseif ($answer == "casestudy") {
            //     $params['tax_query'] = array(
            //         array(
            //             'taxonomy' => 'category',
            //             'field' => 'id',
            //             'terms' => array(4),

            //         )
            //     ); 
            // }  elseif ($answer == "video") {
            //     $params['tax_query'] = array(
            //         array(
            //             'taxonomy' => 'category',
            //             'field' => 'id',
            //             'terms' => 10

            //         )
            //     ); 
            // }
            // elseif ($answer == "papersreports") {
            //     $params['tax_query'] = array(
            //         array(
            //             'taxonomy' => 'category',
            //             'field' => 'id',
            //             'terms' => 9

            //         )
            //     ); 
            // }
            // elseif ($answer == "webinars") {
            //     $params['tax_query'] = array(
            //         array(
            //             'taxonomy' => 'category',
            //             'field' => 'id',
            //             'terms' => 11

            //         )
            //     ); 
            // }
             elseif ($answer == "ciscoguides") {
                $params['tax_query'] = array(
                    array(
                        'taxonomy' => 'category',
                        'field' => 'id',
                        'terms' => 1

                    )
                ); 
            }
            elseif ($answer == "collateral") {
                $params['tax_query'] = array(
                    array(
                        'taxonomy' => 'category',
                        'field' => 'id',
                        'terms' => 3

                    )
                ); 
            }

            // for taxonomies / categories
            // if(  $_POST['categoryfilter'] != null )
            //     $params['tax_query'] = array(
            //         array(
            //             'taxonomy' => 'category',
            //             'field' => 'id',
            //             'terms' => $_POST['categoryfilter']
            //         )
            //     );


    
    query_posts( $params );
 
    global $wp_query; 


   if( have_posts() ) : 
    
 
       ob_start(); // start buffering because we do not need to print the posts now ?> 
<!--  <div class="container">
    <div class="row"> -->

  
     <?php  while( have_posts() ): the_post(); ?>
        
      
        <div class="col-sm-4 our-content <?php the_ID(); ?>">
            <?php the_title();?>
           <a href="<?php the_permalink();?>"><h1>hello</h1></a>
            <?php the_ID(); ?>
             <div class="one-one lazy" data-src="<?php the_post_thumbnail_url(); ?>"></div>
           <!-- <img class="img-fluid" src="<?php the_post_thumbnail_url(); ?>" alt=""> -->
        </div>

             

       <?php endwhile;
 
        $posts_html = ob_get_contents(); // we pass the posts to variable
        ob_end_clean(); // clear the buffer
    else:
        // $posts_html = '<p>Nothing found for your criteria.</p>';
        ?>

<!--         </div>
    </div>  -->  
  <?php  endif;
 
    // no wp_reset_query() required
 
    echo json_encode( array(
        'posts' => json_encode( $wp_query->query_vars ),
        // 'max_page' => $wp_query->max_num_pages,
        'found_posts' => $wp_query->found_posts,
        'content' => $posts_html
    ) );
 
    die();
}

