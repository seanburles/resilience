
<?php
/* Template Name: Temporary Landing Page */?>
 <!doctype html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo('charset');?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="profile" href="https://gmpg.org/xfn/11" />
    <title>R Mural Project</title>

    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_bloginfo('stylesheet_directory'); ?>/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_bloginfo('stylesheet_directory'); ?>/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_bloginfo('stylesheet_directory'); ?>/favicon/favicon-16x16.png">
          <link rel="icon" type="image/png" sizes="192x192" href="<?php echo get_bloginfo('stylesheet_directory'); ?>/favicon/android-chrome-192x192.png">
          <link rel="icon" type="image/png" sizes="512x512" href="<?php echo get_bloginfo('stylesheet_directory'); ?>/favicon/android-chrome-512x512.png">
    <!-- <link rel="manifest" href="<?php echo get_bloginfo('stylesheet_directory'); ?>/favicon/site.webmanifest"> -->
    <link rel="mask-icon" href="<?php echo get_bloginfo('stylesheet_directory'); ?>/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
          <meta name="title" content="R Mural Project">
          <meta name="description" content="[R]esilience. The ability to thrive in spite of challenging and unprecedented circumstances.">
          <meta name="keywords" content="Resilience, R Mural Project, Capital One, Creative Theory">
          <meta name="robots" content="index, follow">
          <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
          <meta name="language" content="English">
    <!-- Google Analytics -->


    <?php wp_head();?>

</head>


<body <?php body_class();?> id="top">
<?php wp_body_open();?>


<main id="swup" class=" landing-page">

<?php
global $post;
$post_slug = $post->post_name;
?>

    <div class="page-<?php echo $post_slug; ?>">


                <?php $video = get_field('video_background');?>

        <div class="video-header h-100">
                <div class="top-bar"></div>
                <div class="content-wrap">
                    <div class="container h-100 d-flex flex-column">
                        <div class="counter-title-wrap">


                                <img class="r-logo" src="<?php echo get_bloginfo('stylesheet_directory'); ?>/assets/images/resilience.svg" alt="Resilience">

                                <div class="counter-social">
                                    <div class="d-flex w-100 justify-content-end desktop">
                                         <a class="logo" href="https://twitter.com/ACreativeTheory">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 400"><rect width="400" height="400" style="fill:none"/><path d="M153.62,301.59c94.34,0,145.94-78.16,145.94-145.94,0-2.22,0-4.43-.15-6.63A104.36,104.36,0,0,0,325,122.47a102.24,102.24,0,0,1-29.46,8.07,51.46,51.46,0,0,0,22.55-28.37,102.76,102.76,0,0,1-32.57,12.45,51.34,51.34,0,0,0-87.41,46.78A145.63,145.63,0,0,1,92.4,107.81a51.33,51.33,0,0,0,15.88,68.47A50.84,50.84,0,0,1,85,169.86v.65a51.31,51.31,0,0,0,41.15,50.28,51.2,51.2,0,0,1-23.16.88,51.36,51.36,0,0,0,47.92,35.62A102.9,102.9,0,0,1,75,278.55a145.22,145.22,0,0,0,78.62,23" style="fill:#fff"/></svg>
                                        </a>
                                        <a class="logo" href="https://www.instagram.com/creativetheoryagency/">
                                           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 400"><path d="M199.19,107.85c30.61,0,34.3,0,46.35.66a63.18,63.18,0,0,1,21.29,3.92,37.6,37.6,0,0,1,21.44,21.73,61.49,61.49,0,0,1,4,21.29c.59,12.05.67,15.75.67,46.35s0,34.22-.67,46.35a61.77,61.77,0,0,1-4,21.29,37.7,37.7,0,0,1-21.66,21.66,62,62,0,0,1-21.29,4.06c-12.12.52-15.67.59-46.35.59s-34.3,0-46.35-.59a63.68,63.68,0,0,1-21.36-4.06A37.65,37.65,0,0,1,110,269.36,61.88,61.88,0,0,1,106,248c-.59-12-.67-15.67-.67-46.2s0-34.3.67-46.35a61.49,61.49,0,0,1,4-21.29A37.49,37.49,0,0,1,131.7,113,60.06,60.06,0,0,1,153,109.1c12.13-.59,15.82-.66,46.35-.66m0-20.77c-31,0-35,0-46.86.73a83.79,83.79,0,0,0-28.17,5,57.94,57.94,0,0,0-33.85,33.64,83.37,83.37,0,0,0-5.33,28.16c-.59,12.2-.73,16.11-.73,46.94s0,35,.73,46.87a85.63,85.63,0,0,0,6.07,27.79A58.38,58.38,0,0,0,125,310.54a83.65,83.65,0,0,0,28.16,5.32c12.27.59,16.12.67,46.94.67s35,0,46.87-.67a83.17,83.17,0,0,0,28.16-5.32,58.43,58.43,0,0,0,34-33.71,85.21,85.21,0,0,0,5.24-28.16c.59-12.2.74-16.12.74-46.87s0-35.11-.74-46.94a85.12,85.12,0,0,0-5.24-28.16,58.51,58.51,0,0,0-34-33.64A83.15,83.15,0,0,0,247,87.67c-12.2-.52-16.12-.67-46.87-.67Z" style="fill:#fff"/><path d="M199.19,142.59a59.14,59.14,0,1,0,59.14,59.14h0a59.14,59.14,0,0,0-59.14-59.14m0,97.06a38.3,38.3,0,1,1,38.22-38.37v.45h0a38.15,38.15,0,0,1-38.14,38.14h-.08" style="fill:#fff"/><path d="M260.11,126.84a13.83,13.83,0,1,1-13.83,13.83v-.08h0a13.83,13.83,0,0,1,13.83-13.75" style="fill:#fff"/></svg>
                                        </a>
                                    </div>

                                    <ul id="countdown">
                                        <li><span class="days">00</span><p class="days_text">Days</p></li>
                                        <li class="seperator">:</li>
                                        <li><span class="hours">00</span><p class="hours_text">Hours</p></li>
                                        <li class="seperator">:</li>
                                        <li><span class="minutes">00</span><p class="minutes_text">Minutes</p></li>
                                        <li class="seperator">:</li>
                                        <li><span class="seconds">00</span><p class="seconds_text">Seconds</p></li>
                                    </ul>
                                </div>
                        </div>

                        <h2 class="desktop white">[R]esilience. The ability to <strike>persist</strike> thrive in spite of challenging and unprecedented circumstances</h2>

                        <div class="desktop">
                            <div class="lazy logos align-self-end flex-column" data-src="<?php echo get_bloginfo('stylesheet_directory'); ?>/assets/images/icons/icon-group-header.svg" ></div>
                        </div>

                                <!-- <a href="http://player.vimeo.com/video/1084537" data-rel="lightcase" class="lightcase-video">PLOOOOP</a> -->

                        </div>
                    </div>

                <video class="lazy" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                    <source data-src="<?php echo $video['url']; ?>" type="video/mp4">
                </video>

                </div>

        </div>

    </div><!-- End body wrap -->

    <section class="main-body">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-9 col-lg-7">
                    <p class="desktop py-5">An art installation by DC-based, Creative Theory Agency designed to both inspire our community through art and storytelling while offering tangible resources to those most affected by COVID-19.</p>
                    <h2 class="mobile pt-3">[R]esilience. The ability to <strike>persist</strike> thrive in spite of challenging and unprecedented circumstances</h2>



                </div>
                <div class="col-sm-12">
                     <h2 class="desktop">This is OU[R] Mural Project; Stories of [R]esilience.</h2>

                </div>

                <div class="col-12 px-0 slick-container slick">
                  <!--   <img class="img-fluid" src="<?php echo get_bloginfo('stylesheet_directory'); ?>/assets/images/landing-page/mural-1.jpg" alt="mural 1"> -->

                      <div class="slider">
                        <?php
// check if the repeater field has rows of data
if (have_rows('landing_page_image')):
	// loop through the rows of data
	while (have_rows('landing_page_image')): the_row();?>

																								                                <?php

		$image = get_sub_field('image');

		if (!empty($image)): ?>

																								                        <?php // vars
		$url = $image['url'];
		$thumb = $image['sizes']['thumbnail'];
		$alt = $image['alt'];

		?>


																	<img class="lazy img-fluid" src="<?php echo $thumb; ?>" data-src="<?php echo $url; ?>" alt="<?php echo $alt; ?>">



																								                    <?php endif;?>

												                <?php endwhile;

else:
	// no rows found
endif;

?>

                        </div>
                </div>
                <div class="col-12">
                    <p class="mobile py-3">An art installation by DC-based, Creative Theory Agency designed to both inspire our community through art and storytelling while offering tangible resources to those most affected by COVID-19.</p>
                     <h2 class="mobile pb-5">This is OU[R] Mural Project; Stories of [R]esilience.</h2>
                </div>

            </div>
        </div>
    </section>
    <script class="source" type="text/javascript">
        var now = new Date();
        var day = now.getDate();
        var month = now.getMonth() + 1;
        var year = now.getFullYear() + 1;

        var nextyear = month + '/' + day + '/' + year + ' 07:07:07';
        var newyear = '<?php the_field('countdown_date');?>';
        console.log(nextyear);
        console.log(newyear);

        $('#countdown').countdown({
            date: newyear, // TODO Date format: 07/27/2017 17:00:00
            offset: +2, // TODO Your Timezone Offset
            day: 'Day',
            days: 'Days',
            hideOnComplete: true
        }, function (container) {
            alert('Done!');
        });
    </script>
<?php get_footer();?>