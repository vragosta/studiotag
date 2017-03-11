<?php
/**
 * The header that is displayed on the landing page ( front-page ).
 *
 * @package    Studio Tag - Twenty Seventeen
 * @subpackage Studio Wall - Twenty Seventeen
 * @since      0.1.0
 */
?>

<nav class="header-navigation-front-page">

	<!-- Logo -->
	<section id="logo">
		<a href="<?php echo home_url(); ?>">
			<img src="<?php echo STUDIO_WALL_TEMPLATE_URL . '/assets/images/tagwall.png'; ?>" />
		</a>
	</section>

	<button class="hamburger hamburger--squeeze" type="button">
		<span class="hamburger-box">
			<span class="hamburger-inner"></span>
		</span>
	</button>
</nav>

<!-- Menu -->
<section class="menu-container">
	<ul>
		<li><a href="#" data-id="company">Company</a></li>
		<li><a href="#">Wall Details</a></li>
		<li><a href="#">Projects</a></li>
		<li><a href="#">News</a></li>
		<li><a href="#">Contact</a></li>
	</ul>
	<ul>
		<li><a href="#">History</a></li>
		<li><a href="#">Focus</a></li>
		<li><a href="#">Solutions</a></li>
		<li><a href="#">Team</a></li>
	</ul>
</section>
