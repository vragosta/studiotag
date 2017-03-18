<?php
/**
 * Helper functions.
 *
 * @package Tag Wall - Twenty Seveteen
 * @since   0.1.0
 */

// Declare helpers file namespace.
namespace Tag_wall\Twenty_Seventeen\Helpers;

/**
 * Allows use of multiple post thumbnails plugin in this file
 * NOTE: needed when dealing with namespaces.
 */
use \MultiPostThumbnails;

/**
 * If the featured image exists, return the attached image url with appropriate size dimensions,
 * otherwise return the attached image url.
 *
 * @uses   wp_get_attachment_image_src(), get_post_thumbnail_id
 * @param  int    $post wp_post object
 * @return string void  image url
 */
function studiowall_get_featured_image( $post ) {
	return wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' )[0];
}

/**
 * If the hero image exists, return the attached image url with the appropriate size dimensions,
 * otherwise return nothing.
 *
 * @uses   class_exists(), MultiPostThumbnails::has_post_thumbnail(), MultiPostThumbnails::get_post_thumbnail_url
 * @param  int    $post wp_post object
 * @return string void  image url
 */
function studiowall_get_hero_image( $post ) {
	return ( class_exists( 'MultiPostThumbnails' ) && MultiPostThumbnails::has_post_thumbnail( $post->post_type, 'hero-image', $post->ID ) ) ?
		MultiPostThumbnails::get_post_thumbnail_url( $post->post_type, 'hero-image', $post->ID, 'full' ) : '';
}
