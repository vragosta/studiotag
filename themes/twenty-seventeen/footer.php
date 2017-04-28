<?php
/**
 * Template for displaying the footer.
 *
 * @package Tag Wall - Twenty Seventeen
 * @since   0.1.0
 * @uses    TODO
 */
?>

		<footer id="footer">
			<section>
				<a href="<?php echo home_url(); ?>">
					<img src="<?php echo TAGWALL_TEMPLATE_URL . '/assets/images/studiotag.png'; ?>" />
				</a>

				<div>
					<?php dynamic_sidebar( 'Footer Left Column' ); ?>
				</div>
			</section>

			<section class="content">
				<div class="title-container row">
					<div class="col-xs-12 col-sm-4">
						<h2>Studio</h2>
					</div>
					<div class="col-xs-12 col-sm-4">
						<h2>Wall</h2>
					</div>
					<div class="col-xs-12 col-sm-4">
						<h2>WREN</h2>
					</div>
				</div>
				<hr />
				<div class="row footer-menus">
					<div class="col-xs-12 col-sm-4">
						<?php dynamic_sidebar( 'Footer Column One' ); ?>
					</div>
					<div class="col-xs-12 col-sm-4">
						<?php dynamic_sidebar( 'Footer Column Two' ); ?>
					</div>
					<div class="col-xs-12 col-sm-4">
						<?php dynamic_sidebar( 'Footer Column Three' ); ?>
					</div>
				</div>
			</section>
		</footer>
	</body>
</html>
<?php wp_footer(); ?>
