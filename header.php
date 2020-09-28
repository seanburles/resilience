
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

    <!-- Google Tag Manager -->
<!--     <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-MFXBHN8');</script> -->
    <!-- End Google Tag Manager -->

    <?php wp_head();?>

</head>


<body id="top">
<?php wp_body_open();?>
<!-- Google Tag Manager (noscript) -->
<!-- <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MFXBHN8"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript> -->
<!-- End Google Tag Manager (noscript) -->

        <div class="top-bar"></div>

		<header class="start-header detatched">


			<nav id="main-nav" class="navbar navbar-expand-lg" role="navigation">

			  <div class="container">


				<a class="navbar-brand" href="<?php echo home_url(); ?>">
                   <img class="r-logo" src="<?php echo get_bloginfo('stylesheet_directory'); ?>/assets/images/resilience.svg" alt="Resilience">
				</a>

    					<!-- <button class="navbar-toggler collapsed hamburger" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
    					<span class="hamburger-box">
                                                                    <span class="hamburger-inner"></span>
                                                      </span>
                                                      </button> -->
                                <button class="menu navbar-toggler" aria-label="Main Menu" >
                                  <svg width="100" height="100" viewBox="0 0 100 100">
                                    <path class="line line1" d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
                                    <path class="line line2" d="M 20,50 H 80" />
                                    <path class="line line3" d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
                                  </svg>
                                </button>


                         <div class="menu-wrap mx-auto">       
                            <!-- <?php
                            wp_nav_menu(array(
                            	'theme_location' => 'primary',
                            	'depth' => 2,
                            	'container' => 'div',
                            	'container_class' => 'collapse navbar-collapse',
                            	'container_id' => 'main-menu',
                            	'menu_class' => 'mx-auto',
                            	'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                            	'walker' => new WP_Bootstrap_Navwalker(),
                            ));
                            ?>  -->
                            <div id="main-menu">
                                <?php
                                    $args = array(
                                        'menu_class' => 'mx-auto',        
                                        'menu' => 'primary'
                                    );
                                 wp_nav_menu($args);?>
                            </div>    
                        </div>  
				</div>

			</nav>



		</header>


			<main id="swup">


