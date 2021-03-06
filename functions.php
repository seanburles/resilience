<?php

function clean_custom_scripts_styles() {

	// include our styles
	wp_enqueue_style('main-styles', get_template_directory_uri() . '/style.css', array(), '1.5', 'all');
	wp_enqueue_style('cowboy', get_template_directory_uri() . '/cowboy.css', array(), '2', 'all');

	// include our scripts
	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.5.1.min.js', array(), null, true);
	wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/bootstrap/dist/js/bootstrap.bundle.min.js', '4.3', true);
	wp_enqueue_script( 'popper','https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.5.3/umd/popper.min.js', '2.5.3', true);




	wp_enqueue_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js', '1', true);
    wp_enqueue_script('scroll-trigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/ScrollTrigger.min.js', '2.0.7', true);
	// wp_enqueue_script( 'imagesload',  get_template_directory_uri() . '/assets/js/imagesloaded.js' );
	// wp_enqueue_script('waypoints', get_template_directory_uri() . '/assets/js/jquery.waypoints.min.js');
	wp_enqueue_script('countdown', get_template_directory_uri() . '/assets/js/jquery.countdown.min.js');

	wp_enqueue_script('swupforms', get_template_directory_uri() . '/assets/forms-plugin-master/dist/SwupFormsPlugin.min.js');
	wp_enqueue_script('swupga', get_template_directory_uri() . '/assets/ga-plugin-master/dist/SwupGaPlugin.min.js');
	wp_enqueue_script('swupScripts', get_template_directory_uri() . '/assets/scripts-plugin-master/dist/SwupScriptsPlugin.min.js');

	wp_enqueue_script('swup', get_template_directory_uri() . '/assets/js-plugin-master/dist/SwupJsPlugin.min.js');
	wp_enqueue_script('swupbody', get_template_directory_uri() . '/assets/body-class-plugin-master/dist/SwupBodyClassPlugin.min.js');
	wp_enqueue_script('swupscroll', get_template_directory_uri() . '/assets/scroll-plugin-master/dist/SwupScrollPlugin.min.js');
	wp_enqueue_script('swupjs', get_template_directory_uri() . '/assets/js/swup/dist/swup.min.js');
	wp_enqueue_script('select', get_template_directory_uri() . '/assets/selectric/src/jquery.selectric.js');
	wp_enqueue_script('lazy', get_template_directory_uri() . '/assets/js/lazyload-min.js');

	wp_enqueue_script('slick', get_template_directory_uri() . '/assets/slick/slick/slick.min.js');
	// wp_enqueue_script( 'html5player', get_template_directory_uri() . '/assets/lightcase/src/js/lightcase.js', array( 'jquery' ), '1', 'all'  );
	// wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/assets/js/custom.js', array( 'jquery' ) );

	// Lets serve up a de-swupped version for logged in users and for IE users
	// if (preg_match('~MSIE|Internet Explorer~i', $_SERVER['HTTP_USER_AGENT']) || (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:11.0') !== false)) {
	// 	wp_enqueue_script('non-swup', get_template_directory_uri() . '/assets/js/non-swup-min.js');
	// } else {
	// Else lets give them the full javascript swup and all
	wp_enqueue_script('main-custom', get_template_directory_uri() . '/assets/js/main-custom.js');
	// }

}
add_action('wp_enqueue_scripts', 'clean_custom_scripts_styles');

// De-register wp scritps
function my_deregister_scripts() {
	wp_deregister_script('wp-embed');
}
add_action('wp_footer', 'my_deregister_scripts');

// Register Custom Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

register_nav_menus(array(
	'primary' => __('Primary Menu', 'iso'),
));

// VIMEO SANDBOX STARTS HERE

// require_once get_template_directory() . '/vendor/vimeo/vimeo-api/autoload.php';
// use Vimeo\Vimeo;

// $client = new Vimeo("d1ea1ddead047425f2b4f7fb3a9cfcc8eecc6af9", "HOtxsgjJy6/o6vipsWbL8v2iEORPoETmMRnGxEMN+uI9hm2rXI3RXs09qSdNndJRNMCtc6Y2tLWvvUYlAzwtg6B8uRV7JZcjr7F4wbfU3meV31JvHfLgAYzVK6YJ6o5O", "5fb11d9dc639a023552516dbf756c1f2");

// $response = $client->request('/users/user972992/videos', ['per_page' => 1], 'GET');
// // $response = $client->request('/user972992/videos', ['per_page' => 2], 'GET');
// // var_dump($response['body']);
// // echo '<pre>', var_dump($response), '</pre>';

// $video = $response['body']['data'][0];

// var_dump($video);
///////////////////////
// Add WP-Login tyles
///////////////////////

function my_custom_login() {
	echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/login/custom-login-styles.css" />';
	echo '<script src="' . get_bloginfo('stylesheet_directory') . '/login/custom-js.js"></script>';
}
add_action('login_head', 'my_custom_login');

function my_login_logo_url() {
	return get_bloginfo('url');
}
add_filter('login_headerurl', 'my_login_logo_url');

function my_login_logo_url_title() {
	return 'Your Site Name and Info';
}
add_filter('login_headertext', 'my_login_logo_url_title');

///////////////////////
// Add Custom post type
///////////////////////

function stories() {
	$labels = array(
		'name' => _x('Stories', 'post type general name'),
		'singular_name' => _x('Story', 'post type singular name'),
		'add_new' => _x('Add New Story', 'Stories'),
		'add_new_item' => __('Add New Stories'),
		'edit_item' => __('Edit Stories'),
		'new_item' => __('New Stories'),
		'all_items' => __('All Stories'),
		'view_item' => __('View Stories'),
		'search_items' => __('Search Stories'),
		'not_found' => __('No Stories found'),
		'not_found_in_trash' => __('No Stories found in the Trash'),
		'parent_item_colon' => '',
		'menu_name' => 'Stories',
	);
	$args = array(
		'labels' => $labels,
		'description' => 'Stories will be held here',
		'public' => true,
		'menu_icon' => 'dashicons-format-video',
		'menu_position' => 5,
		'supports' => array('title', 'editor', 'excerpt', 'revisions'),
		'has_archive' => true,
		'hierarchical' => true,
		'show_in_rest' => true,
		// 'taxonomies' => array('category'),
	);
	register_post_type('stories', $args);
}
add_action('init', 'stories');

function resources() {
	$labels = array(
		'name' => _x('Resources', 'post type general name'),
		'singular_name' => _x('Resource', 'post type singular name'),
		'add_new' => _x('Add New Resources', 'Resources'),
		'add_new_item' => __('Add New Resources'),
		'edit_item' => __('Edit Resources'),
		'new_item' => __('New Resources'),
		'all_items' => __('All Resources'),
		'view_item' => __('View Resources'),
		'search_items' => __('Search Resources'),
		'not_found' => __('No Resources found'),
		'not_found_in_trash' => __('No Resources found in the Trash'),
		'parent_item_colon' => '',
		'menu_name' => 'Resources',
	);
	$args = array(
		'labels' => $labels,
		'description' => 'Resources will be held here',
		'public' => true,
		'menu_icon' => 'dashicons-media-document',
		'menu_position' => 5,
		'supports' => array('title', 'editor', 'excerpt', 'revisions'),
		'has_archive' => true,
		'hierarchical' => true,
		'show_in_rest' => true,
		// 'taxonomies' => array('category'),
	);
	register_post_type('Resources', $args);
}
add_action('init', 'resources');

// Let us create Taxonomy for Custom Post Type
add_action('init', 'custom_taxonomy', 0);

//create a custom taxonomy name it "type" for your posts
function custom_taxonomy() {

	$labels = array(
		'name' => _x('Resource Types', 'taxonomy general name'),
		'singular_name' => _x('Resource Type', 'taxonomy singular name'),
		'search_items' => __('Resource Types'),
		'all_items' => __('All Types'),
		'parent_item' => __('Parent Type'),
		'parent_item_colon' => __('Parent Type:'),
		'edit_item' => __('Edit Type'),
		'update_item' => __('Update Type'),
		'add_new_item' => __('Add New Resource Type'),
		'new_item_name' => __('New Resource Types Name'),
		'menu_name' => __('Resource Types'),
	);

	register_taxonomy('resource-types', array('resources'), array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'resource-type'),
	));
}

//////////////////////////////////////
// OPEN GRAPH AND META STUFF START

function doctype_opengraph($output) {
	return $output . '
    xmlns:og="http://opengraphprotocol.org/schema/"
    xmlns:fb="http://www.facebook.com/2008/fbml"';
}
add_filter('language_attributes', 'doctype_opengraph');

function fb_opengraph() {
	global $post;

	if (is_single()) {
		if (get_field('blog_featured_image', $post->ID)) {
			$img_src_array = get_field('blog_featured_image', $post->ID);
			$img_src = $img_src_array['url'];
		} elseif (get_field('featured_image', $post->ID)) {
			$img_src_array = get_field('featured_image', $post->ID);
			$img_src = $img_src_array['url'];
		} else {
			$img_src = get_stylesheet_directory_uri() . '/assets/images/open-graph.jpg';
		}
		if ($excerpt = $post->post_excerpt) {
			$excerpt = strip_tags($post->post_excerpt);
			$excerpt = str_replace("", "'", $excerpt);
		} else {
			$excerpt = get_bloginfo('description');
		}
		?>

    <meta property="og:title" content="<?php echo the_title(); ?>"/>
    <meta property="og:description" content="<?php echo $excerpt; ?>"/>
    <meta property="og:type" content="article"/>
    <meta property="og:url" content="<?php the_permalink();?>"/>
    <meta property="og:site_name" content="<?php echo get_bloginfo(); ?>"/>
    <meta property="og:image" content="<?php echo $img_src; ?>"/>

<?php
} else {
		?>
           <meta property="og:title" content="<?php echo the_title(); ?>"/>
          <meta property="og:description" content="<?php echo $excerpt; ?>"/>
          <meta property="og:type" content="website"/>
          <meta property="og:url" content="<?php the_permalink();?>"/>
          <meta property="og:site_name" content="<?php echo get_bloginfo(); ?>"/>
          <meta property="og:image" content="<?php echo get_stylesheet_directory_uri() . '/assets/images/open-graph.jpg' ?>"/>
       <?php return;
	}
}
add_action('wp_head', 'fb_opengraph', 5);

// OPEN GRAPH AND META STUFF END
//////////////////////////////////////

/**
 * Show all Resources CPT items on archive instead of normal 10 count from wordpress admin
 *
 */

// add_action( 'pre_get_posts', 'fiction_show_resources' );

// function fiction_show_resources( $query ) {

//     if ( ! is_admin() && $query->is_main_query() ) {

//         if ( is_post_type_archive( 'resources' ) ) {

//             $query->set('posts_per_page', -1 );

//         }
//     }

// }

// IMAGES
// add_theme_support( 'post-thumbnails' );
//https://gist.github.com/bacoords/77ee4d13dfa76db03981cb4eb0df0c6f
add_image_size('medium-width', 1000);

// Load Articles Template based on category
// function load_article_template( $template ) {
//     global $post;

//     if ( 'resources' === $post->post_type  && get_field('type_of_resource', $post->ID) == 'article'  ) {

//          * This is a 'article' Resources post

//         return plugin_dir_path( __FILE__ ) . 'single-resources-article.php';
//     }
//     return $template;
// }

// add_filter( 'single_template', 'load_article_template' );

/**
 * Grab the specified data like Thumbnail URL of a publicly embeddable video hosted on Vimeo.
 *
 * @param  str $video_id The ID of a Vimeo video.
 * @param  str $data      Video data to be fetched
 * @return str            The specified data
 */
// function get_vimeo_data_from_id( $video_id, $data ) {
//     $request = wp_remote_get( 'https://vimeo.com/api/oembed.json?url=https://vimeo.com/' . $video_id );
    
//     $response = wp_remote_retrieve_body( $request );
    
//     $video_array = json_decode( $response, true );

//     // echo '<pre>';
//     // print_r( $video_array );
//     // echo '</pre>';
    
//     return $video_array[$data];
// }

//////////////////////////////////////
// Add color swatches to Tiny MCE
//////////////////////////////////////

function my_mce4_options($init) {

	$custom_colors = '
        "e76625", "Resilience Orange",
        "364fa3", "Resilience Sapphire",
        "039681", "Resilience Jade"
    ';

	// build color grid default+custom colors
	$init['textcolor_map'] = '[' . $custom_colors . ']';

	// change the number of rows in the grid if the number of colors changes
	// 8 swatches per row
	$init['textcolor_rows'] = 1;

	return $init;
}
add_filter('tiny_mce_before_init', 'my_mce4_options');
// Tiny MCE STyles
// remove_filter ('the_content', 'wpautop');

// Ajax Function to Load PHP Function myfunctionform1 smc 11/22/2013

// add_action('wp_ajax_getloadBanner', 'loadBanner');
// add_action('wp_ajax_nopriv_getloadBanner', 'loadBanner');

// function loadBanner() {

// 	get_template_part('template-parts/header/banner-slider');

// 	die();} // important must use

// end Ajax Function to Load PHP Function myfunctionform1 smc 11/22/2013

// add_action( 'admin_footer-post.php',     'wpse_98274_disable_top_categories_checkboxes' );
// add_action( 'admin_footer-post-new.php', 'wpse_98274_disable_top_categories_checkboxes' );

/////////////////////////
//Add all option to dropdown
/////////////////////////
/////////////////////////
//Cloud Academy Filter / RESOURCE FILTER
/////////////////////////

require_once get_template_directory() . '/inc/posts-filter.php';
