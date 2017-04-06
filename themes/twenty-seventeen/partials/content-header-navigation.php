<?php
/**
 * The header that is displayed on every page but the landing page.
 *
 * @package Tag Wall - Twenty Seventeen
 * @since   0.1.0
 * @uses    home_url()
 */
?>

<nav class="header-navigation">

	<!-- Logo -->
	<section id="logo">
		<a href="<?php echo home_url(); ?>">
			<img src="<?php echo TAGWALL_TEMPLATE_URL . '/assets/images/tagwall-black.png'; ?>" />
		</a>
	</section>

	<!-- Menu -->
	<section class="menu-container">

		<ul id="menu">
			<!-- Company will only display at 768px [+] -->
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Company</a>
				<ul class="dropdown-menu">
					<li><a href="<?php echo home_url( '/history/' ); ?>">History</a></li>
					<li><a href="<?php echo home_url( '/possibilities/' ); ?>">Possibilities</a></li>
					<li><a href="<?php echo home_url( '/focus/' ); ?>">Focus</a></li>
					<li><a href="<?php echo home_url( '/team/' ); ?>">Team</a></li>
				</ul>
			</li>

			<!-- Company mobile will only display at 768px [-] -->
			<li class="mobile">
				<a href="#">Company</a>
				<ul class="expand">
					<li><a href="<?php echo home_url( '/history/' ); ?>">History</a></li>
					<li><a href="<?php echo home_url( '/possibilities/' ); ?>">Possibilities</a></li>
					<li><a href="<?php echo home_url( '/focus/' ); ?>">Focus</a></li>
					<li><a href="<?php echo home_url( '/team/' ); ?>">Team</a></li>
				</ul>
			</li>

			<li><a href="<?php echo home_url( '/details/' ); ?>">Wall Details</a></li>

			<!-- Projects  will only display at 768px [+] -->
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Projects</a>
				<ul class="dropdown-menu">
					<li><a href="https://www.pinterest.com/tagwall/showroom/" target="_blank" rel="noopener noreferrer">Gallery</a></li>
					<li><a href="<?php echo home_url( '/clients/' ); ?>">Clients</a></li>
				</ul>
			</li>

			<!-- Projects mobile will only display at 768px [-] -->
			<li class="mobile">
				<a href="#">Projects</a>
				<ul class="expand">
					<li><a href="https://www.pinterest.com/tagwall/showroom/">Gallery</a></li>
					<li><a href="<?php echo home_url( '/clients/' ); ?>">Clients</a></li>
				</ul>
			</li>

			<li><a href="<?php echo home_url( '/news/' ); ?>">News</a></li>
			<li><a href="<?php echo home_url( '/team/' ); ?>">Contact Us</a></li>
		</ul>
	</section>

</nav>
