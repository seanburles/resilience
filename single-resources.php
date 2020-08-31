<?php get_header();

global $post;
$post_slug = $post->post_name;
?>
    <div class="page-<?php echo $post_slug;?> single-resource">
<?php  
$image = get_field('featured_image');
            $imgurl = $image['url'];
            $imgAlt = $image['alt'];
            ?> 
                    


  <?php if( have_rows('downloadable_resource_fields') ): ?>
            <?php while( have_rows('downloadable_resource_fields') ): the_row(); ?>
                <?php  $file = get_sub_field('file'); ?>
                       



                    <div class="sticky-wrap">
                        <section class="header lazy" data-src="<?php echo get_bloginfo('stylesheet_directory'); ?>/assets/images/single-resource/header-bg.jpg">
                           <div class="container pb-5">
                               
                                <h2 class="black mb-5 pb-3"><?php the_title();?></h2>
                                <a href="<?php echo home_url(); ?>/resources/" class="back-btn single">Resources</a>
                               <div class="row">
                                   <div class="col-lg-5">
                                       <?php if($image) :?>
                                        <img class="lazy img-fluid" src="<?php echo $image['sizes']['thumbnail'];?>" data-src="<?php echo $image['sizes']['large'];?>" alt="<?php echo $image['alt'];?>">
                                        <?php else:?>
                                                   <img class="lazy img-fluid" src="<?php echo $image['sizes']['thumbnail'];?>" data-src="<?php echo get_bloginfo('stylesheet_directory'); ?>/assets/images/global/electric-x-bg.jpg" alt="<?php echo  $image['alt'];?>">
                                         <?php endif;?>          
                                   <div class="d-flex justify-content-center py-5">
                                        <a href="<?php echo $file;?>" class="btn grn lrg mx-auto" download>DOWNLOAD</a>
                                    </div>
                                </div>
                                <div class="col-lg-7 black">

                                    <?php 
                                        if ( have_posts() ) : 
                                            while ( have_posts() ) : the_post(); ?>
                                                  <div>
                                                        <?php the_content();?>
                                                  </div> 
                                             <?php  endwhile; 
                                        endif; 
                                        ?>

                                </div>
                                </div>
                            </div>   
                            <div class="lazy border-bottom" data-src="<?php echo get_bloginfo('stylesheet_directory'); ?>/assets/images/global/dotted-border.svg"></div>
                        </section>
                    </div>  
            

    <?php endwhile; ?>
<?php endif; ?>

    </div>
  
<?php get_footer(); ?>
