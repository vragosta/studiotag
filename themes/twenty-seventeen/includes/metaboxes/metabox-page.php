<?php
/**
 * Configuration file for creating the 'page' metaboxes.
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
function tagwall_page_metaboxes() {
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

	add_meta_box(
		'carousel-images',
		__( 'Carousel Images', 'tagwall' ),
		'tagwall_carousel_images_callback',
		'page'
	);
}
add_action( 'add_meta_boxes', 'tagwall_page_metaboxes' );
/**
 * The callback for add_meta_box(), contains the HTML necessary to create the metaboxes.
 *
 * @since  0.1.0
 * @uses   wp_nonce_field(), get_post_meta(), __(), esc_textarea()
 * @return void
 */
function tagwall_carousel_images_callback( $post ) {
	// Add a nonce field so we can check for it later.
	wp_nonce_field( 'tagwall_carousel_images_save_data', 'tagwall_carousel_images_nonce' );
	/**
	 * Use get_post_meta() to retrieve an existing value
	 * from the database and use the value for the form.
	 */
	$carousel_image_one   = get_post_meta( $post->ID, 'carousel_image_one', true );
	$carousel_image_two   = get_post_meta( $post->ID, 'carousel_image_two', true );
	$carousel_image_three = get_post_meta( $post->ID, 'carousel_image_three', true );
	$carousel_image_four  = get_post_meta( $post->ID, 'carousel_image_four', true );
	$carousel_image_five  = get_post_meta( $post->ID, 'carousel_image_five', true );
	$carousel_image_six  = get_post_meta( $post->ID, 'carousel_image_six', true ); ?>

	<table style="width: 100%;">
		<tr>
			<td class="label">
				<label for="carousel_image_one"><?php echo __( 'Image One:', 'tagwall' ); ?></label>
			</td>
			<td>
				<textarea id="carousel_image_one" name="carousel_image_one" style="width: 100%;"><?php echo esc_textarea( $carousel_image_one ); ?></textarea>
			</td>
		</tr>
		<tr>
			<td class="label">
				<label for="carousel_image_two"><?php echo __( 'Image Two:', 'tagwall' ); ?></label>
			</td>
			<td>
				<textarea id="carousel_image_two" name="carousel_image_two" style="width: 100%;"><?php echo esc_textarea( $carousel_image_two ); ?></textarea>
			</td>
		</tr>
		<tr>
			<td class="label">
				<label for="carousel_image_three"><?php echo __( 'Image Three:', 'tagwall' ); ?></label>
			</td>
			<td>
				<textarea id="carousel_image_three" name="carousel_image_three" style="width: 100%;"><?php echo esc_textarea( $carousel_image_three ); ?></textarea>
			</td>
		</tr>
		<tr>
			<td class="label">
				<label for="carousel_image_four"><?php echo __( 'Image Four:', 'tagwall' ); ?></label>
			</td>
			<td>
				<textarea id="carousel_image_four" name="carousel_image_four" style="width: 100%;"><?php echo esc_textarea( $carousel_image_four ); ?></textarea>
			</td>
		</tr>
		<tr>
			<td class="label">
				<label for="carousel_image_five"><?php echo __( 'Image Five:', 'tagwall' ); ?></label>
			</td>
			<td>
				<textarea id="carousel_image_five" name="carousel_image_five" style="width: 100%;"><?php echo esc_textarea( $carousel_image_five ); ?></textarea>
			</td>
		</tr>
		<tr>
			<td class="label">
				<label for="carousel_image_six"><?php echo __( 'Image Six:', 'tagwall' ); ?></label>
			</td>
			<td>
				<textarea id="carousel_image_six" name="carousel_image_six" style="width: 100%;"><?php echo esc_textarea( $carousel_image_six ); ?></textarea>
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
function tagwall_carousel_images_save_data( $post_id ) {
	/**
	 * We need to verify this came from our screen and with proper authorization,
	 * because the save_post action can be triggered at other times.
	 */
	// Check if our nonce is set.
	if ( ! isset( $_POST['tagwall_carousel_images_nonce'] ) )
		return;
	// Verify that the nonce is valid.
	if ( ! wp_verify_nonce( $_POST['tagwall_carousel_images_nonce'], 'tagwall_carousel_images_save_data' ) )
		return;
	// If this is an autosave, our form has not been submitted, so we don't want to do anything.
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
		return;
	// Check the user's permissions.
	if ( ! current_user_can( 'edit_page', $post_id ) )
		return;
	// Sanitize user input.
	$carousel_image_one   = sanitize_text_field( $_POST['carousel_image_one'] );
	$carousel_image_two   = sanitize_text_field( $_POST['carousel_image_two'] );
	$carousel_image_three = sanitize_text_field( $_POST['carousel_image_three'] );
	$carousel_image_four  = sanitize_text_field( $_POST['carousel_image_four'] );
	$carousel_image_five  = sanitize_text_field( $_POST['carousel_image_five'] );
	$carousel_image_six  = sanitize_text_field( $_POST['carousel_image_six'] );
	// Update the meta field in the database.
	update_post_meta( $post_id, 'carousel_image_one', $carousel_image_one );
	update_post_meta( $post_id, 'carousel_image_two', $carousel_image_two );
	update_post_meta( $post_id, 'carousel_image_three', $carousel_image_three );
	update_post_meta( $post_id, 'carousel_image_four', $carousel_image_four );
	update_post_meta( $post_id, 'carousel_image_five', $carousel_image_five );
	update_post_meta( $post_id, 'carousel_image_six', $carousel_image_six );
}
add_action( 'save_post', 'tagwall_carousel_images_save_data' );

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
	$studiotag_info = get_post_meta( $post->ID, 'studiotag_info', true ); ?>

	<table style="width: 100%;">
		<tr>
			<td class="label">
				<label for="studiotag_info"><?php echo __( 'StudioTag General Information Info:', 'tagwall' ); ?></label>
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
				<label for="tagwall_info"><?php echo __( 'Tagwall General Information Info:', 'tagwall' ); ?></label>
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
	update_post_meta( $post_id, 'studiotag_info', $_POST['studiotag_info'] );
}
add_action( 'save_post', 'tagwall_studiotag_general_information_save_data' );

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
	update_post_meta( $post_id, 'tagwall_info', $_POST['tagwall_info']);
}
add_action( 'save_post', 'tagwall_tagwall_general_information_save_data' );

