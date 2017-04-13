<?php
/**
 * Configuration file for creating the 'glass' metaboxes.
 * Additionally provides save and retrieve algorithms.
 *
 * @package Tag Wall - Twenty Seventeen
 * @since   0.1.0
 */

/**
 * Create 'custom Meta' metaboxes for the 'glass' custom post type.
 *
 * @since  0.1.0
 * @uses   add_meta_box()
 * @return void
 */
function tagwall_glass_metaboxes() {
	add_meta_box(
		'configuration',
		__( 'Configuration', 'tagwall' ),
		'tagwall_glass_configuration_callback',
		'glass'
	);
}
add_action( 'add_meta_boxes', 'tagwall_glass_metaboxes' );

/**
 * The callback for add_meta_box(), contains the HTML necessary to create the metaboxes.
 *
 * @since  0.1.0
 * @uses   wp_nonce_field(), get_post_meta(), __(), esc_textarea()
 * @return void
 */
function tagwall_glass_configuration_callback( $post ) {
	// Add a nonce field so we can check for it later.
	wp_nonce_field( 'tagwall_glass_configuration_save_data', 'tagwall_glass_configuration_nonce' );

	/**
	 * Use get_post_meta() to retrieve an existing value
	 * from the database and use the value for the form.
	 */
	$glass_id = get_post_meta( $post->ID, 'glass_id', true ); ?>

	<table style="width: 100%;">
		<tr>
			<td class="label">
				<label for="glass_id"><?php echo __( 'Glass ID:', 'tagwall' ); ?></label>
			</td>
			<td>
				<textarea id="glass_id" name="glass_id" style="width: 100%;"><?php echo esc_textarea( $glass_id ); ?></textarea>
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
function tagwall_glass_configuration_save_data( $post_id ) {
	/**
	 * We need to verify this came from our screen and with proper authorization,
	 * because the save_post action can be triggered at other times.
	 */
	// Check if our nonce is set.
	if ( ! isset( $_POST['tagwall_glass_configuration_nonce'] ) )
		return;

	// Verify that the nonce is valid.
	if ( ! wp_verify_nonce( $_POST['tagwall_glass_configuration_nonce'], 'tagwall_glass_configuration_save_data' ) )
		return;

	// If this is an autosave, our form has not been submitted, so we don't want to do anything.
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
		return;

	// Check the user's permissions.
	if ( ! current_user_can( 'edit_page', $post_id ) )
		return;

	// Sanitize user input.
	$glass_id = sanitize_text_field( $_POST['glass_id'] );

	// Update the meta field in the database.
	update_post_meta( $post_id, 'glass_id', $glass_id );
}
add_action( 'save_post', 'tagwall_glass_configuration_save_data' );
