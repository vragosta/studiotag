<?php
/**
 * Create 'Configuration' metabox for the 'company' custom post type.
 *
 * @since  0.1.0
 * @uses   add_meta_box()
 * @return void
 */
function studio_tag_project_metaboxes() {
	add_meta_box(
		'configuration',
		__( 'Company Configuration', 'studio_tag' ),
		'studio_tag_project_callback',
		'company'
	);
}
add_action( 'add_meta_boxes', 'studio_tag_project_metaboxes' );

/**
 * The callback for add_meta_box(), contains the HTML necessary to create the metaboxes.
 *
 * @since  0.1.0
 * @uses   wp_nonce_field(), get_post_meta(), __(), esc_textarea()
 * @return void
 */
function studio_tag_project_callback( $post ) {
	// Add a nonce field so we can check for it later.
	wp_nonce_field( 'studio_tag_project_save_data', 'studio_tag_nonce' );

	/**
	 * Use get_post_meta() to retrieve an existing value
	 * from the database and use the value for the form.
	 */
	$furniture = get_post_meta( $post->ID, 'furniture', true ); ?>

	<table style="width: 100%;">
		<tr>
			<td class="label">
				<label for="furniture"><?php echo __( 'Categories of Furniture:', 'studio_tag' ); ?></label>
			</td>
			<td>
				<textarea id="furniture" name="furniture" style="width: 100%;"><?php echo esc_textarea( $furniture ); ?></textarea>
			</td>
		</tr>
	</table><?php
}

/**
 * Saves and sanitizes the POST data.
 *
 * @since  0.1.0
 * @uses   isset(), wp_verify_nonce(), defined(), current_user_can(), sanitize_text_field(), update_post_meta()
 * @return void
 */
function studio_tag_project_save_data( $post_id ) {
	/**
	 * We need to verify this came from our screen and with proper authorization,
	 * because the save_post action can be triggered at other times.
	 */
	// Check if our nonce is set.
	if ( ! isset( $_POST['studio_tag_nonce'] ) )
		return;
	// Verify that the nonce is valid.
	if ( ! wp_verify_nonce( $_POST['studio_tag_nonce'], 'studio_tag_project_save_data' ) )
		return;
	// If this is an autosave, our form has not been submitted, so we don't want to do anything.
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
		return;
	// Check the user's permissions.
	if ( ! current_user_can( 'edit_page', $post_id ) )
		return;
	// Sanitize user input.
	$furniture = sanitize_text_field( $_POST['furniture'] );
	// Update the meta field in the database.
	update_post_meta( $post_id, 'furniture', $furniture );
}
add_action( 'save_post', 'studio_tag_project_save_data' );
?>
