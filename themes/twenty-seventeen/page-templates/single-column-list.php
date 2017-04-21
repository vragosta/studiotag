<?php
/**
 * Template Name: Single - Column List
 *
 * @package Tag Wall - Twenty Seventeen
 * @since   0.1.0
 * @uses    tagwall_get_hero_image(), tagwall_get_featured_image(), esc_Attr(), the_content(), wp_reset_postdata(), get_footer()
 */
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
	<?php while( have_posts() ) : the_post(); ?>
		<?php $hero_image = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_hero_image( $post ); ?>
		<?php if ( $hero_image ) : ?>
			<figure class="hero-image settings">
				<div style="background-image: url( '<?php echo esc_attr( $hero_image ); ?>' );"></div>
			</figure>
		<?php endif; ?>

		<section class="single-column-list">

			<?php echo Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_wall_title(); ?>

			 <?php if ( get_the_content() ) : ?>
				<section class="row">
					<?php the_content(); ?>
				</section>
			<?php endif; ?>

		</section>

	<?php endwhile; ?>
	<?php wp_reset_postdata(); ?>
<?php endif; ?>

<?php get_footer(); ?>
