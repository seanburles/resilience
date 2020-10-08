
<?php get_header(); 

// Lets get the taxonomy from get_queried_object();
$queried_object = get_queried_object(); 
// var_dump($queried_object->name)
?>


<div class="page-resource-archive">
        <section class="lead-in pb-5 mb-5">
                    <div class="container">
                <h1 class="orange try-bld py-5 my-5"><?php echo $queried_object->name;?> Resources</h1>
                <div class="row">
                    <div class="col-sm-12">
                        <p class="orange lead"><a class="orange" href="<?php echo home_url(); ?>/directory/">Visit our directory for a filterable view</a></p>
                        <h3 class="pb-3 mb-3">Take a deep dive into our 
                        <?php echo $queried_object->name;?> Directory. In partnership with Capital One, we have curated an extensive list of information and links to companies and programs dedicated to helping with the complexities of the world we live in today. With helpfulness in mind, this directory provides information on <?php echo $queried_object->slug;?> resources, and minority-owned businesses to support.</h3>
                    </div>

                </div>
            </section>
    <div class="container pb-5 mb-5">
        <div class="row">
         <!--  <div class="col-sm-12"><h1 class="orange try-bld py-5 my-5" ><?php echo $queried_object->name;?></h1></div>   -->
            <?php

                $counter = 0;


                $_posts = new WP_Query( array(
                            'post_type'         => 'resources',
                            'posts_per_page'    => -1, 
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'resource-types',
                                    'field'    => 'slug',
                                    'terms'    => $queried_object->slug,
                                ),
                            ),
                        ));

                

                    while ( $_posts->have_posts() ) : $_posts->the_post();
                    ?>
                    
                      
                                <div class="col-12 resource-content <?php the_ID();?>">
                                        <div class="row">
                                            <div class="col-md-7 col-sm-12">
                                                <?php if(get_field('website_link')):?>
                                                    <a href="<?php the_field('website_link');?>" target="_blank" rel="noopener noreferrer"><h3 class="white"><?php the_title();?></h3></a>
                                                    <?php else:?>
                                                    <h3 class="white"><?php the_title();?></h3>   
                                                <?php endif;?>
                                            </div>            
                                        </div>
                                        <div class="row">
                                            <div class="col-md-7 col-sm-12 white">
                                                <?php echo '<p class="small">' . get_the_excerpt() . '</p>';?>
                                            </div>

                                            <div class="col-md-3">
                            

                                                <?php
                                                   $terms = get_the_terms( $post->ID, 'resource-types' );
                                                   foreach($terms as $term){
                                                    echo '<a class="sapphire" href="' . home_url() . '/resource-type/' . $term->slug . '">' . $term->name .   '</a><br>';
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


                 <?php $counter++ ?>


                <?php
                    endwhile;

                // endif;
                wp_reset_postdata();

            // endforeach;
            ?>
     </div>
     
     </div>       

</div>
   



 
<!-- end custom related loop, isa -->


<?php get_footer(); ?>
