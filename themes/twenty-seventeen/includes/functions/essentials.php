<?php
/**
 * Essential functions.
 * NOTE: Functions that require action hooks.
 *
 * @package Tag Wall - Twenty Seveteen
 * @since   0.1.0
 */

/**
 * Generates the HTML needed to create the new meta fields.
 *
 * @since  0.1.0
 * @param  object $tag wp object for term
 * @uses   isset(), get_option(), array_keys(), update_option()
 * @return void
 */
function tagwall_taxonomy_add_meta_fields( $tag ) {
	$term_id   = $tag->term_id;
	$term_meta = get_option( "taxonomy_term_$term_id" ); ?>
	<tr class="form-field">
		<th scope="row" style="vertical-align: middle;">
			<label for="term_meta[featured_image_url]"><?php _e( 'Feature Image Url' ); ?></label>
		</th>
		<td>
			<textarea id="term_meta[featured_image_url]" name="term_meta[featured_image_url]"><?php echo $term_meta['featured_image_url']; ?></textarea>
			<p class="description"><?php _e( 'Add an image URL to associate with the taxonomy.' ); ?></p>
		</td>
	</tr><?php
}
add_action( 'panel_edit_form_fields', 'tagwall_taxonomy_add_meta_fields', 10, 2 );

/**
 * Saving algorithm for taxonomies.
 *
 * @since  0.1.0
 * @param  int $term_id id of the term
 * @uses   isset(), get_option(), array_keys(), update_option()
 * @return void
 */
function tagwall_save_taxonomy_meta_fields( $term_id ) {
	if ( isset( $_POST['term_meta'] ) ) :

		$term_meta = get_option( "taxonomy_term_$term_id" );
		$keys      = array_keys( $_POST['term_meta'] );

		foreach ( $keys as $key ) :
			if ( isset( $_POST['term_meta'][$key] ) ) :
				$term_meta[$key] = $_POST['term_meta'][$key];
			endif;
		endforeach;

		update_option( "taxonomy_term_$term_id", $term_meta );
	endif;
}
add_action( 'edited_panel', 'tagwall_save_taxonomy_meta_fields', 10, 2 );
