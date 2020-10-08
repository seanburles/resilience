<?php get_header();

global $post;
$post_slug = $post->post_name;
?>
    <div class="page-<?php echo $post_slug;?> single-story">
       <div class="container">
          <div class="row">
                                  

            <div class="col-sm-12 single-story-vid">

                <?php $video = get_field('video_url'); 


                    $pieces = explode("/", $video);
                    $subpieces = explode('.', $pieces[4]);
                    $vimeoBase = 'https://vimeo.com/';
                    $vimeoVideo = $vimeoBase . $subpieces[0];

                    $vimeoBaseURI = 'https://player.vimeo.com/video/' . $subpieces[0];
                   
                    $imgid = $subpieces[0];                 

                    
                    $imgJson = json_decode( file_get_contents('http://vimeo.com/api/v2/video/' .  $imgid . '.json'  ));
                            // echo '<pre>';
                            // var_dump($imgJson[0]);
                            // echo '</pre>';
                            // echo $imgJson[0]->thumbnail_large;
                ?>
             <!--          <div class="sixteen-nine">
                          <div class="content"> -->

<!-- 
                              <video class="" preload="metadata" src="<?php the_field('video_url')?>"></video>
                       
                              <div class="info">
                                  <div class="bottom-panel">

                                      <div class="play">
                                          <img class="img-fluid" src="<?php echo get_bloginfo('stylesheet_directory'); ?>/assets/images/icons/play-button.svg" alt="play button">
                                      </div>
                                      <div class="fullscreen">
                                           <img class="img-fluid" src="<?php echo get_bloginfo('stylesheet_directory'); ?>/assets/images/icons/large-screen.svg" alt="full screen">
                                      </div>
                                 </div>     

                              </div> -->

                <div class="video-wrap  pb-3">
                    <video preload="auto" poster="<?php echo $imgJson[0]->thumbnail_large;?>" src="<?php the_field('video_url')?>"></video>
                    <button class="play-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="264" height="265" viewBox="0 0 264 265" style="" class="video-background">
                            <g fill="none" fill-rule="evenodd" stroke-linejoin="round">
                                <g stroke="#FCA824" stroke-width="4">
                                    <path d="M721 1591L851 1850 591 1850z" transform="translate(-589 -1588) rotate(90 721 1720.5)" class=""></path>
                                </g>
                                <g stroke="#fff" stroke-width="4">
                                    <path d="M721 1591L851 1850 591 1850z" transform="translate(-589 -1588) rotate(90 721 1720.5)" class="YNGxvoTC_1 pSntlhYO_1"></path>
                                </g>
                                <g stroke="#039681" stroke-width="4">
                                    <path d="M721 1591L851 1850 591 1850z" transform="translate(-589 -1588) rotate(90 721 1720.5)" class="YNGxvoTC_0 pSntlhYO_2"></path>
                                </g>

                            </g>
                        <style>

                        .pSntlhYO_1{stroke-dasharray:840 842;stroke-dashoffset:841;}
                        .start .pSntlhYO_1{animation:pSntlhYO_draw_1 6700ms ease-in-out 0ms 3}
                        .pSntlhYO_2{stroke-dasharray:840 842;stroke-dashoffset:841;}
                        .start .pSntlhYO_2{animation:pSntlhYO_draw_2 6700ms ease-in-out 300ms 3}
                        @keyframes pSntlhYO_draw{100%{stroke-dashoffset:0;}}
                        @keyframes pSntlhYO_fade{0%{stroke-opacity:1;}94.02985074626866%{stroke-opacity:1;}100%{stroke-opacity:0;}}
                        

                        @keyframes pSntlhYO_draw_0{11.940298507462686%{stroke-dashoffset: 841}49.25373134328358%{ stroke-dashoffset: 0;}100%{ stroke-dashoffset: 841;}}
                        @keyframes pSntlhYO_draw_1{11.940298507462686%{stroke-dashoffset: 841}49.25373134328358%{ stroke-dashoffset: 0;}100%{ stroke-dashoffset: 841;}}
                        @keyframes pSntlhYO_draw_2{11.940298507462686%{stroke-dashoffset: 841}49.25373134328358%{ stroke-dashoffset: 0;}100%{ stroke-dashoffset: 841;}}
                        </style>
                        </svg>
                    </button>
                </div>
                 

                         <!--  </div>
                      </div> -->
                </div>

                <div class="col-sm-12 pb-5">
                   <div class="content-wrap">
                                <?php if(get_field('name')):?>
                                    <h1 class="flesh"><?php the_field('name');?></h1>
                                <?php endif;?>
                                <h3 class="flesh"><?php the_title();?></h3>


                                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                                    <?php if(get_the_content()):?>
                                            <div class="py-5"><?php the_content();?></div>
                                        <?php else:?>
                                            <?php echo '<p class="small">' . get_the_excerpt() . '</p>';?>
                                    <?php endif; ?>
                                    <?php  endwhile; ?>
                                <?php endif; ?>

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
  
<?php get_footer(); ?>
