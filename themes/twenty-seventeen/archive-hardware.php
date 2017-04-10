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

	// Tag_Wall\Twenty_seventeen\Helpers\tagwall_var_dump( get_terms( array( 'taxonomy' => 'ladder_pull', 'hide_empty' => false ) ), true );
	// Tag_Wall\Twenty_seventeen\Helpers\tagwall_var_dump( $custom->terms, true );
	// Tag_Wall\Twenty_seventeen\Helpers\tagwall_var_dump( $custom->all_terms, true );
	// Tag_Wall\Twenty_seventeen\Helpers\tagwall_var_dump( $custom->taxonomies, true );
	// Tag_Wall\Twenty_seventeen\Helpers\tagwall_var_dump( $custom->name, true );

	// Include content/details partial.
	include( 'partials/content-details.php' );

?>

<div class="archive-container hardware">
	<?php $terms = get_terms( array( 'taxonomy' => 'ladder_pull', 'hide_empty' => false ) ); ?>
	<?php foreach( $terms as $term ) :

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
								<!-- TODO Make this dynamic -->
								<h2>Comes in the same finishes as KLO Ladder Pull</h2>
							</div>
						<?php endif; ?>

					</div>
				<?php endif; ?>

			</section>
	<?php endforeach; ?>

	<?php foreach( $custom->taxonomies as $taxonomy ): ?>
		<?php if ( $taxonomy->name !== 'ladder_pull' ) : ?>
			<section class="<?php echo esc_attr( $taxonomy->reqrite['slug'] ); ?>">
				<div class="title">
					<h1><a name="<?php echo esc_attr( $taxonomy->rewrite['slug'] ); ?>"><?php echo esc_html( $taxonomy->label ); ?></a></h1>
				</div>

				<?php $terms = get_terms( array( 'taxonomy' => 'view', 'hide_empty' => false, 'orderby' => 'ID' ) ); ?>
				<?php if ( $terms ) : ?>
					<div class="images row">
						<?php foreach( $terms as $term ) : ?>
							<?php $image = get_option( 'taxonomy_term_' . $term->term_id )['featured_image_url']; ?>
							<div class="col-xs-12 col-sm-4">
								<figure class="featured-image settings" style="padding-bottom: 100%;">
									<div style="background-image: url( '<?php echo esc_attr( $image ); ?>' );"></div>
								</figure>

								<div class="term-title" style="display: flex; justify-content: center;">
									<h1><?php echo esc_html( $term->name ); ?></h1>
								</div>
							</div>
						<?php endforeach; ?>
					</div>
				<?php endif; ?>
			</section>
		<?php endif; ?>
	<?php endforeach; ?>
</div>

<?php get_footer(); ?>
