
<?php 
/* Template Name: Stories Archive */
get_header();?>
<?php
global $post;
$post_slug = $post->post_name;
?>


<div class="page-stories">
    <section class="stories">
        <div class="container">
             <div class="row">
                <div class="col-sm-12">
                     <h1 class="orange try-bld py-5 my-5 r-text">Stories of <span style="white-space:nowrap"><span class="anim-brack">R</span>esilience</span></h1>
                </div>
            </div>
        </div>
        <div class="container-fluid px-0 norm">
           

            <div class="slick-wrap slick-eq">
             


                    <div class="stories-slick slick">
                            <?php
                            $args = array(
                            'post_type' => 'stories',
                            'orderby' => 'meta_value',
                            'order' => 'DESC',
                            'posts_per_page' => -1,
                            // 'cat' => '-7',
                            // 'paged' => $paged,
                            );
                            $wp_query = new WP_Query($args);
                            $counter = 0;
                            while ($wp_query->have_posts()): $wp_query->the_post();
                            $counter++?>

                            <div>
      <!--                           <div class="sixteen-nine">
                                    <div class="content"> -->
                                      <!--   <div class="slide-container"> -->
                                            <video class="" preload="metadata" src="<?php the_field('video_url')?>"></video>
                                     
                                            <div class="info">
                                                <div class="bottom-panel">

                                                    <div>
                                                        <?php if(get_field('name')):?>
                                                            <h1><?php the_field('name');?></h1>
                                                        <?php else :?>
                                                            <h1><?php the_title();?></h1>
                                                        <?php endif;?>
                                                    </div>

                                                    <button class="play">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="53" height="53" viewBox="0 0 53 53">
                                                            <g fill="none" fill-rule="evenodd" stroke-linejoin="round">
                                                                <g stroke="#FFF" stroke-width="4">
                                                                    <path d="M720.5 1262L745 1311 696 1311z" transform="translate(-694 -1260) rotate(90 720.5 1286.5)"/>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </button>
                                                    <button class="fullscreen">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="62" height="42" viewBox="0 0 62 42">
                                                            <g fill="none" fill-rule="evenodd">
                                                                <g stroke="#FFF" stroke-width="4">
                                                                    <g>
                                                                        <path d="M0 10L0 0 19 0" transform="translate(-1342 -1265) translate(1344 1267)"/>
                                                                        <path d="M43 15L43 -5 53 -5" transform="translate(-1342 -1265) translate(1344 1267) rotate(90 48 5)"/>
                                                                        <path d="M39 38L39 28 58 28" transform="translate(-1342 -1265) translate(1344 1267) rotate(-180 48.5 33)"/>
                                                                        <path d="M5 43L5 23 15 23" transform="translate(-1342 -1265) translate(1344 1267) rotate(-90 10 33)"/>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </svg>

                                                    </button>
                                               </div>     

                                            </div>

                                            <button class="close">
                                               <svg xmlns="http://www.w3.org/2000/svg" width="54" height="54" viewBox="0 0 54 54">
                                                    <g fill="none" fill-rule="evenodd">
                                                        <g stroke="#FFF" stroke-width="4">
                                                            <g>
                                                                <path d="M0 0L50 50M50 0L0 50" transform="translate(-1350 -583) translate(1352 585)"/>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </button>

                                        
                                
                            </div>
                          <?php endwhile;
                          wp_reset_query();
                          ?>
                 
                   
                </div>
            </div>



    <div class="container-fluid norm">
        <div class="row video-body">
            <?php
                $args = array(
                'post_type' => 'stories',
                'orderby' => 'meta_value',
                'order' => 'DESC',
                'posts_per_page' => -1,
                // 'cat' => '-7',
                // 'paged' => $paged,
                );
                $wp_query = new WP_Query($args);
                $counter = 0;
                while ($wp_query->have_posts()): $wp_query->the_post();
                $counter++

            ?>


                    <div class="col-lg-4 col-md-6 slide px-0"  data-slide="<?php echo $counter - 1; ?>">
                        <?php
                             // $videoUrlInput = get_field('video_url')
                            $video = get_field('video_url');
                            $pieces = explode("/", $video);
                            $subpieces = explode('.', $pieces[4]);
                            $vimeoBase = 'https://vimeo.com/';
                            $vimeoVideo = $vimeoBase . $subpieces[0];

                            $vimeoBaseURI = 'https://player.vimeo.com/video/' . $subpieces[0];
                           
                            $imgid = $subpieces[0];                 

                            
                            $imgJson = json_decode( file_get_contents('http://vimeo.com/api/oembed.json?url=' .  $vimeoVideo  ));
                            // echo '<pre>';
                            // var_dump($imgJson);
                            // echo '</pre>';
                            // echo $imgJson->html;
                            $mediumThumb = $imgJson->thumbnail_url;   
                     

                        ?>

  
                        <div class="sixteen-nine video lazy"  data-src="<?php echo $mediumThumb; ?>"> 
                            <div class="content">

                                <button class="mobile-play">
                                    <a href="<?php echo $vimeoBaseURI;?>" data-rel="lightcase" class="lightcase-video">
                                       <svg xmlns="http://www.w3.org/2000/svg" width="53" height="53" viewBox="0 0 53 53">
                                            <g fill="none" fill-rule="evenodd" stroke-linejoin="round">
                                                <g stroke="#FFF" stroke-width="4">
                                                    <path d="M720.5 1262L745 1311 696 1311z" transform="translate(-694 -1260) rotate(90 720.5 1286.5)"/>
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                </button>
                                <button class="mobile-close">
                                    <img class="img-fluid" src="<?php echo get_bloginfo('stylesheet_directory'); ?>/assets/images/icons/close.svg" alt="close button">
                                </button>
                                <video class="lazy" poster="<?php echo $mediumThumb; ?>" preload="metadata" muted="true" poster="" data-src="<?php the_field('video_url')?>#t=10"></video>
                            </div>
                        </div>

                        <div class="text">
                            <div class="sixteen-nine">
                                <div class="content">
                                    <div class="content-wrap">

                                        <div class="title">
                                            <?php if(get_field('name')):?>
                                                <h1><?php the_field('name');?></h1>
                                            <?php endif;?>
                                            <h2><?php the_title();?></h2>
                                        </div>

                                        <button class="play">
                                           <svg xmlns="http://www.w3.org/2000/svg" width="53" height="53" viewBox="0 0 53 53">
                                                <g fill="none" fill-rule="evenodd" stroke-linejoin="round">
                                                    <g stroke="#FFF" stroke-width="4">
                                                        <path d="M720.5 1262L745 1311 696 1311z" transform="translate(-694 -1260) rotate(90 720.5 1286.5)"/>
                                                    </g>
                                                </g>
                                            </svg>
                                        </button>

                                    <?php if( have_rows('social_media') ): ?>
                                        <?php while( have_rows('social_media') ): the_row(); 
                                            // Get sub field values.
                                            $twitter = get_sub_field('twitter');
                                            $instagram = get_sub_field('instagram');
                                            $facebook = get_sub_field('facebook');

                                            ?>
                                            <div class="social">
                                                <?php if($twitter):?>
                                                    <a href="<?php echo $twitter;?>" target="_blank" rel="noopener noreferrer">Twitter</a>
                                                <?php endif;?>    
                                                <?php if($instagram):?>
                                                    <a href="<?php echo $instagram;?>" target="_blank" rel="noopener noreferrer">Instagram</a>
                                                <?php endif;?>    
                                                <?php if($facebook):?>
                                                    <a href="<?php echo $facebook;?>" target="_blank" rel="noopener noreferrer">Facebook</a>
                                                <?php endif;?>    
                                            </div>    
                                       
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                    </div>
                                </div>
                            </div> 
                        </div>    
                    </div>

              
        <?php endwhile;
         wp_reset_query();
         ?>
     </div>
 </div>
</section>
</div>
<?php get_footer();?>