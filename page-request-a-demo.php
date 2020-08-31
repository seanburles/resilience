<?php get_header();

global $post;
$post_slug = $post->post_name;
?>
    <div class="page-<?php echo $post_slug;?>">


        <div class="sticky-wrap">
            <section class="header lazy" data-src="<?php echo get_bloginfo('stylesheet_directory'); ?>/assets/images/page-<?php echo $post_slug;?>/header-bg.jpg">
               <div class="container">
                   <div class="row">
                       <div class="col-lg-6">
                        <h1 class="green">REQUEST A DEMO</h1>
                        <p class="subline">See for yourself how ShieldX redefines security.</p>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-wrap">
                               <!-- Pardot Iframe -->
                               <iframe src="https://go.shieldx.com/l/497751/2020-03-19/6x4h5p" width="100%" height="500" type="text/html" frameborder="0" allowTransparency="true" style="border: 0"></iframe>
                        </div>    
                    </div>
                    </div>
                </div>   
                <div class="lazy border-bottom" data-src="<?php echo get_bloginfo('stylesheet_directory'); ?>/assets/images/global/dotted-border.svg"></div>
            </section>
        </div>  


            
    </div>
  
<?php get_footer(); ?>
