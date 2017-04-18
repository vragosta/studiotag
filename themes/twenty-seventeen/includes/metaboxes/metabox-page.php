<?php
/**
 * Configuration file for creating the 'page' metaboxes.
 * Additionally provides save and retrieve algorithms.
 *
 * @package Tag Wall - Twenty Seventeen
 * @since   0.1.0
 */

/**
 * Create 'Custom Meta' metaboxes for the 'page' custom post type.
 *
 * @since  0.1.0
 * @uses   add_meta_box()
 * @return void
 */
function tagwall_page_metaboxes(){
	add_meta_box(
		'studiotag-general-information',
		__( 'STUDIOTAG General Information', 'tagwall' ),
		'tagwall_studiotag_general_information_callback',
		'page'
	);

	add_meta_box(
		'tagwall-general-information',
		__( 'TAGWALL General Information', 'tagwall' ),
		'tagwall_tagwall_general_information_callback',
		'page'
	);
}

/**
 * The callback for add_meta_box(), contains the HTML necessary to create the metaboxes.
 *
 * @since  0.1.0
 * @uses   wp_nonce_field(), get_post_meta(), __(), esc_textarea()
 * @return void
 */
function tagwall_studiotag_general_information_callback($post){
	// Add a nonce field so we can check for it later.
	wp_nonce_field( 'tagwall_studiotag_general_information_save_data', 'tagwall_studiotag_general_information_nonce' );

	/**
	 * Use get_post_meta() to retrieve an existing value
	 * from the database and use the value for the form.
	 */
	$studiotag_info = get_post_meta( $post->ID, 'studiotag_id', true ); ?>

	<table style="width: 100%;">
		<tr>
			<td class="label">
				<label for="studiotag_info"><?php echo __( 'StudioTag General Information ID:', 'tagwall' ); ?></label>
			</td>
			<td>
				<textarea id="studiotag_info" name="studiotag_info" style="width: 100%;"><?php echo esc_textarea( $studiotag_info ); ?></textarea>
			</td>
		</tr>
	</table><?php
}

/**
 * The callback for add_meta_box(), contains the HTML necessary to create the metaboxes.
 *
 * @since  0.1.0
 * @uses   wp_nonce_field(), get_post_meta(), __(), esc_textarea()
 * @return void
 */
function tagwall_tagwall_general_information_callback($post){
	// Add a nonce field so we can check for it later.
	wp_nonce_field( 'tagwall_tagwall_general_information_save_data', 'tagwall_tagwall_general_information_nonce' );

	/**
	 * Use get_post_meta() to retrieve an existing value
	 * from the database and use the value for the form.
	 */
	$tagwall_info = get_post_meta( $post->ID, 'tagwall_info', true ); ?>

	<table style="width: 100%;">
		<tr>
			<td class="label">
				<label for="tagwall_info"><?php echo __( 'Tagwall General Information ID:', 'tagwall' ); ?></label>
			</td>
			<td>
				<textarea id="tagwall_info" name="tagwall_info" style="width: 100%;"><?php echo esc_textarea( $tagwall_info ); ?></textarea>
			</td>
		</tr>
	</table><?php
}


/**
 * Saves the POST data.
 *
 * @since  0.1.0
 * @uses   isset(), wp_verify_nonce(), defined(), current_user_can(), sanitize_text_field(), update_post_meta()
 * @return void
 */
function tagwall_studiotag_general_information_save_data($post_id){
	/**
	 * We need to verify this came from our screen and with proper authorization,
	 * because the save_post action can be triggered at other times.
	 */
	// Check if our nonce is set.
	if ( ! isset( $_POST['tagwall_studiotag_general_information_nonce'] ) )
		return;

	// Verify that the nonce is valid.
	if ( ! wp_verify_nonce( $_POST['tagwall_studiotag_general_information_nonce'], 'tagwall_tagwall_general_information_save_data' ) )
		return;

	// If this is an autosave, our form has not been submitted, so we don't want to do anything.
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
		return;

	// Check the user's permissions.
	if ( ! current_user_can( 'edit_page', $post_id ) )
		return;

	// Update the meta field in the database.
	update_post_meta( $post_id, 'studiotag_info', $studiotag_info );
}

/**
 * Saves the POST data.
 *
 * @since  0.1.0
 * @uses   isset(), wp_verify_nonce(), defined(), current_user_can(), sanitize_text_field(), update_post_meta()
 * @return void
 */
function tagwall_tagwall_general_information_save_data($post_id){
	/**
	 * We need to verify this came from our screen and with proper authorization,
	 * because the save_post action can be triggered at other times.
	 */
	// Check if our nonce is set.
	if ( ! isset( $_POST['tagwall_studiotag_general_information_nonce'] ) )
		return;

	// Verify that the nonce is valid.
	if ( ! wp_verify_nonce( $_POST['tagwall_studiotag_general_information_nonce'], 'tagwall_tagwall_general_information_save_data' ) )
		return;

	// If this is an autosave, our form has not been submitted, so we don't want to do anything.
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
		return;

	// Check the user's permissions.
	if ( ! current_user_can( 'edit_page', $post_id ) )
		return;

	// Update the meta field in the database.
	update_post_meta( $post_id, 'tagwall_info', $tagwall_info );
}

