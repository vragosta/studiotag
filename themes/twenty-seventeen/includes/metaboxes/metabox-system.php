<?php
/**
 * @package    Studio Tag - Twenty Seventeen
 * @subpackage Studio Wall - Twenty Seventeen
 *
 * Configuration file for creating the 'system' metaboxes.
 * Additionally provides save and retrieve algorithms.
 */


/**
 * Create 'Configuration' metabox for the 'system' custom post type.
 *
 * @since  0.1.0
 * @uses   add_meta_box()
 * @return void
 */
function studio_wall_systems_custom_one_metabox() {
	add_meta_box(
		'custom-one',
		__( 'Systems Custom Meta One', 'studio_tag' ),
		'studio_wall_systems_custom_one_callback',
		'system'
	);
}
add_action( 'add_meta_boxes', 'studio_wall_systems_custom_one_metabox' );

/**
 * The callback for add_meta_box(), contains the HTML necessary to create the metaboxes.
 *
 * @since  0.1.0
 * @uses   wp_nonce_field(), get_post_meta(), __(), esc_textarea()
 * @return void
 */
function studio_wall_systems_custom_one_callback( $post ) {
	// Add a nonce field so we can check for it later.
	wp_nonce_field( 'studio_wall_systems_custom_one_save_data', 'studio_wall_nonce' );

	/**
	 * Use get_post_meta() to retrieve an existing value
	 * from the database and use the value for the form.
	 */
	$custom_one_title   = json_decode( get_post_meta( $post->ID, 'custom_one_title', true ) );
	$custom_one_content = json_decode( get_post_meta( $post->ID, 'custom_one_content', true ) );
	// $custom_two   = json_decode( get_post_meta( $post->ID, 'custom_two', true ) );
	// $custom_three = json_decode( get_post_meta( $post->ID, 'custom_three', true ) );
	// $custom_four  = json_decode( get_post_meta( $post->ID, 'custom_four', true ) );
	// $custom_five  = json_decode( get_post_meta( $post->ID, 'custom_five', true ) );
	// $custom_six   = json_decode( get_post_meta( $post->ID, 'custom_six', true ) );
	// $custom_seven = json_decode( get_post_meta( $post->ID, 'custom_seven', true ) );
	// $custom_eight = json_decode( get_post_meta( $post->ID, 'custom_eight', true ) );
	// $custom_nine  = json_decode( get_post_meta( $post->ID, 'custom_nine', true ) );
	// $custom_ten   = json_decode( get_post_meta( $post->ID, 'custom_ten', true ) ); ?>

	<table style="width: 100%;">
		<tr>
			<td class="label">
				<label for="custom_one_title"><?php echo __( 'Title:', 'studio_tag' ); ?></label>
			</td>
			<td>
				<textarea id="custom_one_title" name="custom_one_title" style="width: 100%;"><?php echo esc_textarea( $custom_one_title ); ?></textarea>
			</td>
		</tr>
		<tr>
			<td class="label">
				<label for="custom_one_content"><?php echo __( 'Content:', 'studio_tag' ); ?></label>
			</td>
			<td>
				<textarea id="custom_one_content" name="custom_one_content" style="width: 100%;"><?php echo esc_textarea( $custom_one_content ); ?></textarea>
			</td>
		</tr>
		<!-- <tr>
			<td class="label">
				<label for="custom_two"><?php echo __( 'Custom Field 2:', 'studio_tag' ); ?></label>
			</td>
			<td>
				<?php
					wp_editor( $custom_two, 'custom_two', array(
						'media_buttons' => false,
						'editor_height' => 200,
						'quicktags'     => true,
					) );
				?>
			</td>
		</tr>
		<tr>
			<td class="label">
				<label for="custom_three"><?php echo __( 'Custom Field 3:', 'studio_tag' ); ?></label>
			</td>
			<td>
				<?php
					wp_editor( $custom_three, 'custom_three', array(
						'media_buttons' => false,
						'editor_height' => 200,
						'quicktags'     => true,
					) );
				?>
			</td>
		</tr>
		<tr>
			<td class="label">
				<label for="custom_four"><?php echo __( 'Custom Field 4:', 'studio_tag' ); ?></label>
			</td>
			<td>
				<?php
					wp_editor( $custom_four, 'custom_four', array(
						'media_buttons' => false,
						'editor_height' => 200,
						'quicktags'     => true,
					) );
				?>
			</td>
		</tr>
		<tr>
			<td class="label">
				<label for="custom_five"><?php echo __( 'Custom Field 5:', 'studio_tag' ); ?></label>
			</td>
			<td>
				<?php
					wp_editor( $custom_five, 'custom_five', array(
						'media_buttons' => false,
						'editor_height' => 200,
						'quicktags'     => true,
					) );
				?>
			</td>
		</tr>
		<tr>
			<td class="label">
				<label for="custom_six"><?php echo __( 'Custom Field 6:', 'studio_tag' ); ?></label>
			</td>
			<td>
				<?php
					wp_editor( $custom_six, 'custom_six', array(
						'media_buttons' => false,
						'editor_height' => 200,
						'quicktags'     => true,
					) );
				?>
			</td>
		</tr>
		<tr>
			<td class="label">
				<label for="custom_seven"><?php echo __( 'Custom Field 7:', 'studio_tag' ); ?></label>
			</td>
			<td>
				<?php
					wp_editor( $custom_seven, 'custom_seven', array(
						'media_buttons' => false,
						'editor_height' => 200,
						'quicktags'     => true,
					) );
				?>
			</td>
		</tr>
		<tr>
			<td class="label">
				<label for="custom_eight"><?php echo __( 'Custom Field 8:', 'studio_tag' ); ?></label>
			</td>
			<td>
				<?php
					wp_editor( $custom_eight, 'custom_eight', array(
						'media_buttons' => false,
						'editor_height' => 200,
						'quicktags'     => true,
					) );
				?>
			</td>
		</tr>
		<tr>
			<td class="label">
				<label for="custom_nine"><?php echo __( 'Custom Field 9:', 'studio_tag' ); ?></label>
			</td>
			<td>
				<?php
					wp_editor( $custom_nine, 'custom_nine', array(
						'media_buttons' => false,
						'editor_height' => 200,
						'quicktags'     => true,
					) );
				?>
			</td>
		</tr>
		<tr>
			<td class="label">
				<label for="custom_ten"><?php echo __( 'Custom Field 10:', 'studio_tag' ); ?></label>
			</td>
			<td>
				<?php
					wp_editor( $custom_ten, 'custom_ten', array(
						'media_buttons' => false,
						'editor_height' => 200,
						'quicktags'     => true,
					) );
				?>
			</td>
		</tr> -->
	</table>
	<?php
}

/**
 * Saves and sanitizes the POST data.
 *
 * @since  0.1.0
 * @uses   isset(), wp_verify_nonce(), defined(), current_user_can(), sanitize_text_field(), update_post_meta()
 * @return void
 */
function studio_wall_systems_custom_one_save_data( $post_id ) {
	/**
	 * We need to verify this came from our screen and with proper authorization,
	 * because the save_post action can be triggered at other times.
	 */
	// Check if our nonce is set.
	if ( ! isset( $_POST['studio_wall_nonce'] ) )
		// exit(0);
		return;

	// Verify that the nonce is valid.
	if ( ! wp_verify_nonce( $_POST['studio_wall_nonce'], 'studio_wall_systems_custom_one_save_data' ) )
		// exit(1);
		return;

	// If this is an autosave, our form has not been submitted, so we don't want to do anything.
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
		// exit(2);
		return;

	// Check the user's permissions.
	if ( ! current_user_can( 'edit_page', $post_id ) )
		// exit(3);
		return;

	// Sanitize user input.
	$custom_one_title    = json_encode( $_POST['custom_one_title'] );
	$custom_one_content = json_encode( $_POST['custom_one_content'] );
	// $custom_two   = json_encode( $_POST['custom_two'] );
	// $custom_three = json_encode( $_POST['custom_three'] );
	// $custom_four  = json_encode( $_POST['custom_four'] );
	// $custom_five  = json_encode( $_POST['custom_five'] );
	// $custom_six   = json_encode( $_POST['custom_six'] );
	// $custom_seven = json_encode( $_POST['custom_seven'] );
	// $custom_eight = json_encode( $_POST['custom_eight'] );
	// $custom_nine  = json_encode( $_POST['custom_nine'] );
	// $custom_ten   = json_encode( $_POST['custom_ten'] );

	// Update the meta field in the database.
	update_post_meta( $post_id, 'custom_one_title', $custom_one_title );
	update_post_meta( $post_id, 'custom_one_content', $custom_one_content );
	// update_post_meta( $post_id, 'custom_two', $custom_two );
	// update_post_meta( $post_id, 'custom_three', $custom_three );
	// update_post_meta( $post_id, 'custom_four', $custom_four );
	// update_post_meta( $post_id, 'custom_five', $custom_five );
	// update_post_meta( $post_id, 'custom_six', $custom_six );
	// update_post_meta( $post_id, 'custom_seven', $custom_seven );
	// update_post_meta( $post_id, 'custom_eight', $custom_eight );
	// update_post_meta( $post_id, 'custom_nine', $custom_nine );
	// update_post_meta( $post_id, 'custom_ten', $custom_ten );
}
add_action( 'save_post', 'studio_wall_systems_custom_one_save_data' );
