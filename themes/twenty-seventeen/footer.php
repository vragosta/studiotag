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

		<footer id="footer" class="container-fluid">
			<div class="row">
				<div id="contact-and-logo" class="col-md-4">
					<img id="footer-img" src="<?php echo STUDIO_WALL_TEMPLATE_URL . '/assets/images/tagwall.png'; ?>">
					<div>321 West 44th Street</div>
					<div>Suite 200</div>
					<div>New York, NY 10036</div>
					<p>
					<div><a href:"tel:+1 212.354.9255">+1 212.354.9255</a></div>
					<div><a href="mailto:info@studio-tag.com">info@studio-tag.com</a></div>
					<p>
					<div class="social-icons">
						<a href="#"><img src="img/Social_Media_Icons/studiotag_twitter_icon.png"></a>
						<a href="https://www.facebook.com/studiotagnyc/"><img src="img/Social_Media_Icons/studiotag_facebook_icon.png"></a>
						<a href="#"><img src="img/Social_Media_Icons/sotudiotag_pinterest_icon.png"></a>
						<a href="https://www.instagram.com/studio_tag/"><img src="img/Social_Media_Icons/studiotag_instagram_icon.png"></a>
						<a href="https://www.linkedin.com/company/studio-tag-llc"><img src="img/Social_Media_Icons/studiotag_linkedin_icon.png"></a>
					</div>
				</div>
				<div id="directory" class="col-md-8">
					<div id="directory-row" class="row">
						<div class="col-md-4 dir-content">
							<h3 class="visible-titles"><strong>STUDIO</strong></h3>
						</div>
						<div class="col-md-4 dir-content">
							<h3 class="visible-titles"><strong>WALL</strong></h3>
						</div>
						<div class="col-md-4 dir-content">
							<h3 class="visible-titles"><strong>WREN</strong></h3>
						</div>
					</div>
					<div id="border-row" class="row">
						<hr>
					</div>
					<!-- 3 columns for each list of content -->
					<div class="col-md-4 col-sm-4 col-xs-4 dir-content dir-content-lists">
						<h3 class="hidden-titles"><strong>STUDIO</strong></h3>
						<a href="#">Seating</a>
						<a href="#">Architectural & Interiors</a>
						<a href="#">Tables</a>
						<a href="#">Desks & Storage</a>
						<a href="#">Workspaces</a>
						<a href="#">Accessories</a>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-4 dir-content dir-content-lists">
						<h3 class="hidden-titles"><strong>WALL</strong></h3>
						<a href="#">Encore</a>
						<a href="#">Slimline</a>
						<a href="#">Ion</a>
						<a href="#">Industrial Sash</a>
						<a href="#">Greenwall</a>
						<a href="#">Prebuilt</a>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-4 dir-content dir-content-lists">
						<h3 class="hidden-titles"><strong>WREN</strong></h3>
						<a href="#">TBA</a>
						<a href="#">TBA</a>
						<a href="#">TBA</a>
						<a href="#">TBA</a>
						<a href="#">TBA</a>
						<a href="#">TBA</a>
					</div>
				</div>
			</div>
		</footer>
	</body>
</html>
<?php wp_footer(); ?>
