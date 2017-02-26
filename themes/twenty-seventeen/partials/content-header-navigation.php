<?php
/**
 * The header that is displayed on every page but the landing page.
 *
 * @package    Studio Tag - Twenty Seventeen
 * @subpackage Studio Wall - Twenty Seventeen
 * @since      0.1.0
 */
?>

<nav class="header-navigation">

	<!-- Logo -->
	<section id="logo">
		<a href="<?php echo home_url(); ?>">
			<img src="<?php echo STUDIO_WALL_TEMPLATE_URL . '/assets/images/tagwall-black.png'; ?>" />
		</a>
	</section>

	<!-- Menu -->
	<?php get_template_part( 'partials/content', 'menu' ); ?>

</nav>
