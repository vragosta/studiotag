<?php
/**
 * The header that is displayed on the landing page ( front-page ).
 *
 * @package    Studio Tag - Twenty Seventeen
 * @subpackage Studio Wall - Twenty Seventeen
 * @since      0.1.0
 */
?>

<nav id="hamburger-nav" class="navbar navbar-default navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="<?php echo home_url(); ?>">
				<img src="<?php echo STUDIO_WALL_TEMPLATE_URL . '/assets/images/tagwall.png'; ?>">
			</a>
		</div>

			<div class="navbar-text navbar-right">
				<button class="hamburger hamburger--squeeze" type="button">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</button>
			</div>
	</div>
</nav>

<section class="overlay">
	<div class="overlay-content">
		<div class="container">
			<div class="catagory-container col-md-6 col-sm-6 col-xs-6">
				<!-- Use data-id for js easy access -->
				<h1 class="overlay-catagories" data-id="company">Company</h1>
				<h1 class="overlay-catagories" data-id="wall-details">Wall Details</h1>
				<h1 class="overlay-catagories" data-id="projects">Projects</h1>
				<h1 class="overlay-catagories" data-id="news">News</h1>
				<h1 class="overlay-catagories" data-id="contact">Contact</h1>
			</div>

			<!-- Use data-id for js easy access -->
			<div id="list-company" class="hamburger-hover-list col-md-6 col-sm-6 col-xs-6">
				<span data-id="history">History</span>
				<span data-id="focus">Focus</span>
				<span data-id="solutions">Solutions</span>
				<span data-id="team">Team</span>
			</div>

			<div id="list-wall-details" class="hamburger-hover-list col-md-6 col-sm-6 col-xs-6">
				<span>TBA</span>
				<span>TBA</span>
				<span>TBA</span>
				<span>TBA</span>
			</div>

			<div id="list-projects" class="hamburger-hover-list col-md-6 col-sm-6 col-xs-6">
				<span>TBA</span>
				<span>TBA</span>
				<span>TBA</span>
				<span>TBA2</span>
			</div>

			<div id="list-news" class="hamburger-hover-list col-md-6 col-sm-6 col-xs-6">
				<span>TBA</span>
				<span>TBA</span>
				<span>TBA</span>
				<span>TBA5</span>
			</div>

			<div id="list-contact" class="hamburger-hover-list col-md-6 col-sm-6 col-xs-6">
				<span>TBA</span>
				<span>TBA</span>
				<span>TBA</span>
				<span>TBA6</span>
			</div>
		</div>
	</div>
</section>
