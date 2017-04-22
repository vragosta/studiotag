<?php
/**
 * The header that is displayed on the landing page ( front-page ).
 *
 * @package Tag Wall - Twenty Seventeen
 * @since   0.1.0
 * @uses    home_url()
 */
?>

<nav class="header-navigation-front-page">
	<section id="logo">
		<a href="<?php echo home_url(); ?>">
			<img src="<?php echo TAGWALL_TEMPLATE_URL . '/assets/images/tagwall.png'; ?>" />
		</a>
	</section>

	<button class="hamburger hamburger--squeeze" type="button">
		<span class="hamburger-box">
			<span class="hamburger-inner"></span>
		</span>
	</button>
</nav>

<section class="menu-container">
	<div>
		<div class="row">
			<div class="static-menu col-xs-12 col-sm-6">
				<ul>
					<li><a href="#" data-id="company">Company</a></li>
					<li><a href="<?php echo home_url( '/details/' ); ?>">Wall Details</a></li>
					<li><a href="#" data-id="projects">Projects</a></li>
					<li><a href="<?php echo home_url( '/news/' ); ?>">News</a></li>
					<li><a href="<?php echo home_url( '/contact/' ); ?>">Contact Us</a></li>
				</ul>
			</div>
			<div class="dynamic-menu col-xs-12 col-sm-6">
				<ul class="company">
					<li><a href="<?php echo home_url( '/history/' ); ?>">History</a></li>
					<li><a href="<?php echo home_url( '/possibilities/' ); ?>">Possibilities</a></li>
					<li><a href="<?php echo home_url( '/focus/' ); ?>">Focus</a></li>
					<li><a href="<?php echo home_url( '/team/' ); ?>">Team</a></li>
				</ul>
				<ul class="projects not-visible">
					<li><a href="<?php echo home_url( '/clients/' ); ?>">Clients</a></li>
					<li><a href="<?php echo home_url( '/gallery/' ); ?>">Gallery</a></li>
				</ul>
			</div>
		</div>
	</div>
</section>
