<?php
/**
 * Studio Wall Social Icons
 *
 * @package    Studio Tag - Twenty Seventeen
 * @subpackage Studio Wall - Twenty Seventeen
 * @since      0.1.0
 */

	$twitter   = get_user_meta( STUDIO_WALL_SITE_ADMIN, 'twitter', true );
	$facebook  = get_user_meta( STUDIO_WALL_SITE_ADMIN, 'facebook', true );
	$pinterest = get_user_meta( STUDIO_WALL_SITE_ADMIN, 'pinterest', true );
	$instagram = get_user_meta( STUDIO_WALL_SITE_ADMIN, 'instagram', true );
	$linkedin  = get_user_meta( STUDIO_WALL_SITE_ADMIN, 'linkedin', true );

?>

<div class="social">
	<a href="<?php echo esc_attr( $twitter ); ?>"><img src="<?php echo STUDIO_WALL_TEMPLATE_URL . '/assets/images/twitter.png' ?>" /></a>
	<a href="<?php echo esc_attr( $facebook ); ?>"><img src="<?php echo STUDIO_WALL_TEMPLATE_URL . '/assets/images/facebook.png' ?>" /></a>
	<a href="<?php echo esc_attr( $pinterest ); ?>"><img src="<?php echo STUDIO_WALL_TEMPLATE_URL . '/assets/images/pinterest.png' ?>" /></a>
	<a href="<?php echo esc_attr( $instagram ); ?>"><img src="<?php echo STUDIO_WALL_TEMPLATE_URL . '/assets/images/instagram.png' ?>" /></a>
	<a href="<?php echo esc_attr( $linkedin ); ?>"><img src="<?php echo STUDIO_WALL_TEMPLATE_URL . '/assets/images/linkedin.png' ?>" /></a>
</div>
