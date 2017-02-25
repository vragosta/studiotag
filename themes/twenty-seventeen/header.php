<?php
/**
 * The template for displaying the header.
 *
 * @package    Studio Tag - Twenty Seventeen
 * @subpackage Studio Wall - Twenty Seventeen
 * @since      0.1.0
 * @uses       language_attributes(), wp_head(), body_class(), is_front_page(), get_template_part()
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

	<?php if ( is_front_page() ) : ?>

		<!-- Display the front page header navigation -->
		<?php get_template_part( 'partials/content', 'header-navigation-front-page' ); ?>
	<?php else : ?>

		<!-- Display header navigation -->
		<?php get_template_part( 'partials/content', 'header-navigation' ); ?>
	<?php endif; ?>
