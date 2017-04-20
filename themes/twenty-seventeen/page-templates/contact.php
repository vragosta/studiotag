<?php
/**
 * Template Name: Contact
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

		<section class="contact-content">

			<?php echo Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_wall_title(); ?>

			<div class="container">
				<div class="contact-col">
					<?php if ( $studiotag_info ) : ?>
						<h3>STUDIOTAG General Information</h3>
						<?php echo $studiotag_info; ?>
					<?php endif; ?>
				</div>
				<div class="contact-col">
					<?php if ( $tagwall_info ) : ?>
						<h3>TAGWALL General Information</h3>
						<?php echo $tagwall_info; ?>
					<?php endif; ?>
				</div>
			</div>
		</section>

		<section class="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.1376315255206!2d-73.99085046441789!3d40.75899752912956!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25853976c3869%3A0xe9be4f9327b04f6c!2s321+W+44th+St+%23200%2C+New+York%2C+NY+10036!5e0!3m2!1sen!2sus!4v1492485780654" width="1100" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</section>

	<?php endwhile; ?>
	<?php wp_reset_postdata(); ?>
<?php endif; ?>

<?php get_footer(); ?>
