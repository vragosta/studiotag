<?php
/**
 * Template: Archive - Hardware
 * Template for displaying the hardware archive.
 *
 * @package Tag Wall - Twenty Seventeen
 * @since   0.1.0
 * @uses    get_header(), get_template_part(), tagwall_get_featued_image(), wp_trim_words(), the_permalink(),
 *          get_the_permalink(), esc_html(), wp_reset_postdata(), get_footer()
 */
?>

<?php

	get_header();

	// Initialize the local count variable.
	$count = 1;

	// Get the custom catered post type object based off the archive template we are on.
	$custom = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_post_type_object( get_queried_object() );

	// Include content/details partial.
	include( 'partials/content-details.php' );

?>

<div class="archive-container hardware">
	<?php if ( $custom->query->have_posts() ) : ?>
		<?php while( $custom->query->have_posts() ) : $custom->query->the_post();

			// Get the featured image.
			$image_one = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_featured_image( $post ); ?>

			<section class="<?php echo esc_attr( $post->post_name ); ?>">
				<div class="title">
					<h1><a name="<?php echo esc_attr( $post->post_name ); ?>"><?php echo esc_html( $post->post_title ); ?></a></h1>
				</div>

				<div class="image-container">
					<?php if ( $image_one ) : ?>
						<div class="col-xs-12 col-sm-6">
							<figure class="featured-image settings">
								<div style="background-image: url( '<?php echo esc_attr( $image_one ); ?>' );"></div>
							</figure>
						</div>
					<?php endif; ?>
				</div>

			</section>

		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
	<?php endif; ?>
</div>
