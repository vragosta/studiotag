<?php
/**
 * Helper functions.
 *
 * @package Tag Wall - Twenty Seveteen
 * @since   0.1.0
 */

// Declare helpers file namespace.
namespace Tag_Wall\Twenty_Seventeen\Helpers;

// Since file is namespaced, need to add WP_Query.
use \WP_Query;

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
function tagwall_get_featured_image( $post ) {
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
function tagwall_get_hero_image( $post ) {
	return ( class_exists( 'MultiPostThumbnails' ) && MultiPostThumbnails::has_post_thumbnail( $post->post_type, 'hero-image', $post->ID ) ) ?
		MultiPostThumbnails::get_post_thumbnail_url( $post->post_type, 'hero-image', $post->ID, 'full' ) : '';
}

/**
 * If the blueprint image exists, return the attached image url with the appropriate size dimensions,
 * otherwise return nothing.
 *
 * @uses   class_exists(), MultiPostThumbnails::has_post_thumbnail(), MultiPostThumbnails::get_post_thumbnail_url
 * @param  int    $post wp_post object
 * @param  string $id   blueprint image identifier
 * @return string void  image url
 */
function tagwall_get_blueprint_image( $post, $id ) {
	return ( class_exists( 'MultiPostThumbnails' ) && MultiPostThumbnails::has_post_thumbnail( $post->post_type, 'blueprint-' . $id . '-image', $post->ID ) ) ?
		MultiPostThumbnails::get_post_thumbnail_url( $post->post_type, 'blueprint-' . $id . '-image', $post->ID, 'full' ) : '';
}

/**
 * Cater a custom query per post type if taxonomies and terms exist.
 *
 * @uses   get_object_taxonomies(), get_terms()
 * @param  string $post_type post-type
 * @return array  $args      arguements for wp_query
 */
function tagwall_get_query_arguements( $post_type ) {

	// Default arguements for all custom queries.
	$args = array(
		'post_type' => $post_type,
		'order'     => 'ASC'
	);

	// Get the post type taxonomies.
	$taxonomies = get_object_taxonomies( $post_type, 'objects' );

	// If the post type has taxonomies, craft new taxonomy array with associated terms.
	if ( $taxonomies ) :
		foreach( $taxonomies as $taxonomy ) :

			$taxonomy_args[] = array(
				'taxonomy' => $taxonomy->name,
				'terms'    => get_terms( $taxonomy->name, array( 'fields' => 'ids' ) ),
				'operator' => 'NOT IN'
			);

		endforeach;

		// Add the taxonomies and associated terms to the default arguements array.
		$args['tax_query'] = $taxonomy_args;

	endif;

	return $args;
}

/**
 * Get the taxonomies based on post type sent to function.
 *
 * @uses   get_object_taxonomies(), get_terms()
 * @param  string $post_type post-type
 * @return array  $terms     post-type terms
 */
function tagwall_get_terms( $post_type ) {

	// Define local variables.
	$terms = array();
	$count = 0;

	// Get the post type taxonomies.
	$taxonomies = get_object_taxonomies( $post_type, 'objects' );

	// If the post type has taxonomies, add all of the taxonomy terms to the terms array.
	if ( $taxonomies ) :
		foreach( $taxonomies as $taxonomy ) :

			// Get the taxonomy terms.
			$tax_terms = get_terms( array(
				'taxonomy'   => $taxonomy->name,
				'hide_empty' => false
				)
			);

			// In the event that multiple terms are returned per taxonomy, we need to iterate through those as well.
			foreach( $tax_terms as $term ) :
				$terms[] = $term;
			endforeach;

		endforeach;
	endif;

	return $terms;
}

/**
 * TODO
 *
 * @uses   tagwall_get_query_arguements(), tagwall_get_terms()
 * @return array $terms post-type terms
 */
function tagwall_get_post_type_object( $post_type ) {

	// TODO
	$custom = (object) array(
		'name'  => $post_type->name,
		'label' => $post_type->label,
		'slug'  => $post_type->rewrite['slug'],
		'query' => new WP_Query( tagwall_get_query_arguements( $post_type->name ) ),
		'terms' => tagwall_get_terms( $post_type->name )
	);

	return $custom;
}

/**
 * Create an array that holds specific post type information.
 *
 * @uses   get_post_types(), array_shift(), tagwall_get_query_arguements(), tagwall_get_terms()
 * @return array $terms post-type terms
 */
function tagwall_get_post_type_objects() {

	// Define local variables.
	$custom = array();

	// Get all custom post types.
	$post_types = get_post_types(
		array( '_builtin' => false ),
		'objects'
	);

	// Remove the first element of the array [CPT: system].
	array_shift( $post_types );

	// Foreach custom post type, set the respective arguements and terms.
	foreach( $post_types as $post_type ) :

		$custom[] = (object) array(
			'name'  => $post_type->name,
			'label' => $post_type->label,
			'slug'  => $post_type->rewrite['slug'],
			'query' => new WP_Query( tagwall_get_query_arguements( $post_type->name ) ),
			'terms' => tagwall_get_terms( $post_type->name )
		);

	endforeach;

	return $custom;
}
