<?php
/**
 * @package    Studio Tag - Twenty Seventeen
 * @subpackage Studio Wall - Twenty Seventeen
 *
 * Configuration file for creating the 'system' metaboxes.
 * Additionally provides save and retrieve algorithms.
 */


/**
 * Create 'Custom Meta' metaboxes for the 'system' custom post type.
 *
 * @since  0.1.0
 * @uses   add_meta_box()
 * @return void
 */
function studio_wall_systems_metaboxes() {
	add_meta_box(
		'custom-one',
		__( 'Systems Custom Meta One', 'studio_tag' ),
		'studio_wall_systems_custom_one_callback',
		'system'
	);

	add_meta_box(
		'custom-two',
		__( 'Systems Custom Meta Two', 'studio_tag' ),
		'studio_wall_systems_custom_two_callback',
		'system'
	);

	add_meta_box(
		'custom-three',
		__( 'Systems Custom Meta Three', 'studio_tag' ),
		'studio_wall_systems_custom_three_callback',
		'system'
	);

	add_meta_box(
		'custom-four',
		__( 'Systems Custom Meta Four', 'studio_tag' ),
		'studio_wall_systems_custom_four_callback',
		'system'
	);

	add_meta_box(
		'custom-five',
		__( 'Systems Custom Meta Five', 'studio_tag' ),
		'studio_wall_systems_custom_five_callback',
		'system'
	);

	add_meta_box(
		'custom-six',
		__( 'Systems Custom Meta Six', 'studio_tag' ),
		'studio_wall_systems_custom_six_callback',
		'system'
	);

	add_meta_box(
		'custom-seven',
		__( 'Systems Custom Meta Seven', 'studio_tag' ),
		'studio_wall_systems_custom_seven_callback',
		'system'
	);

	add_meta_box(
		'custom-eight',
		__( 'Systems Custom Meta Eight', 'studio_tag' ),
		'studio_wall_systems_custom_eight_callback',
		'system'
	);

	add_meta_box(
		'custom-nine',
		__( 'Systems Custom Meta Nine', 'studio_tag' ),
		'studio_wall_systems_custom_nine_callback',
		'system'
	);

	add_meta_box(
		'custom-ten',
		__( 'Systems Custom Meta Ten', 'studio_tag' ),
		'studio_wall_systems_custom_ten_callback',
		'system'
	);
}
add_action( 'add_meta_boxes', 'studio_wall_systems_metaboxes' );

/**
 * The callback for add_meta_box(), contains the HTML necessary to create the metaboxes.
 *
 * @since  0.1.0
 * @uses   wp_nonce_field(), get_post_meta(), __(), esc_textarea()
 * @return void
 */
function studio_wall_systems_custom_one_callback( $post ) {
	// Add a nonce field so we can check for it later.
	wp_nonce_field( 'studio_wall_systems_custom_one_save_data', 'studio_wall_custom_one_nonce' );

	/**
	 * Use get_post_meta() to retrieve an existing value
	 * from the database and use the value for the form.
	 */
	$custom_one_title   = json_decode( get_post_meta( $post->ID, 'custom_one_title', true ) );
	$custom_one_content = json_decode( get_post_meta( $post->ID, 'custom_one_content', true ) ); ?>

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
	</table><?php
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
	if ( ! isset( $_POST['studio_wall_custom_one_nonce'] ) )
		return;

	// Verify that the nonce is valid.
	if ( ! wp_verify_nonce( $_POST['studio_wall_custom_one_nonce'], 'studio_wall_systems_custom_one_save_data' ) )
		return;

	// If this is an autosave, our form has not been submitted, so we don't want to do anything.
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
		return;

	// Check the user's permissions.
	if ( ! current_user_can( 'edit_page', $post_id ) )
		return;

	// Sanitize user input.
	$custom_one_title   = json_encode( $_POST['custom_one_title'] );
	$custom_one_content = json_encode( $_POST['custom_one_content'] );

	// Update the meta field in the database.
	update_post_meta( $post_id, 'custom_one_title', $custom_one_title );
	update_post_meta( $post_id, 'custom_one_content', $custom_one_content );
}
add_action( 'save_post', 'studio_wall_systems_custom_one_save_data' );

/**
 * The callback for add_meta_box(), contains the HTML necessary to create the metaboxes.
 *
 * @since  0.1.0
 * @uses   wp_nonce_field(), get_post_meta(), __(), esc_textarea()
 * @return void
 */
function studio_wall_systems_custom_two_callback( $post ) {
	// Add a nonce field so we can check for it later.
	wp_nonce_field( 'studio_wall_systems_custom_two_save_data', 'studio_wall_custom_two_nonce' );

	/**
	 * Use get_post_meta() to retrieve an existing value
	 * from the database and use the value for the form.
	 */
	$custom_two_title   = json_decode( get_post_meta( $post->ID, 'custom_two_title', true ) );
	$custom_two_content = json_decode( get_post_meta( $post->ID, 'custom_two_content', true ) ); ?>

	<table style="width: 100%;">
		<tr>
			<td class="label">
				<label for="custom_two_title"><?php echo __( 'Title:', 'studio_tag' ); ?></label>
			</td>
			<td>
				<textarea id="custom_two_title" name="custom_two_title" style="width: 100%;"><?php echo esc_textarea( $custom_two_title ); ?></textarea>
			</td>
		</tr>
		<tr>
			<td class="label">
				<label for="custom_two_content"><?php echo __( 'Content:', 'studio_tag' ); ?></label>
			</td>
			<td>
				<textarea id="custom_two_content" name="custom_two_content" style="width: 100%;"><?php echo esc_textarea( $custom_two_content ); ?></textarea>
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
function studio_wall_systems_custom_two_save_data( $post_id ) {
	/**
	 * We need to verify this came from our screen and with proper authorization,
	 * because the save_post action can be triggered at other times.
	 */
	// Check if our nonce is set.
	if ( ! isset( $_POST['studio_wall_custom_two_nonce'] ) )
		return;

	// Verify that the nonce is valid.
	if ( ! wp_verify_nonce( $_POST['studio_wall_custom_two_nonce'], 'studio_wall_systems_custom_two_save_data' ) )
		return;

	// If this is an autosave, our form has not been submitted, so we don't want to do anything.
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
		return;

	// Check the user's permissions.
	if ( ! current_user_can( 'edit_page', $post_id ) )
		return;

	// Sanitize user input.
	$custom_two_title   = json_encode( $_POST['custom_two_title'] );
	$custom_two_content = json_encode( $_POST['custom_two_content'] );

	// Update the meta field in the database.
	update_post_meta( $post_id, 'custom_two_title', $custom_two_title );
	update_post_meta( $post_id, 'custom_two_content', $custom_two_content );
}
add_action( 'save_post', 'studio_wall_systems_custom_two_save_data' );

/**
 * The callback for add_meta_box(), contains the HTML necessary to create the metaboxes.
 *
 * @since  0.1.0
 * @uses   wp_nonce_field(), get_post_meta(), __(), esc_textarea()
 * @return void
 */
function studio_wall_systems_custom_three_callback( $post ) {
	// Add a nonce field so we can check for it later.
	wp_nonce_field( 'studio_wall_systems_custom_three_save_data', 'studio_wall_custom_three_nonce' );

	/**
	 * Use get_post_meta() to retrieve an existing value
	 * from the database and use the value for the form.
	 */
	$custom_three_title   = json_decode( get_post_meta( $post->ID, 'custom_three_title', true ) );
	$custom_three_content = json_decode( get_post_meta( $post->ID, 'custom_three_content', true ) ); ?>

	<table style="width: 100%;">
		<tr>
			<td class="label">
				<label for="custom_three_title"><?php echo __( 'Title:', 'studio_tag' ); ?></label>
			</td>
			<td>
				<textarea id="custom_three_title" name="custom_three_title" style="width: 100%;"><?php echo esc_textarea( $custom_three_title ); ?></textarea>
			</td>
		</tr>
		<tr>
			<td class="label">
				<label for="custom_three_content"><?php echo __( 'Content:', 'studio_tag' ); ?></label>
			</td>
			<td>
				<textarea id="custom_three_content" name="custom_three_content" style="width: 100%;"><?php echo esc_textarea( $custom_three_content ); ?></textarea>
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
function studio_wall_systems_custom_three_save_data( $post_id ) {
	/**
	 * We need to verify this came from our screen and with proper authorization,
	 * because the save_post action can be triggered at other times.
	 */
	// Check if our nonce is set.
	if ( ! isset( $_POST['studio_wall_custom_three_nonce'] ) )
		return;

	// Verify that the nonce is valid.
	if ( ! wp_verify_nonce( $_POST['studio_wall_custom_three_nonce'], 'studio_wall_systems_custom_three_save_data' ) )
		return;

	// If this is an autosave, our form has not been submitted, so we don't want to do anything.
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
		return;

	// Check the user's permissions.
	if ( ! current_user_can( 'edit_page', $post_id ) )
		return;

	// Sanitize user input.
	$custom_three_title   = json_encode( $_POST['custom_three_title'] );
	$custom_three_content = json_encode( $_POST['custom_three_content'] );

	// Update the meta field in the database.
	update_post_meta( $post_id, 'custom_three_title', $custom_three_title );
	update_post_meta( $post_id, 'custom_three_content', $custom_three_content );
}
add_action( 'save_post', 'studio_wall_systems_custom_three_save_data' );

/**
 * The callback for add_meta_box(), contains the HTML necessary to create the metaboxes.
 *
 * @since  0.1.0
 * @uses   wp_nonce_field(), get_post_meta(), __(), esc_textarea()
 * @return void
 */
function studio_wall_systems_custom_four_callback( $post ) {
	// Add a nonce field so we can check for it later.
	wp_nonce_field( 'studio_wall_systems_custom_four_save_data', 'studio_wall_custom_four_nonce' );

	/**
	 * Use get_post_meta() to retrieve an existing value
	 * from the database and use the value for the form.
	 */
	$custom_four_title   = json_decode( get_post_meta( $post->ID, 'custom_four_title', true ) );
	$custom_four_content = json_decode( get_post_meta( $post->ID, 'custom_four_content', true ) ); ?>

	<table style="width: 100%;">
		<tr>
			<td class="label">
				<label for="custom_four_title"><?php echo __( 'Title:', 'studio_tag' ); ?></label>
			</td>
			<td>
				<textarea id="custom_four_title" name="custom_four_title" style="width: 100%;"><?php echo esc_textarea( $custom_four_title ); ?></textarea>
			</td>
		</tr>
		<tr>
			<td class="label">
				<label for="custom_four_content"><?php echo __( 'Content:', 'studio_tag' ); ?></label>
			</td>
			<td>
				<textarea id="custom_four_content" name="custom_four_content" style="width: 100%;"><?php echo esc_textarea( $custom_four_content ); ?></textarea>
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
function studio_wall_systems_custom_four_save_data( $post_id ) {
	/**
	 * We need to verify this came from our screen and with proper authorization,
	 * because the save_post action can be triggered at other times.
	 */
	// Check if our nonce is set.
	if ( ! isset( $_POST['studio_wall_custom_four_nonce'] ) )
		return;

	// Verify that the nonce is valid.
	if ( ! wp_verify_nonce( $_POST['studio_wall_custom_four_nonce'], 'studio_wall_systems_custom_four_save_data' ) )
		return;

	// If this is an autosave, our form has not been submitted, so we don't want to do anything.
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
		return;

	// Check the user's permissions.
	if ( ! current_user_can( 'edit_page', $post_id ) )
		return;

	// Sanitize user input.
	$custom_four_title   = json_encode( $_POST['custom_four_title'] );
	$custom_four_content = json_encode( $_POST['custom_four_content'] );

	// Update the meta field in the database.
	update_post_meta( $post_id, 'custom_four_title', $custom_four_title );
	update_post_meta( $post_id, 'custom_four_content', $custom_four_content );
}
add_action( 'save_post', 'studio_wall_systems_custom_four_save_data' );

/**
 * The callback for add_meta_box(), contains the HTML necessary to create the metaboxes.
 *
 * @since  0.1.0
 * @uses   wp_nonce_field(), get_post_meta(), __(), esc_textarea()
 * @return void
 */
function studio_wall_systems_custom_five_callback( $post ) {
	// Add a nonce field so we can check for it later.
	wp_nonce_field( 'studio_wall_systems_custom_five_save_data', 'studio_wall_custom_five_nonce' );

	/**
	 * Use get_post_meta() to retrieve an existing value
	 * from the database and use the value for the form.
	 */
	$custom_five_title   = json_decode( get_post_meta( $post->ID, 'custom_five_title', true ) );
	$custom_five_content = json_decode( get_post_meta( $post->ID, 'custom_five_content', true ) ); ?>

	<table style="width: 100%;">
		<tr>
			<td class="label">
				<label for="custom_five_title"><?php echo __( 'Title:', 'studio_tag' ); ?></label>
			</td>
			<td>
				<textarea id="custom_five_title" name="custom_five_title" style="width: 100%;"><?php echo esc_textarea( $custom_five_title ); ?></textarea>
			</td>
		</tr>
		<tr>
			<td class="label">
				<label for="custom_five_content"><?php echo __( 'Content:', 'studio_tag' ); ?></label>
			</td>
			<td>
				<textarea id="custom_five_content" name="custom_five_content" style="width: 100%;"><?php echo esc_textarea( $custom_five_content ); ?></textarea>
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
function studio_wall_systems_custom_five_save_data( $post_id ) {
	/**
	 * We need to verify this came from our screen and with proper authorization,
	 * because the save_post action can be triggered at other times.
	 */
	// Check if our nonce is set.
	if ( ! isset( $_POST['studio_wall_custom_five_nonce'] ) )
		return;

	// Verify that the nonce is valid.
	if ( ! wp_verify_nonce( $_POST['studio_wall_custom_five_nonce'], 'studio_wall_systems_custom_five_save_data' ) )
		return;

	// If this is an autosave, our form has not been submitted, so we don't want to do anything.
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
		return;

	// Check the user's permissions.
	if ( ! current_user_can( 'edit_page', $post_id ) )
		return;

	// Sanitize user input.
	$custom_five_title   = json_encode( $_POST['custom_five_title'] );
	$custom_five_content = json_encode( $_POST['custom_five_content'] );

	// Update the meta field in the database.
	update_post_meta( $post_id, 'custom_five_title', $custom_five_title );
	update_post_meta( $post_id, 'custom_five_content', $custom_five_content );
}
add_action( 'save_post', 'studio_wall_systems_custom_five_save_data' );

/**
 * The callback for add_meta_box(), contains the HTML necessary to create the metaboxes.
 *
 * @since  0.1.0
 * @uses   wp_nonce_field(), get_post_meta(), __(), esc_textarea()
 * @return void
 */
function studio_wall_systems_custom_six_callback( $post ) {
	// Add a nonce field so we can check for it later.
	wp_nonce_field( 'studio_wall_systems_custom_six_save_data', 'studio_wall_custom_six_nonce' );

	/**
	 * Use get_post_meta() to retrieve an existing value
	 * from the database and use the value for the form.
	 */
	$custom_six_title   = json_decode( get_post_meta( $post->ID, 'custom_six_title', true ) );
	$custom_six_content = json_decode( get_post_meta( $post->ID, 'custom_six_content', true ) ); ?>

	<table style="width: 100%;">
		<tr>
			<td class="label">
				<label for="custom_six_title"><?php echo __( 'Title:', 'studio_tag' ); ?></label>
			</td>
			<td>
				<textarea id="custom_six_title" name="custom_six_title" style="width: 100%;"><?php echo esc_textarea( $custom_six_title ); ?></textarea>
			</td>
		</tr>
		<tr>
			<td class="label">
				<label for="custom_six_content"><?php echo __( 'Content:', 'studio_tag' ); ?></label>
			</td>
			<td>
				<textarea id="custom_six_content" name="custom_six_content" style="width: 100%;"><?php echo esc_textarea( $custom_six_content ); ?></textarea>
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
function studio_wall_systems_custom_six_save_data( $post_id ) {
	/**
	 * We need to verify this came from our screen and with proper authorization,
	 * because the save_post action can be triggered at other times.
	 */
	// Check if our nonce is set.
	if ( ! isset( $_POST['studio_wall_custom_six_nonce'] ) )
		return;

	// Verify that the nonce is valid.
	if ( ! wp_verify_nonce( $_POST['studio_wall_custom_six_nonce'], 'studio_wall_systems_custom_six_save_data' ) )
		return;

	// If this is an autosave, our form has not been submitted, so we don't want to do anything.
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
		return;

	// Check the user's permissions.
	if ( ! current_user_can( 'edit_page', $post_id ) )
		return;

	// Sanitize user input.
	$custom_six_title   = json_encode( $_POST['custom_six_title'] );
	$custom_six_content = json_encode( $_POST['custom_six_content'] );

	// Update the meta field in the database.
	update_post_meta( $post_id, 'custom_six_title', $custom_six_title );
	update_post_meta( $post_id, 'custom_six_content', $custom_six_content );
}
add_action( 'save_post', 'studio_wall_systems_custom_six_save_data' );

/**
 * The callback for add_meta_box(), contains the HTML necessary to create the metaboxes.
 *
 * @since  0.1.0
 * @uses   wp_nonce_field(), get_post_meta(), __(), esc_textarea()
 * @return void
 */
function studio_wall_systems_custom_seven_callback( $post ) {
	// Add a nonce field so we can check for it later.
	wp_nonce_field( 'studio_wall_systems_custom_seven_save_data', 'studio_wall_custom_seven_nonce' );

	/**
	 * Use get_post_meta() to retrieve an existing value
	 * from the database and use the value for the form.
	 */
	$custom_seven_title   = json_decode( get_post_meta( $post->ID, 'custom_seven_title', true ) );
	$custom_seven_content = json_decode( get_post_meta( $post->ID, 'custom_seven_content', true ) ); ?>

	<table style="width: 100%;">
		<tr>
			<td class="label">
				<label for="custom_seven_title"><?php echo __( 'Title:', 'studio_tag' ); ?></label>
			</td>
			<td>
				<textarea id="custom_seven_title" name="custom_seven_title" style="width: 100%;"><?php echo esc_textarea( $custom_seven_title ); ?></textarea>
			</td>
		</tr>
		<tr>
			<td class="label">
				<label for="custom_seven_content"><?php echo __( 'Content:', 'studio_tag' ); ?></label>
			</td>
			<td>
				<textarea id="custom_seven_content" name="custom_seven_content" style="width: 100%;"><?php echo esc_textarea( $custom_seven_content ); ?></textarea>
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
function studio_wall_systems_custom_seven_save_data( $post_id ) {
	/**
	 * We need to verify this came from our screen and with proper authorization,
	 * because the save_post action can be triggered at other times.
	 */
	// Check if our nonce is set.
	if ( ! isset( $_POST['studio_wall_custom_seven_nonce'] ) )
		return;

	// Verify that the nonce is valid.
	if ( ! wp_verify_nonce( $_POST['studio_wall_custom_seven_nonce'], 'studio_wall_systems_custom_seven_save_data' ) )
		return;

	// If this is an autosave, our form has not been submitted, so we don't want to do anything.
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
		return;

	// Check the user's permissions.
	if ( ! current_user_can( 'edit_page', $post_id ) )
		return;

	// Sanitize user input.
	$custom_seven_title   = json_encode( $_POST['custom_seven_title'] );
	$custom_seven_content = json_encode( $_POST['custom_seven_content'] );

	// Update the meta field in the database.
	update_post_meta( $post_id, 'custom_seven_title', $custom_seven_title );
	update_post_meta( $post_id, 'custom_seven_content', $custom_seven_content );
}
add_action( 'save_post', 'studio_wall_systems_custom_seven_save_data' );

/**
 * The callback for add_meta_box(), contains the HTML necessary to create the metaboxes.
 *
 * @since  0.1.0
 * @uses   wp_nonce_field(), get_post_meta(), __(), esc_textarea()
 * @return void
 */
function studio_wall_systems_custom_eight_callback( $post ) {
	// Add a nonce field so we can check for it later.
	wp_nonce_field( 'studio_wall_systems_custom_eight_save_data', 'studio_wall_custom_eight_nonce' );

	/**
	 * Use get_post_meta() to retrieve an existing value
	 * from the database and use the value for the form.
	 */
	$custom_eight_title   = json_decode( get_post_meta( $post->ID, 'custom_eight_title', true ) );
	$custom_eight_content = json_decode( get_post_meta( $post->ID, 'custom_eight_content', true ) ); ?>

	<table style="width: 100%;">
		<tr>
			<td class="label">
				<label for="custom_eight_title"><?php echo __( 'Title:', 'studio_tag' ); ?></label>
			</td>
			<td>
				<textarea id="custom_eight_title" name="custom_eight_title" style="width: 100%;"><?php echo esc_textarea( $custom_eight_title ); ?></textarea>
			</td>
		</tr>
		<tr>
			<td class="label">
				<label for="custom_eight_content"><?php echo __( 'Content:', 'studio_tag' ); ?></label>
			</td>
			<td>
				<textarea id="custom_eight_content" name="custom_eight_content" style="width: 100%;"><?php echo esc_textarea( $custom_eight_content ); ?></textarea>
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
function studio_wall_systems_custom_eight_save_data( $post_id ) {
	/**
	 * We need to verify this came from our screen and with proper authorization,
	 * because the save_post action can be triggered at other times.
	 */
	// Check if our nonce is set.
	if ( ! isset( $_POST['studio_wall_custom_eight_nonce'] ) )
		return;

	// Verify that the nonce is valid.
	if ( ! wp_verify_nonce( $_POST['studio_wall_custom_eight_nonce'], 'studio_wall_systems_custom_eight_save_data' ) )
		return;

	// If this is an autosave, our form has not been submitted, so we don't want to do anything.
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
		return;

	// Check the user's permissions.
	if ( ! current_user_can( 'edit_page', $post_id ) )
		return;

	// Sanitize user input.
	$custom_eight_title   = json_encode( $_POST['custom_eight_title'] );
	$custom_eight_content = json_encode( $_POST['custom_eight_content'] );

	// Update the meta field in the database.
	update_post_meta( $post_id, 'custom_eight_title', $custom_eight_title );
	update_post_meta( $post_id, 'custom_eight_content', $custom_eight_content );
}
add_action( 'save_post', 'studio_wall_systems_custom_eight_save_data' );

/**
 * The callback for add_meta_box(), contains the HTML necessary to create the metaboxes.
 *
 * @since  0.1.0
 * @uses   wp_nonce_field(), get_post_meta(), __(), esc_textarea()
 * @return void
 */
function studio_wall_systems_custom_nine_callback( $post ) {
	// Add a nonce field so we can check for it later.
	wp_nonce_field( 'studio_wall_systems_custom_nine_save_data', 'studio_wall_custom_nine_nonce' );

	/**
	 * Use get_post_meta() to retrieve an existing value
	 * from the database and use the value for the form.
	 */
	$custom_nine_title   = json_decode( get_post_meta( $post->ID, 'custom_nine_title', true ) );
	$custom_nine_content = json_decode( get_post_meta( $post->ID, 'custom_nine_content', true ) ); ?>

	<table style="width: 100%;">
		<tr>
			<td class="label">
				<label for="custom_nine_title"><?php echo __( 'Title:', 'studio_tag' ); ?></label>
			</td>
			<td>
				<textarea id="custom_nine_title" name="custom_nine_title" style="width: 100%;"><?php echo esc_textarea( $custom_nine_title ); ?></textarea>
			</td>
		</tr>
		<tr>
			<td class="label">
				<label for="custom_nine_content"><?php echo __( 'Content:', 'studio_tag' ); ?></label>
			</td>
			<td>
				<textarea id="custom_nine_content" name="custom_nine_content" style="width: 100%;"><?php echo esc_textarea( $custom_nine_content ); ?></textarea>
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
function studio_wall_systems_custom_nine_save_data( $post_id ) {
	/**
	 * We need to verify this came from our screen and with proper authorization,
	 * because the save_post action can be triggered at other times.
	 */
	// Check if our nonce is set.
	if ( ! isset( $_POST['studio_wall_custom_nine_nonce'] ) )
		return;

	// Verify that the nonce is valid.
	if ( ! wp_verify_nonce( $_POST['studio_wall_custom_nine_nonce'], 'studio_wall_systems_custom_nine_save_data' ) )
		return;

	// If this is an autosave, our form has not been submitted, so we don't want to do anything.
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
		return;

	// Check the user's permissions.
	if ( ! current_user_can( 'edit_page', $post_id ) )
		return;

	// Sanitize user input.
	$custom_nine_title   = json_encode( $_POST['custom_nine_title'] );
	$custom_nine_content = json_encode( $_POST['custom_nine_content'] );

	// Update the meta field in the database.
	update_post_meta( $post_id, 'custom_nine_title', $custom_nine_title );
	update_post_meta( $post_id, 'custom_nine_content', $custom_nine_content );
}
add_action( 'save_post', 'studio_wall_systems_custom_nine_save_data' );

/**
 * The callback for add_meta_box(), contains the HTML necessary to create the metaboxes.
 *
 * @since  0.1.0
 * @uses   wp_nonce_field(), get_post_meta(), __(), esc_textarea()
 * @return void
 */
function studio_wall_systems_custom_ten_callback( $post ) {
	// Add a nonce field so we can check for it later.
	wp_nonce_field( 'studio_wall_systems_custom_ten_save_data', 'studio_wall_custom_ten_nonce' );

	/**
	 * Use get_post_meta() to retrieve an existing value
	 * from the database and use the value for the form.
	 */
	$custom_ten_title   = json_decode( get_post_meta( $post->ID, 'custom_ten_title', true ) );
	$custom_ten_content = json_decode( get_post_meta( $post->ID, 'custom_ten_content', true ) ); ?>

	<table style="width: 100%;">
		<tr>
			<td class="label">
				<label for="custom_ten_title"><?php echo __( 'Title:', 'studio_tag' ); ?></label>
			</td>
			<td>
				<textarea id="custom_ten_title" name="custom_ten_title" style="width: 100%;"><?php echo esc_textarea( $custom_ten_title ); ?></textarea>
			</td>
		</tr>
		<tr>
			<td class="label">
				<label for="custom_ten_content"><?php echo __( 'Content:', 'studio_tag' ); ?></label>
			</td>
			<td>
				<textarea id="custom_ten_content" name="custom_ten_content" style="width: 100%;"><?php echo esc_textarea( $custom_ten_content ); ?></textarea>
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
function studio_wall_systems_custom_ten_save_data( $post_id ) {
	/**
	 * We need to verify this came from our screen and with proper authorization,
	 * because the save_post action can be triggered at other times.
	 */
	// Check if our nonce is set.
	if ( ! isset( $_POST['studio_wall_custom_ten_nonce'] ) )
		return;

	// Verify that the nonce is valid.
	if ( ! wp_verify_nonce( $_POST['studio_wall_custom_ten_nonce'], 'studio_wall_systems_custom_ten_save_data' ) )
		return;

	// If this is an autosave, our form has not been submitted, so we don't want to do anything.
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
		return;

	// Check the user's permissions.
	if ( ! current_user_can( 'edit_page', $post_id ) )
		return;

	// Sanitize user input.
	$custom_ten_title   = json_encode( $_POST['custom_ten_title'] );
	$custom_ten_content = json_encode( $_POST['custom_ten_content'] );

	// Update the meta field in the database.
	update_post_meta( $post_id, 'custom_ten_title', $custom_ten_title );
	update_post_meta( $post_id, 'custom_ten_content', $custom_ten_content );
}
add_action( 'save_post', 'studio_wall_systems_custom_ten_save_data' );
