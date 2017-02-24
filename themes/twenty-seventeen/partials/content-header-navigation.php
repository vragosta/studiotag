<?php
/**
 * The header that is displayed on every page but the landing page.
 *
 * @package    Studio Tag - Twenty Seventeen
 * @subpackage Studio Wall - Twenty Seventeen
 * @since      0.1.0
 */
?>

<nav id="main-nav" class="navbar navbar-default navbar-fixed-top" id="bs-example-navbar-collapse-1">
	<div class="container-fluid large-show">
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="navbar-header">
			<a class="navbar-brand" href="#">
				<img src="<?php echo STUDIO_WALL_TEMPLATE_URL . '/assets/images/tagwall-black.png'; ?>">
			</a>
		</div>

		<!-- Dropdowns -->
		<ul class="nav navbar-nav navbar-right">
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Company</a>
				<ul class="dropdown-menu">
					<li><a href="#">History</a></li>
					<li><a href="#">Focus</a></li>
					<li><a href="#">Solutions</a></li>
					<li><a href="#">Team</a></li>
				</ul>
			</li>

			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Wall Details</a>
				<ul class="dropdown-menu">
					<li><a href="#">TBA</a></li>
					<li><a href="#">TBA</a></li>
					<li><a href="#">TBA</a></li>
					<li><a href="#">TBA</a></li>
				</ul>
			</li>

			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Projects</a>
				<ul class="dropdown-menu">
					<li><a href="#">TBA</a></li>
					<li><a href="#">TBA</a></li>
					<li><a href="#">TBA</a></li>
					<li><a href="#">TBA</a></li>
				</ul>
			</li>

			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">News</a>
				<ul class="dropdown-menu">
					<li><a href="#">TBA</a></li>
					<li><a href="#">TBA</a></li>
					<li><a href="#">TBA</a></li>
					<li><a href="#">TBA</a></li>
				</ul>
			</li>
			
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Contact</a>
				<ul class="dropdown-menu">
					<li><a href="#">TBA</a></li>
					<li><a href="#">TBA</a></li>
					<li><a href="#">TBA</a></li>
					<li><a href="#">TBA</a></li>
				</ul>
			</li>
		</ul>
	</div>

	<div class="mobile-show">
		<figure>
				<a id="mobile-img-header"></a>
		</figure>

		<div class="mobile-menu">

			<div id="company" class="mobile-menu-catagories">Company</div>

			<div id="company-expand" class="mobile-menu-expand">
					<a href="#" class="mobile-menu-expand-content">History</a>
					<a href="#" class="mobile-menu-expand-content">Focus</a>
					<a href="#" class="mobile-menu-expand-content">Solutions</a>
					<a href="#" class="mobile-menu-expand-content">Team</a>
			</div>

			<div id="wall-details" class="mobile-menu-catagories">Wall Details</div>

			<div id="wall-details-expand" class="mobile-menu-expand">
					<a href="#" class="mobile-menu-expand-content">History</a>
					<a href="#" class="mobile-menu-expand-content">Focus</a>
					<a href="#" class="mobile-menu-expand-content">Solutions</a>
					<a href="#" class="mobile-menu-expand-content">Team</a>
			</div>

			<div id="projects" class="mobile-menu-catagories">Projects</div>

			<div id="projects-expand" class="mobile-menu-expand">
					<a href="#" class="mobile-menu-expand-content">History</a>
					<a href="#" class="mobile-menu-expand-content">Focus</a>
					<a href="#" class="mobile-menu-expand-content">Solutions</a>
					<a href="#" class="mobile-menu-expand-content">Team</a>
			</div>

			<div id="news" class="mobile-menu-catagories">News</div>

			<div id="news-expand" class="mobile-menu-expand">
					<a href="#" class="mobile-menu-expand-content">History</a>
					<a href="#" class="mobile-menu-expand-content">Focus</a>
					<a href="#" class="mobile-menu-expand-content">Solutions</a>
					<a href="#" class="mobile-menu-expand-content">Team</a>
			</div>

			<div id="contact" class="mobile-menu-catagories">Contact</div>

			<div id="contact-expand" class="mobile-menu-expand">
					<a href="#" class="mobile-menu-expand-content">History</a>
					<a href="#" class="mobile-menu-expand-content">Focus</a>
					<a href="#" class="mobile-menu-expand-content">Solutions</a>
					<a href="#" class="mobile-menu-expand-content">Team</a>
			</div>
		</div>
	</div>
</nav>
