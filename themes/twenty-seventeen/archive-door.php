<?php
/**
 * Template: Archive - Doors
 * Template for displaying the doors archive.
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

<div class="archive-container door">
	<div class="row"><?php

		if ( $custom->query->have_posts() ) :
			while ( $custom->query->have_posts() ) : $custom->query->the_post();

			// Get the featured image.
			$image = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_featured_image( $post ); ?>

			<div class="col-xs-12 col-sm-6">
				<a name="<?php echo esc_attr( $post->post_name ); ?>"></a>

				<figure class="featured-image">
					<div style="background-image: url( '<?php echo esc_attr( $image ); ?>' );"></div>
				</figure>

				<h1><?php echo esc_html( $post->post_title ); ?></h1>
			</div>

			<?php if ( $count % 2 == 0 ) : ?>
				</div>
				<div class="row">
			<?php endif; ?>

			<?php $count++; ?>

			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		<?php endif; ?>

	</div>

	<?php

		foreach( $custom->terms as $term ) :

			// Reinitialize the count variable.
			$count = 1;

			// Initialize the query.
			$taxonomy_query = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_post_type_term_query( $custom->name, $term ); ?>

			<section class="taxonomies <?php echo esc_attr( $term->taxonomy ); ?>">
				<div class="title">
					<h1><a name="<?php echo esc_attr( $term->slug ); ?>"><?php echo esc_html( $term->name ); ?></a></h1>
				</div>

				<div class="row">
					<?php
						if ( $taxonomy_query->have_posts() ) :
							while ( $taxonomy_query->have_posts() ) : $taxonomy_query->the_post();

								// Get the featured image.
								$image = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_featured_image( $post ); ?>

								<div class="taxonomy-item col-xs-12 col-sm-4">
									<div class="featured-image-circle">
										<img src="<?php echo esc_attr( $image ); ?>" />
									</div>

									<h1><?php echo esc_html( $post->post_title ); ?></h1>
								</div><?php

								if ( $count % 3 == 0 ) : ?>
									</div>
									<div class="row"><?php
								endif;

							$count++;

							endwhile;
							wp_reset_postdata();
						endif; ?>

						<div class="taxonomy-item col-xs-12 col-sm-4">
							<div class="featured-image-circle custom"></div>
							<h1>Custom</h1>
						</div>
				</div>
			</section><?php

		endforeach; ?>

</div>

<?php get_footer(); ?>
