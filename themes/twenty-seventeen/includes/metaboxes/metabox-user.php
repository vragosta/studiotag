<?php
/**
 * Create user meta fields for each user record.
 *
 * @since  0.1.0
 * @param  array $fields Existing fields array.
 * @return array $fields Existing fields array with new social fields.
 */
function tagwall_user_fields( $fields ) {
	$fields['job_title']    = 'Job Title';
	$fields['job_status']   = 'Job Status';
	$fields['hashtag']      = 'Hashtag';
	$fields['facebook']     = 'Facebook';
	$fields['twitter']      = 'Twitter';
	$fields['instagram']    = 'Instagram';
	$fields['pinterest']    = 'Pinterest';
	$fields['linkedin']     = 'LinkedIn';
	$fields['direct_phone'] = 'Direct Phone';
	$fields['cell_phone']   = 'Cell Phone';
	$fields['image']        = 'User Image URL:';

	return $fields;
}
add_filter( 'user_contactmethods', 'tagwall_user_fields' );

/**
 * Save additional profile fields.
 *
 * @since  0.1.0
 * @param  int $user_id Current user ID.
 * @uses   current_user_can(), sanitize_text_field(), update_post_meta()
 * @return void
 */
function tagwall_save_user_fields( $user_id ) {
	// Check the user's permissions.
	if ( ! current_user_can( 'edit_user', $user_id ) )
		return false;

	// Sanitize user input.
	$job_title    = sanitize_text_field( $_POST['job_title'] );
	$job_status   = sanitize_text_field( $_POST['job_status'] );
	$hashtag      = sanitize_text_field( $_POST['hashtag'] );
	$facebook     = sanitize_text_field( $_POST['facebook'] );
	$twitter      = sanitize_text_field( $_POST['twitter'] );
	$instagram    = sanitize_text_field( $_POST['instagram'] );
	$pinterest    = sanitize_text_field( $_POST['pinterest'] );
	$linkedin     = sanitize_text_field( $_POST['linkedin'] );
	$direct_phone = sanitize_text_field( $_POST['direct_phone'] );
	$cell_phone   = sanitize_text_field( $_POST['cell_phone'] );
	$image        = sanitize_text_field( $_POST['image'] );

	update_usermeta( $user_id, 'job_title', $job_title );
	update_usermeta( $user_id, 'job_status', $job_status );
	update_usermeta( $user_id, 'hashtag', $hashtag );
	update_usermeta( $user_id, 'facebook', $facebook );
	update_usermeta( $user_id, 'twitter', $twitter );
	update_usermeta( $user_id, 'instagram', $instagram );
	update_usermeta( $user_id, 'pinterest', $pinterest );
	update_usermeta( $user_id, 'linkedin', $linkedin );
	update_usermeta( $user_id, 'direct_phone', $direct_phone );
	update_usermeta( $user_id, 'cell_phone', $cell_phone );
	update_usermeta( $user_id, 'image', $image );
}
add_action( 'personal_options_update', 'tagwall_save_user_fields' );
add_action( 'edit_user_profile_update', 'tagwall_save_user_fields' );
