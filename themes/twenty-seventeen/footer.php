<?php
/**
 * Template for displaying the footer.
 *
 * @package    Studio Tag - Twenty Seventeen
 * @subpackage Studio Wall - Twenty Seventeen
 * @since      0.1.0
 * @uses       wp_footer()
 */
?>

		<footer id="footer">
			<section>

				<!-- Logo -->
				<a href="<?php echo home_url(); ?>">
					<img src="<?php echo STUDIO_WALL_TEMPLATE_URL . '/assets/images/studiotag.png'; ?>" />
				</a>

				<div>

					<!-- Make this dynamic -->
					<ul>
						<li>321 West 44th Street</li>
						<li>Suite 200</li>
						<li>New York, NY 10036</li>
					</ul>

					<!-- Make this dynamic -->
					<ul>
						<li><a href:"tel:+1 212.354.9255">+1 212.354.9255</a></li>
						<li><a href="mailto:info@studio-tag.com">info@studio-tag.com</a></li>
					</ul>

					<!-- TODO -->
					<?php get_template_part( 'partials/content', 'social' ); ?>

				</div>

			</section>

			<section>

				<!-- TODO -->
				<div class="column one">

					<!-- TODO -->
					<div>
						<span>Studio</span>
					</div>

					<!-- TODO -->
					<div>
						<span><a href="">Seating</a></span>
						<span><a href="#">Architectural & Interiors</a></span>
						<span><a href="#">Tables</a></span>
						<span><a href="#">Desks & Storage</a></span>
						<span><a href="#">Workspaces</a></span>
						<span><a href="#">Accessories</a></span>
					</div>
				</div>

				<!-- TODO -->
				<div class="column two">

					<!-- TODO -->
					<div>
						<span>Wall</span>
					</div>

					<!-- TODO -->
					<div>
						<span><a href="#">Encore</a></span>
						<span><a href="#">Slimline</a></span>
						<span><a href="#">Ion</a></span>
						<span><a href="#">Industrial Sash</a></span>
						<span><a href="#">Greenwall</a></span>
						<span><a href="#">Prebuilt</a></span>
					</div>
				</div>

				<!-- TODO -->
				<div class="column three">

					<!-- TODO -->
					<div>
						<span>Wren</span>
					</div>

					<!-- TODO -->
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
