<?php
/**
 * This file contains the necessary theme configuration functions.
 *
 * @package Tag Wall - Twenty Seventeen
 * @since   0.1.0
 */

// Declare core file namespace.
namespace Tag_Wall\Twenty_Seventeen\Core;

/**
 * Allows use of multiple post thumbnails plugin in this file
 * NOTE: needed when dealing with namespaces.
 */
use \MultiPostThumbnails;

/**
 * Set up theme defaults and register supported WordPress features.
 *
 * @since  0.1.0
 * @uses   add_action(), $n()
 * @return void
 */
function setup() {
	$n = function( $function ) {
		return __NAMESPACE__ . "\\$function";
	};

	add_action( 'after_setup_theme',  $n( 'tagwall_setup' ) );
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
function tagwall_setup() {

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

	// Add custom image sizes.
	add_image_size( 'tagwall-carousel', 1000, 1000, true );

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

	/**
	 * Generate new image meta boxes.
	 * Add 'hero-image' to the page post type.
	 */
	if ( class_exists( 'MultiPostThumbnails' ) ) {
		new MultiPostThumbnails( array(
			'label'     => __( 'Hero Image', 'tagwall' ),
			'id'        => 'hero-image',
			'post_type' => 'system'
		) );

		new MultiPostThumbnails( array(
			'label'     => __( 'Hero Image', 'tagwall' ),
			'id'        => 'hero-image',
			'post_type' => 'page'
		) );

		new MultiPostThumbnails( array(
			'label'     => __( 'Blueprint #1', 'tagwall' ),
			'id'        => 'blueprint-one-image',
			'post_type' => 'technical'
		) );

		new MultiPostThumbnails( array(
			'label'     => __( 'Blueprint #2', 'tagwall' ),
			'id'        => 'blueprint-two-image',
			'post_type' => 'technical'
		) );

		new MultiPostThumbnails( array(
			'label'     => __( 'Blueprint #3', 'tagwall' ),
			'id'        => 'blueprint-three-image',
			'post_type' => 'technical'
		) );
	}
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
		TAGWALL_TEMPLATE_URL . "/assets/lib/bootstrap/dist/js/bootstrap.min.js",
		array( 'jquery' ),
		TAGWALL_VERSION,
		true
	);

	wp_register_script(
		'slick',
		'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js',
		array( 'jquery' ),
		STORYCORPS_ORG_VERSION,
		true
	);

	wp_enqueue_script(
		'tagwall',
		TAGWALL_TEMPLATE_URL . "/assets/js/tagwall---twenty-seventeen.js",
		array( 'jquery', 'bootstrap', 'slick' ),
		TAGWALL_VERSION,
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
		TAGWALL_TEMPLATE_URL . "/assets/lib/fontawesome/css/font-awesome.min.css",
		array(),
		TAGWALL_VERSION
	);

	wp_register_style(
		'ionicons',
		TAGWALL_TEMPLATE_URL . "/assets/lib/ionicons/css/ionicons.min.css",
		array(),
		TAGWALL_VERSION
	);

	wp_register_style(
		'bootstrap',
		TAGWALL_TEMPLATE_URL . "/assets/lib/bootstrap/dist/css/bootstrap.min.css",
		array( 'fontawesome' ),
		TAGWALL_VERSION
	);

	wp_register_style(
		'sanitize',
		TAGWALL_TEMPLATE_URL . "/assets/lib/sanitize/sanitize.min.css",
		array(),
		TAGWALL_VERSION
	);

	wp_register_style(
		'hamburger',
		TAGWALL_TEMPLATE_URL . "/assets/lib/hamburger/hamburger.css",
		array(),
		TAGWALL_VERSION
	);

	wp_register_style(
		'slick',
		'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css',
		array(),
		STORYCORPS_ORG_VERSION
	);

	wp_register_style(
		'slick-theme',
		'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css',
		array( 'slick' ),
		STORYCORPS_ORG_VERSION
	);

	wp_register_style(
		'fonts',
		TAGWALL_TEMPLATE_URL . "/assets/css/tagwall-fonts---twenty-seventeen.css",
		array(),
		TAGWALL_VERSION
	);

	wp_register_style(
		'core-components',
		TAGWALL_TEMPLATE_URL . "/assets/css/tagwall-core-components---twenty-seventeen.css",
		array(),
		TAGWALL_VERSION
	);

	wp_register_style(
		'tagwall-header',
		TAGWALL_TEMPLATE_URL . "/assets/css/tagwall-header---twenty-seventeen.css",
		array(),
		TAGWALL_VERSION
	);

	wp_register_style(
		'tagwall-footer',
		TAGWALL_TEMPLATE_URL . "/assets/css/tagwall-footer---twenty-seventeen.css",
		array(),
		TAGWALL_VERSION
	);

	// Only load this CSS if on the front page.
	if ( is_front_page() ) :
		wp_enqueue_style(
			'tagwall-front-page',
			TAGWALL_TEMPLATE_URL . "/assets/css/tagwall-front-page---twenty-seventeen.css",
			array(),
			TAGWALL_VERSION
		);
	endif;

	if ( is_post_type_archive() ) :
		wp_enqueue_style(
			'tagwall-archive',
			TAGWALL_TEMPLATE_URL . "/assets/css/tagwall-archive---twenty-seventeen.css",
			array(),
			TAGWALL_VERSION
		);
	endif;

	if ( is_singular( 'system' ) || is_home() ) :
		wp_enqueue_style(
			'tagwall-systems',
			TAGWALL_TEMPLATE_URL . "/assets/css/tagwall-single-systems---twenty-seventeen.css",
			array(),
			TAGWALL_VERSION
		);
	endif;

	if ( is_page() ) :
		wp_enqueue_style(
			'tagwall-page',
			TAGWALL_TEMPLATE_URL . "/assets/css/tagwall-page---twenty-seventeen.css",
			array(),
			TAGWALL_VERSION
		);
	endif;

	wp_enqueue_style(
		'tagwall',
		TAGWALL_TEMPLATE_URL . "/assets/css/tagwall---twenty-seventeen.css",
		array( 'bootstrap', 'fontawesome', 'ionicons', 'sanitize', 'hamburger', 'slick', 'slick-theme', 'fonts', 'core-components', 'tagwall-header', 'tagwall-footer' ),
		TAGWALL_VERSION
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
		'name'          => __( 'Footer Column One', 'tagwall' ),
		'id'            => 'footer-column-one',
		'description'   => 'Column one contents',
		'class'         => '',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	);

	$footer_column_two = array(
		'name'          => __( 'Footer Column Two', 'tagwall' ),
		'id'            => 'footer-column-two',
		'description'   => 'Column two contents',
		'class'         => '',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	);

	$footer_column_three = array(
		'name'          => __( 'Footer Column Three', 'tagwall' ),
		'id'            => 'footer-column-three',
		'description'   => 'Column three contents',
		'class'         => '',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	);

	$footer_left = array(
		'name'          => __( 'Footer Left Column', 'tagwall' ),
		'id'            => 'footer-left-column',
		'description'   => 'Left column contents',
		'class'         => '',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	);

	register_sidebar( $footer_column_one );
	register_sidebar( $footer_column_two );
	register_sidebar( $footer_column_three );
	register_sidebar( $footer_left );
}
