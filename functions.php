<?php
/**
 * Sonatine functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Sonatine
 */

if ( ! function_exists( 'sonatine_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function sonatine_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Sonatine, use a find and replace
	 * to change 'sonatine' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'sonatine', get_template_directory() . '/languages' );

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
		'primary' => esc_html__( 'Primary', 'sonatine' ),
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

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'sonatine_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
add_action( 'after_setup_theme', 'sonatine_setup' );

endif;

/* remove core inline styles */

if( !function_exists('sonatine_remove_recent_comments_style') ):

function sonatine_remove_recent_comments_style() {
	global $wp_widget_factory;
	remove_action( 'wp_head', array( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style'  ) );
}

add_action( 'widgets_init', 'sonatine_remove_recent_comments_style' );

endif;

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
if( !function_exists('sonatine_content_width') ):
	function sonatine_content_width() {
		$GLOBALS['content_width'] = apply_filters( 'sonatine_content_width', 1140 );
	}
	add_action( 'after_setup_theme', 'sonatine_content_width', 0 );

endif;


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
if( !function_exists('sonatine_widgets_init') ):
	function sonatine_widgets_init() {
		register_sidebar( array(
			'name'          => esc_html__( 'Sidebar', 'sonatine' ),
			'id'            => 'sidebar-1',
			'description'   => '',
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
			) );
	}
	add_action( 'widgets_init', 'sonatine_widgets_init' );

endif;


/**
 * Enqueue scripts and styles.
 */
if( !function_exists('sonatine_scripts') ):

	function sonatine_scripts() {

		/* Bootstrap grid */
		wp_enqueue_style( 'sonatine-grid', get_template_directory_uri() . '/inc/bootstrap/css/bootstrap.min.css' );

		/* Main style */
		wp_enqueue_style( 'sonatine-style', get_stylesheet_uri() );

		/* Google font */
		wp_enqueue_style( 'sonatine-google-font', "https://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'");

		/* Icon fonts */
		wp_enqueue_style( 'sonatine-custom-icons', get_template_directory_uri() . '/inc/custom-icons/css/custom-icons.css' );

		/* Modernizr */
		wp_enqueue_script( 'sonatine-modernizr', get_template_directory_uri() . '/js/modernizr-custom.js', array(), '20151215', true );

		/* Navigation */	
		wp_enqueue_script( 'sonatine-navigation', get_template_directory_uri() . '/js/navigation.js', array('jquery', 'sonatine-modernizr'), '20151215', true );

		/* Focus fixe */	
		wp_enqueue_script( 'sonatine-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

		/* Neko script */	
		wp_enqueue_script( 'sonatine-neko-script', get_template_directory_uri() . '/js/neko-script.js', array('jquery'), '20151215', true );


		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}

	}

	add_action( 'wp_enqueue_scripts', 'sonatine_scripts' );

endif;


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
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/neko-customizer/kirki/kirki.php';
require get_template_directory() . '/inc/neko-customizer/kirki-option/neko-kirki.php';
require get_template_directory() . '/inc/neko-customizer/neko-style-customizer.php';
require get_template_directory() . '/inc/neko-customizer/neko-theme-customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
