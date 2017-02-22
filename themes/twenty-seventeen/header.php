<?php
/**
 * The template for displaying the header.
 *
 * @package Studio Tag - Twenty Seventeen
 * @since 0.1.0
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
		<?php get_template_part( 'partials/content', 'header-front-page' ); ?>
	<?php else : ?>
		<?php get_template_part( 'partials/content', 'header-navigation' ); ?>
	<?php endif; ?>
