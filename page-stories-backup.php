
<?php get_header();?>
<?php
global $post;
$post_slug = $post->post_name;
?>


<div class="page-<?php echo $post_slug; ?>">
    <div style="height: 400px;"></div>
    <section class="stories">
        <div class="container">


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
                        <video class="" preload="metadata" controls src="<?php the_field('video_url')?>"></video>
                    </div>
                  <?php endwhile;
                  wp_reset_query();
                  ?>
         
        </div>

    <div class="container">
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
 <!--                <?php if($counter == 1) :?>

                    <div class="col-sm-4 slide active px-0"  data-slide="<?php echo $counter - 1; ?>">
                         <?php
                             // $videoUrlInput = get_field('video_url')
                             $video = get_field('video_url');
                             $pieces = explode("/", $video);
                             $subpieces = explode('.', $pieces[4]);
                             $vimeoBase = 'https://vimeo.com/';
                             $vimeoVideo = $vimeoBase . $subpieces[0];
                             // var_dump($vimeoVideo);

                             // grab_vimeo_thumbnail($vimeoVideo)
                         ?>
                        <div class="sixteen-nine lazy" data-src="<?php grab_vimeo_thumbnail($vimeoVideo)?>"> 
                            <div class="content">
                                <video preload="metadata" muted="true" poster="<?php grab_vimeo_thumbnail($vimeoVideo)?>" src="<?php the_field('video_url')?>"></video>
                            </div>
                        </div>
                            
                       
                        <div class="sixteen-nine text">
                            <div class="content">
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
                                        
                                        <?php if($twitter):?>
                                            <a href="<?php echo $twitter;?>">Twitter</a>
                                        <?php endif;?>    
                                        <?php if($instagram):?>
                                            <a href="<?php echo $instagram;?>">Instagram</a>
                                        <?php endif;?>    
                                        <?php if($facebook):?>
                                            <a href="<?php echo $facebook;?>">Facebook</a>
                                        <?php endif;?>    
                                   
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                <?php else:?> -->

                    <div class="col-sm-4 slide px-0"  data-slide="<?php echo $counter - 1; ?>">
                        <?php
                             // $videoUrlInput = get_field('video_url')
                            $video = get_field('video_url');
                            $pieces = explode("/", $video);
                            $subpieces = explode('.', $pieces[4]);
                            $vimeoBase = 'https://vimeo.com/';
                            $vimeoVideo = $vimeoBase . $subpieces[0];
                            // var_dump($vimeoVideo);
                            // grab_vimeo_thumbnail($vimeoVideo)
                        ?>
                        <div class="sixteen-nine lazy" data-src="<?php grab_vimeo_thumbnail($vimeoVideo)?>"> 
                            <div class="content">
                                <video preload="metadata" muted="true" poster="<?php grab_vimeo_thumbnail($vimeoVideo)?>" src="<?php the_field('video_url')?>"></video>
                            </div>
                        </div>
                            
                       
                        <div class="sixteen-nine text">
                            <div class="content">
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
                                        <?php if($twitter):?>
                                            <a href="<?php echo $twitter;?>">Twitter</a>
                                        <?php endif;?>    
                                        <?php if($instagram):?>
                                            <a href="<?php echo $instagram;?>">Instagram</a>
                                        <?php endif;?>    
                                        <?php if($facebook):?>
                                            <a href="<?php echo $facebook;?>">Facebook</a>
                                        <?php endif;?>    
                                   
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                <!-- <?php endif;?> -->
        <?php endwhile;
         wp_reset_query();
         ?>
     </div>
 </div>
</section>
</div>
<?php get_footer();?>