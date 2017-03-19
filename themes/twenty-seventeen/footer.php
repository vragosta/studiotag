<?php
/**
 * Template for displaying the footer.
 *
 * @package Tag Wall - Twenty Seventeen
 * @since   0.1.0
 * @uses    get_user_by(), get_user_meta(), home_url(), esc_html(), esc_attr(), dynamic_sidebar(), wp_footer()
 */

	// Get the admin user by 'id'.
	$user  = get_user_by( 'id', TAGWALL_SITE_ADMIN );

	// Get the phone number of the admin user.
	$phone = get_user_meta( $user->ID, 'phone', true );

	// Get social meta from admin user.
	$twitter   = get_user_meta( TAGWALL_SITE_ADMIN, 'twitter', true );
	$facebook  = get_user_meta( TAGWALL_SITE_ADMIN, 'facebook', true );
	$pinterest = get_user_meta( TAGWALL_SITE_ADMIN, 'pinterest', true );
	$instagram = get_user_meta( TAGWALL_SITE_ADMIN, 'instagram', true );
	$linkedin  = get_user_meta( TAGWALL_SITE_ADMIN, 'linkedin', true );

?>

		<footer id="footer">
			<section>

				<!-- Logo -->
				<a href="<?php echo home_url(); ?>">
					<img src="<?php echo TAGWALL_TEMPLATE_URL . '/assets/images/studiotag.png'; ?>" />
				</a>

				<div>

					<!-- TODO Devise a way to make this dynamic -->
					<ul>
						<li>321 West 44th Street</li>
						<li>Suite 200</li>
						<li>New York, NY 10036</li>
					</ul>

					<ul>
						<li><a href="tel:<?php echo esc_attr( $phone ); ?>"><?php echo esc_html( $phone ); ?></a></li>
						<li><a href="mailto:<?php echo esc_attr( $user->user_email ); ?>"><?php echo esc_html( $user->user_email ); ?></a></li>
					</ul>

					<!-- Social Icons -->
					<div class="social">
						<a href="<?php echo esc_attr( $twitter ); ?>" class="twitter"><i class="fa fa-twitter fa-2x"></i></a>
						<a href="<?php echo esc_attr( $facebook ); ?>" class="facebook"><i class="fa fa-facebook-official fa-2x"></i></a>
						<a href="<?php echo esc_attr( $pinterest ); ?>" class="pinterest"><i class="fa fa-pinterest fa-2x"></i></a>
						<a href="<?php echo esc_attr( $instagram ); ?>" class="instagram"><i class="fa fa-instagram fa-2x"></i></a>
						<a href="<?php echo esc_attr( $linkedin ); ?>" class="linkedin"><i class="fa fa-linkedin-square fa-2x"></i></a>
					</div>

				</div>

			</section>

			<section>

				<!-- Column One -->
				<div class="column one">
					<?php dynamic_sidebar( 'Footer Column One' ); ?>
				</div>

				<!-- Column Two -->
				<div class="column two">
					<?php dynamic_sidebar( 'Footer Column Two' ); ?>
				</div>

				<!-- Column Three -->
				<div class="column three">
					<?php dynamic_sidebar( 'Footer Column Three' ); ?>
				</div>
			</section>
		</footer>
	</body>
</html>
<?php wp_footer(); ?>
