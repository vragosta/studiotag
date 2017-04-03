<?php
/**
 * Template Name: Two Column Textblock
 *
 * @package Tag Wall - Twenty Seventeen
 * @since   0.1.0
 * @uses    tagwall_get_hero_image(), tagwall_get_featured_image(), esc_Attr(), the_content(), wp_reset_postdata(), get_footer()
 */
?>

<?php

	get_header();

	if ( have_posts() ) :
		while( have_posts() ) : the_post();

			// Get the 'hero-image' from the post.
			$hero_image = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_hero_image( $post ); ?>

			<figure class="hero-image settings">
				<div style="background-image: url( '<?php echo esc_attr( $hero_image ); ?>' );"></div>
			</figure>

			<main class="two-column-textblock">

				<?php echo Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_wall_title( get_the_title(), $post->post_name ); ?>

				<section class="content-container row">
					<div class="content">
						<?php the_content(); ?>
					</div>
				</section>

			</main>
		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
	<?php endif; ?>

<?php get_footer(); ?>
