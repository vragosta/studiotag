<?php
/**
 * Essential functions.
 * NOTE: Functions that require action hooks.
 *
 * @package Tag Wall - Twenty Seveteen
 * @since   0.1.0
 */

/**
 * Generates the HTML needed to create the new panel term meta fields.
 *
 * @since  0.1.0
 * @param  object $tag wp object for term
 * @uses   isset(), get_option(), _e()
 * @return void
 */
function tagwall_taxonomy_panel_add_meta_fields( $tag ) {
	$term_id   = $tag->term_id;
	$term_meta = get_option( "taxonomy_term_$term_id" ); ?>
	<tr class="form-field">
		<th scope="row" style="vertical-align: middle;">
			<label for="term_meta[featured_image_url]"><?php _e( 'Feature Image Url' ); ?></label>
		</th>
		<td>
			<textarea id="term_meta[featured_image_url]" name="term_meta[featured_image_url]"><?php echo $term_meta['featured_image_url']; ?></textarea>
			<p class="description"><?php _e( 'Add an image URL to associate with the taxonomy term.' ); ?></p>
		</td>
	</tr><?php
}
add_action( 'panel_edit_form_fields', 'tagwall_taxonomy_panel_add_meta_fields', 10, 2 );
add_action( 'hardware_type_edit_form_fields', 'tagwall_taxonomy_panel_add_meta_fields', 10, 2 );
add_action( 'film_type_edit_form_fields', 'tagwall_taxonomy_panel_add_meta_fields', 10, 2 );

/**
 * Saving algorithm for taxonomies.
 *
 * @since  0.1.0
 * @param  int $term_id id of the term
 * @uses   isset(), get_option(), array_keys(), update_option()
 * @return void
 */
function tagwall_taxonomy_panel_save_meta_fields( $term_id ) {
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
add_action( 'edited_panel', 'tagwall_taxonomy_panel_save_meta_fields', 10, 2 );
add_action( 'edited_hardware_type', 'tagwall_taxonomy_panel_save_meta_fields', 10, 2 );
add_action( 'edited_film_type', 'tagwall_taxonomy_panel_save_meta_fields', 10, 2 );

/**
 * Generates the HTML needed to create the new glass term meta fields.
 *
 * @since  0.1.0
 * @param  object $tag wp object for term
 * @uses   isset(), get_option(), _e()
 * @return void
 */
function tagwall_taxonomy_glass_type_add_meta_fields( $tag ) {
	$term_id   = $tag->term_id;
	$term_meta = get_option( "taxonomy_term_$term_id" ); ?>
	<tr class="form-field">
		<th scope="row" style="vertical-align: middle;">
			<label for="term_meta[interlayer_description]"><?php _e( 'Interlayer Description' ); ?></label>
		</th>
		<td>
			<textarea id="term_meta[interlayer_description]" name="term_meta[interlayer_description]"><?php echo $term_meta['interlayer_description']; ?></textarea>
		</td>
	</tr>
	<tr class="form-field">
		<th scope="row" style="vertical-align: middle;">
			<label for="term_meta[glass_combination]"><?php _e( 'Glass Combination' ); ?></label>
		</th>
		<td>
			<textarea id="term_meta[glass_combination]" name="term_meta[glass_combination]"><?php echo $term_meta['glass_combination']; ?></textarea>
		</td>
	</tr>
	<tr class="form-field">
		<th scope="row" style="vertical-align: middle;">
			<label for="term_meta[max_size]"><?php _e( 'Max Size of Glass Panel' ); ?></label>
		</th>
		<td>
			<textarea id="term_meta[max_size]" name="term_meta[max_size]"><?php echo $term_meta['max_size']; ?></textarea>
		</td>
	</tr>
	<tr class="form-field">
		<th scope="row" style="vertical-align: middle;">
			<label for="term_meta[glass_thickness]"><?php _e( 'Glass Thickness' ); ?></label>
		</th>
		<td>
			<textarea id="term_meta[glass_thickness]" name="term_meta[glass_thickness]"><?php echo $term_meta['glass_thickness']; ?></textarea>
		</td>
	</tr>
	<tr class="form-field">
		<th scope="row" style="vertical-align: middle;">
			<label for="term_meta[glass_laminated]"><?php _e( 'Glass Laminated' ); ?></label>
		</th>
		<td>
			<textarea id="term_meta[glass_laminated]" name="term_meta[glass_laminated]"><?php echo $term_meta['glass_laminated']; ?></textarea>
		</td>
	</tr><?php
}
add_action( 'glass_type_edit_form_fields', 'tagwall_taxonomy_glass_type_add_meta_fields', 10, 2 );

/**
 * Saving algorithm for taxonomies.
 *
 * @since  0.1.0
 * @param  int $term_id id of the term
 * @uses   isset(), get_option(), array_keys(), update_option()
 * @return void
 */
function tagwall_taxonomy_glass_type_save_meta_fields( $term_id ) {
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
add_action( 'edited_glass_type', 'tagwall_taxonomy_glass_type_save_meta_fields', 10, 2 );
