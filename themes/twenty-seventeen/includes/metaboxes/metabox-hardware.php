<?php
/**
 * Configuration file for creating the 'hardware' metaboxes.
 * Additionally provides save and retrieve algorithms.
 *
 * @package Tag Wall - Twenty Seventeen
 * @since   0.1.0
 */

/**
 * Create 'Custom Meta' metaboxes for the 'hardware' custom post type.
 *
 * @since  0.1.0
 * @uses   add_meta_box()
 * @return void
 */
function tagwall_hardware_metaboxes() {
	add_meta_box(
		'view-details',
		__( 'View Details', 'tagwall' ),
		'tagwall_hardware_view_details_callback',
		'hardware'
	);

}
add_action( 'add_meta_boxes', 'tagwall_hardware_metaboxes' );

/**
 * The callback for add_meta_box(), contains the HTML necessary to create the metaboxes.
 *
 * @since  0.1.0
 * @uses   wp_nonce_field(), get_post_meta(), __(), esc_textarea()
 * @return void
 */
function tagwall_hardware_view_details_callback( $post ) {
	// Add a nonce field so we can check for it later.
	wp_nonce_field( 'tagwall_hardware_view_details_save_data', 'tagwall_hardware_view_details_nonce' );

	/**
	 * Use get_post_meta() to retrieve an existing value
	 * from the database and use the value for the form.
	 */
	$detailed_image_front = get_post_meta( $post->ID, 'detailed_image_front', true );
	$detailed_image_side  = get_post_meta( $post->ID, 'detailed_image_side', true );
	$detailed_image_back  = get_post_meta( $post->ID, 'detailed_image_back', true ); ?>

	<table style="width: 100%;">
		<tr>
			<td class="label">
				<label for="detailed_image_front"><?php echo __( 'Detailed Image [Front]:', 'tagwall' ); ?></label>
			</td>
			<td>
				<textarea id="detailed_image_front" name="detailed_image_front" style="width: 100%;"><?php echo esc_textarea( $detailed_image_front ); ?></textarea>
			</td>
		</tr>
		<tr>
			<td class="label">
				<label for="detailed_image_side"><?php echo __( 'Detailed Image [Side]:', 'tagwall' ); ?></label>
			</td>
			<td>
				<textarea id="detailed_image_side" name="detailed_image_side" style="width: 100%;"><?php echo esc_textarea( $detailed_image_side ); ?></textarea>
			</td>
		</tr>
		<tr>
			<td class="label">
				<label for="detailed_image_back"><?php echo __( 'Detailed Image [Back]:', 'tagwall' ); ?></label>
			</td>
			<td>
				<textarea id="detailed_image_back" name="detailed_image_back" style="width: 100%;"><?php echo esc_textarea( $detailed_image_back ); ?></textarea>
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
function tagwall_hardware_view_details_save_data( $post_id ) {
	/**
	 * We need to verify this came from our screen and with proper authorization,
	 * because the save_post action can be triggered at other times.
	 */
	// Check if our nonce is set.
	if ( ! isset( $_POST['tagwall_hardware_view_details_nonce'] ) )
		return;

	// Verify that the nonce is valid.
	if ( ! wp_verify_nonce( $_POST['tagwall_hardware_view_details_nonce'], 'tagwall_hardware_view_details_save_data' ) )
		return;

	// If this is an autosave, our form has not been submitted, so we don't want to do anything.
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
		return;

	// Check the user's permissions.
	if ( ! current_user_can( 'edit_page', $post_id ) )
		return;

	// Sanitize user input.
	$detailed_image_front = sanitize_text_field( $_POST['detailed_image_front'] );
	$detailed_image_side  = sanitize_text_field( $_POST['detailed_image_side'] );
	$detailed_image_back  = sanitize_text_field( $_POST['detailed_image_back'] );

	// Update the meta field in the database.
	update_post_meta( $post_id, 'detailed_image_front', $detailed_image_front );
	update_post_meta( $post_id, 'detailed_image_side', $detailed_image_side );
	update_post_meta( $post_id, 'detailed_image_back', $detailed_image_back );
}
add_action( 'save_post', 'tagwall_hardware_view_details_save_data' );
