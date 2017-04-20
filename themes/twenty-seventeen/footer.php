<?php
/**
 * Template for displaying the footer.
 *
 * @package Tag Wall - Twenty Seventeen
 * @since   0.1.0
 * @uses    get_user_by(), get_user_meta(), home_url(), esc_html(), esc_attr(), dynamic_sidebar(), wp_footer()
 */
?>

		<footer id="footer">
			<section>

				<a href="<?php echo home_url(); ?>">
					<img src="<?php echo TAGWALL_TEMPLATE_URL . '/assets/images/studiotag.png'; ?>" />
				</a>

				<div>

					<ul>
						<li>321 West 44th Street</li>
						<li>Suite 200</li>
						<li>New York, NY 10036</li>
					</ul>

					<ul>
						<li><a href="tel:<?php echo esc_attr( $phone ); ?>">+1 212.354.9255</a></li>
						<li><a href="mailto:<?php echo esc_attr( $user->user_email ); ?>">info@studio-tag.com</a></li>
					</ul>

					<div class="social">
						<a href="https://twitter.com/tagwall_llc" class="twitter"><i class="fa fa-twitter fa-2x"></i></a>
						<a href="https://www.facebook.com/studiotagnyc/" class="facebook"><i class="fa fa-facebook-official fa-2x"></i></a>
						<a href="https://www.pinterest.com/tagwall/showroom/" class="pinterest"><i class="fa fa-pinterest fa-2x"></i></a>
						<a href="https://www.instagram.com/studio_tag/" class="instagram"><i class="fa fa-instagram fa-2x"></i></a>
						<a href="https://www.linkedin.com/company/studio-tag-llc" class="linkedin"><i class="fa fa-linkedin-square fa-2x"></i></a>
					</div>

				</div>

			</section>

			<section>

				<div class="column one">
					<h2>Studio<span>Tag</span></h2>
					<?php dynamic_sidebar( 'Footer Column One' ); ?>
				</div>

				<div class="column two">
					<h2><span>Tag</span>Wall</h2>
					<?php dynamic_sidebar( 'Footer Column Two' ); ?>
				</div>

				<div class="column three">
					<?php dynamic_sidebar( 'Footer Column Three' ); ?>
				</div>
			</section>
		</footer>
	</body>
</html>
<?php wp_footer(); ?>
