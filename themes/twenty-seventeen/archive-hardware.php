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

	// Tag_Wall\Twenty_seventeen\Helpers\tagwall_var_dump( $custom->all_terms );

	// Include content/details partial.
	include( 'partials/content-details.php' );

?>

<div class="archive-container hardware">
	<?php foreach( $custom->all_terms as $term ) :

			// Get the array mof images.
			$images = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_term_images( $term->term_id, true ); ?>

			<section class="<?php echo esc_attr( $term->slug ); ?>">
				<div class="title">
					<h1><a name="<?php echo esc_attr( $term->slug ); ?>"><?php echo esc_html( $term->name ); ?></a></h1>
				</div>

				<?php if ( $images ) : ?>
					<div class="images row">
						<?php foreach( $images as $image ) : ?>
							<div class="col-xs-12 col-sm-4">
								<figure class="featured-image settings">
									<div style="background-image: url( '<?php echo esc_attr( $image ); ?>' );"></div>
								</figure>
							</div>

							<?php if ( $count++ % 5 == 0 ) : ?>
								</div>
								<div class="images row">
							<?php endif; ?>

						<?php endforeach; ?>

						<?php if ( $term->slug === 'electronic' ) : ?>
							<div class="col-xs-12 col-sm-4 segment">
								<h2>Comes in the same finishes as KLO Ladder Pull</h2>
							</div>
						<?php endif; ?>

					</div>
				<?php endif; ?>

			</section>

	<?php endforeach; ?>
</div>
