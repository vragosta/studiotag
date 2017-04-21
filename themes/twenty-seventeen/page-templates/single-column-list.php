<?php
/**
 * Template Name: Single - Column List
 *
 * @package Tag Wall - Twenty Seventeen
 * @since   0.1.0
 * @uses    TODO
 */
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
	<?php while( have_posts() ) : the_post(); ?>
		<?php $hero_image     = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_hero_image( $post ); ?>
		<?php $studiotag_info = get_post_meta( $post->ID, 'studiotag_info', true ); ?>
		<?php $tagwall_info   = get_post_meta( $post->ID, 'tagwall_info', true ); ?>

		<?php if ( $hero_image ) : ?>
			<figure class="hero-image settings">
				<div style="background-image: url( '<?php echo esc_attr( $hero_image ); ?>' );"></div>
			</figure>
		<?php endif; ?>

			<main class="two-column-textblock single-column-list">

				<?php echo Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_wall_title(); ?>

				<?php if ( get_the_content() ) : ?>
					<section class="content-container row">
						<?php the_content(); ?>
					</section>
				<?php endif; ?>

			</main>
		</section>

	<?php endwhile; ?>
	<?php wp_reset_postdata(); ?>
<?php endif; ?>

<?php get_footer(); ?>
