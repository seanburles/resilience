<?php get_header();

global $post;
$post_slug = $post->post_name;

?>
    <div class="page-<?php echo $post_slug;?>">

          <div class="sticky-wrap">
             <section class="plane-header-ratio multiply lazy" data-src="<?php echo get_bloginfo('stylesheet_directory'); ?>/assets/images/page-<?php echo $post_slug;?>/header-bg.jpg">
                       <div class="content flex-align-center">
                                            <div class="container">
                                                       <div class="row">
                                                           <div class="col-lg-7">
                                                            <h1 class="alternate green"><?php the_title();?></h1>
                                                        </div>
                                                        <div class="col-lg-5">

                                                        </div>
                                                    </div>
                                                </div>  
                       </div>
             </section>
          </div>  
   

        <div class="body-wrap">
           <section class="py-5 mb-5">  
            <div class="container pb-5">
                <!-- <h1 class="alternate"><?php the_title();?></h1> -->
                <div class="row">
                    <div class="col-sm-12">
                        
                        <?php 
                            if ( have_posts() ) {
                                while ( have_posts() ) {
                                    the_post(); 
                                    //
                                    // Post Content here
                                    //
                                    the_content();
                                } // end while
                            } // end if
                            ?>

                    </div>
                  </div>
                 </div>
            </section>   
          
         
        </div>
		



	</div>

<?php get_footer(); ?>

