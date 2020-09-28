
<?php get_header();?>
<?php
global $post;
$post_slug = $post->post_name;
?>


<div class="page-<?php echo $post_slug; ?>">
    <div style="height: 400px;"></div>
    <section class="stories">
        <div class="container">
             <div class="row">
                <div class="col-sm-12">
                     <h1 class="orange">Stories of [R]esilience</h1>
                </div>
            </div>
        </div>
        <div class="container-fluid px-0">
           

            <div class="slick-wrap">
             


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
                                <div class="sixteen-nine">
                                    <div class="content">
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

                                                <div class="play">
                                                    <img class="img-fluid" src="<?php echo get_bloginfo('stylesheet_directory'); ?>/assets/images/icons/play-button.svg" alt="play button">
                                                </div>
                                                <div class="fullscreen">
                                                     <img class="img-fluid" src="<?php echo get_bloginfo('stylesheet_directory'); ?>/assets/images/icons/large-screen.svg" alt="full screen">
                                                </div>
                                           </div>     

                                        </div>

                                        <div class="close">
                                            <img class="img-fluid" src="<?php echo get_bloginfo('stylesheet_directory'); ?>/assets/images/icons/close.svg" alt="close button">
                                        </div>
                                        
                                    <!--     <button id="prev" type="button" class="slick-prev"><span class="sr-only">Previous</span>PREVIOUS</button>
                                        <div id="next" class="one-one lazy" data-src="<?php echo get_bloginfo('stylesheet_directory'); ?>/assets/images/icons/next.svg"></div> -->

                                    </div>
                                </div>
                            </div>
                          <?php endwhile;
                          wp_reset_query();
                          ?>
                 
                   
                </div>
            </div>



    <div class="container-fluid">
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


                    <div class="col-sm-4 slide px-0"  data-slide="<?php echo $counter - 1; ?>">
                        <?php
                             // $videoUrlInput = get_field('video_url')
                            $video = get_field('video_url');
                            $pieces = explode("/", $video);
                            $subpieces = explode('.', $pieces[4]);
                            $vimeoBase = 'https://vimeo.com/';
                            $vimeoVideo = $vimeoBase . $subpieces[0];
                           
                            // $imgURL = 'http://i.vimeocdn.com/video/' . $subpieces[0] . '_1280.jpg';
                            // var_dump($subpieces[0]);

                            $imgid = $subpieces[0];

                            // $hash = unserialize(file_get_contents('http://vimeo.com/api/v2/video/' . $imgid . '.php'));
                            // var_dump($hash);
                            // echo $hash[0]['thumbnail_large'];  
                            // grab_vimeo_thumbnail($vimeoVideo)
                        ?>
                        <div class="sixteen-nine" style="background-image: url(); background-size: cover;"> 
                            <div class="content">
                                <video preload="metadata" muted="true" poster="" src="<?php the_field('video_url')?>"></video>
                            </div>
                        </div>
                            
                       
                        <div class="sixteen-nine text">
                            <div class="content">
                                <div class="content-wrap">
                                <?php if(get_field('name')):?>
                                    <h1><?php the_field('name');?></h1>
                                <?php endif;?>
                                <h2><?php the_title();?></h2>

                                <?php if( have_rows('social_media') ): ?>
                                    <?php while( have_rows('social_media') ): the_row(); 
                                        // Get sub field values.
                                        $twitter = get_sub_field('twitter');
                                        $instagram = get_sub_field('instagram');
                                        $facebook = get_sub_field('facebook');

                                        ?>
                                        <div>
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

              
        <?php endwhile;
         wp_reset_query();
         ?>
     </div>
 </div>
</section>
</div>
<?php get_footer();?>