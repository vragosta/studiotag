<?php
/**
 * Template Name: News
 *
 * @package Tag Wall - Twenty Seventeen
 * @since   0.1.0
 * @uses    TODO
 */
?>

<?php get_header(); ?>
<?php $blog_id = get_option( 'page_for_posts' ); ?>
<?php $post = get_post( $blog_id ); ?>
<?php $hero_image = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_hero_image( $post ); ?>

<?php if ( $hero_image ) : ?>
	<figure class="hero-image settings">
		<div style="background-image: url( '<?php echo esc_attr( $hero_image ); ?>' );"></div>
	</figure>
<?php endif; ?>

<main class="news">

	<?php echo Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_wall_title(); ?>

	<section class="menu-container">
		<div class="row">
			<?php if ( have_posts() ) : ?>
				<div class="static-menu col-xs-12 col-sm-7">
					<ul>
						<?php while( have_posts() ) : the_post(); ?>
							<li><a data-id="<?php echo esc_attr( $post_type->name ); ?>"><?php echo esc_html( $post->post_title ); ?></a></li>
						<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>
					</ul>
				</div>
			<?php endif; ?>
		</div>
	</section>

</main>

<?php get_footer(); ?>
