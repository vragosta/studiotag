<?php
/**
 * This file contains the necessary theme configuration functions.
 *
 * @package    Studio Tag - Twenty Seventeen
 * @subpackage Studio Wall - Twenty Seventeen
 * @since      0.1.0
 */

// Declare core file namespace.
namespace studio_tag_com\Studio_Wall\Twenty_Seventeen\Core;

/**
 * Set up theme defaults and register supported WordPress features.
 *
 * @since  0.1.0
 * @uses   add_action()
 * @return void
 */
function setup() {
	$n = function( $function ) {
		return __NAMESPACE__ . "\\$function";
	};

	add_action( 'after_setup_theme',  $n( 'studiowall_setup' ) );
	add_action( 'wp_enqueue_scripts', $n( 'scripts' ) );
	add_action( 'wp_enqueue_scripts', $n( 'styles' ) );
	add_action( 'widgets_init',       $n( 'sidebars' ) );
}

/**
 * Declare theme support.
 *
 * @since  0.1.0
 * @uses   add_theme_support(), set_post_thumbnail_size(), add_post_type_support(), show_admin_bar()
 * @return void
 */
function studiowall_setup() {

	// Add RSS feed links to <head> for posts and comments.
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );
	add_theme_support( 'menus' );
	add_theme_support( 'widgets' );

	// Enable support for Post Thumbnails, and declare two sizes.
	add_theme_support( 'post-thumbnails' );

	// Create thumbnail default size.
	set_post_thumbnail_size( 672, 372, true );

	/**
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

	// Add excerpt support to...
	add_post_type_support( 'page', 'excerpt' );

	// If set to 'false', the admin bar will not display on front end.
	show_admin_bar( false );
}

/**
 * Enqueue scripts for front-end.
 *
 * @since  0.1.0
 * @uses   wp_register_script(), wp_enqueue_script(), wp_localize_script()
 * @return void
 */
function scripts() {
	wp_register_script(
		'bootstrap',
		STUDIO_WALL_TEMPLATE_URL . "/assets/lib/bootstrap/dist/js/bootstrap.min.js",
		array( 'jquery' ),
		STUDIO_WALL_VERSION,
		true
	);

	wp_enqueue_script(
		'studio_wall',
		STUDIO_WALL_TEMPLATE_URL . "/assets/js/studiowall---twenty-seventeen.js",
		array( 'jquery', 'bootstrap' ),
		STUDIO_WALL_VERSION,
		true
	);
}

/**
 * Enqueue styles for front-end.
 *
 * @since  0.1.0
 * @uses   wp_register_style(), wp_enqueue_style()
 * @return void
 */
function styles() {
	wp_register_style(
		'fontawesome',
		STUDIO_WALL_TEMPLATE_URL . "/assets/lib/fontawesome/css/font-awesome.min.css",
		array(),
		STUDIO_WALL_VERSION
	);

	wp_register_style(
		'ionicons',
		STUDIO_WALL_TEMPLATE_URL . "/assets/lib/ionicons/css/ionicons.min.css",
		array(),
		STUDIO_WALL_VERSION
	);

	wp_register_style(
		'bootstrap',
		STUDIO_WALL_TEMPLATE_URL . "/assets/lib/bootstrap/dist/css/bootstrap.min.css",
		array( 'fontawesome' ),
		STUDIO_WALL_VERSION
	);

	wp_register_style(
		'sanitize',
		STUDIO_WALL_TEMPLATE_URL . "/assets/lib/sanitize/sanitize.min.css",
		array(),
		STUDIO_WALL_VERSION
	);

	wp_register_style(
		'hamburger',
		STUDIO_WALL_TEMPLATE_URL . "/assets/lib/hamburger/hamburger.css",
		array(),
		STUDIO_WALL_VERSION
	);

	wp_register_style(
		'fonts',
		STUDIO_WALL_TEMPLATE_URL . "/assets/css/studiowall-fonts---twenty-seventeen.css",
		array(),
		STUDIO_WALL_VERSION
	);

	wp_register_style(
		'core-components',
		STUDIO_WALL_TEMPLATE_URL . "/assets/css/studiowall-core-components---twenty-seventeen.css",
		array(),
		STUDIO_WALL_VERSION
	);

	wp_register_style(
		'studio-wall-header',
		STUDIO_WALL_TEMPLATE_URL . "/assets/css/studiowall-header---twenty-seventeen.css",
		array(),
		STUDIO_WALL_VERSION
	);

	// Only load this CSS if on the front page.
	if ( is_front_page() ) :
		wp_enqueue_style(
			'studio-wall-header-front-page',
			STUDIO_WALL_TEMPLATE_URL . "/assets/css/studiowall-header-front-page---twenty-seventeen.css",
			array(),
			STUDIO_WALL_VERSION
		);
	endif;

	wp_register_style(
		'studio-wall-footer',
		STUDIO_WALL_TEMPLATE_URL . "/assets/css/studiowall-footer---twenty-seventeen.css",
		array(),
		STUDIO_WALL_VERSION
	);

	wp_enqueue_style(
		'studio_wall',
		STUDIO_WALL_TEMPLATE_URL . "/assets/css/studiowall---twenty-seventeen.css",
		array( 'bootstrap', 'fontawesome', 'ionicons', 'sanitize', 'hamburger', 'fonts', 'core-components', 'studio-wall-header', 'studio-wall-footer' ),
		STUDIO_WALL_VERSION
	);
}

/**
 * Register sidebars for back-end.
 *
 * @since  0.1.0
 * @uses   __(), register_sidebar()
 * @return void
 */
function sidebars() {
	$footer_column_one = array(
		'name'          => __( 'Footer Column One', 'theme_text_domain' ),
		'id'            => 'footer-column-one',
		'description'   => 'Column one contents',
		'class'         => '',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	);

	$footer_column_two = array(
		'name'          => __( 'Footer Column Two', 'theme_text_domain' ),
		'id'            => 'footer-column-two',
		'description'   => 'Column two contents',
		'class'         => '',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	);

	$footer_column_three = array(
		'name'          => __( 'Footer Column Three', 'theme_text_domain' ),
		'id'            => 'footer-column-three',
		'description'   => 'Column three contents',
		'class'         => '',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	);

	register_sidebar( $footer_column_one );
	register_sidebar( $footer_column_two );
	register_sidebar( $footer_column_three );
}
