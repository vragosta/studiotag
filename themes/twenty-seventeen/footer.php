<?php
/**
 * Template for displaying the footer.
 *
 * @package    Studio Tag - Twenty Seventeen
 * @subpackage Studio Wall - Twenty Seventeen
 * @since      0.1.0
 * @uses       wp_footer()
 */
	$user  = get_user_by( 'id', STUDIO_WALL_SITE_ADMIN );
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

					<!-- Column One Header -->
					<div>
						<span>Studio</span>
					</div>

					<!-- Column One List -->
					<div>
						<span><a href="">Seating</a></span>
						<span><a href="#">Architectural & Interiors</a></span>
						<span><a href="#">Tables</a></span>
						<span><a href="#">Desks & Storage</a></span>
						<span><a href="#">Workspaces</a></span>
						<span><a href="#">Accessories</a></span>
					</div>
				</div>

				<!-- Column Two -->
				<div class="column two">

					<!-- Column Two Header -->
					<div>
						<span>Wall</span>
					</div>

					<!-- Column Two List -->
					<div>
						<span><a href="#">Encore</a></span>
						<span><a href="#">Slimline</a></span>
						<span><a href="#">Ion</a></span>
						<span><a href="#">Industrial Sash</a></span>
						<span><a href="#">Greenwall</a></span>
						<span><a href="#">Prebuilt</a></span>
					</div>
				</div>

				<!-- Column Three -->
				<div class="column three">

					<!-- Column Three Header -->
					<div>
						<span>Wren</span>
					</div>

					<!-- Column Three List -->
					<div>
						<span><a href="#">TBA</a></span>
						<span><a href="#">TBA</a></span>
						<span><a href="#">TBA</a></span>
						<span><a href="#">TBA</a></span>
						<span><a href="#">TBA</a></span>
						<span><a href="#">TBA</a></span>
					</div>
				</div>
			</section>
		</footer>
	</body>
</html>
<?php wp_footer(); ?>
