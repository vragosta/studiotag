<?php
/**
 * Template for displaying the footer.
 *
 * @package    Studio Tag - Twenty Seventeen
 * @subpackage Studio Wall - Twenty Seventeen
 * @since      0.1.0
 * @uses       wp_footer()
 */

	// Get the user by 'id'.
	$user  = get_user_by( 'id', STUDIO_WALL_SITE_ADMIN );

	// Get the phone number of the user.
	$phone = get_user_meta( $user->ID, 'phone', true );

?>

		<footer id="footer">
			<section>

				<!-- Logo -->
				<a href="<?php echo home_url(); ?>">
					<img src="<?php echo STUDIO_WALL_TEMPLATE_URL . '/assets/images/studiotag.png'; ?>" />
				</a>

				<div>

					<!-- TODO Make this dynamic -->
					<ul>
						<li>321 West 44th Street</li>
						<li>Suite 200</li>
						<li>New York, NY 10036</li>
					</ul>

					<ul>
						<li><a href:"tel:<?php echo esc_attr( $phone ); ?>"><?php echo esc_html( $phone ); ?></a></li>
						<li><a href="mailto:<?php echo esc_attr( $user->user_email ); ?>"><?php echo esc_html( $user->user_email ); ?></a></li>
					</ul>

					<!-- Social Icons -->
					<?php get_template_part( 'partials/content', 'social' ); ?>

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
