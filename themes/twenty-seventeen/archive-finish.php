<?php
/**
 * Template: Archive - Finishes
 * Template for displaying the finishes archive.
 *
 * @package Tag Wall - Twenty Seventeen
 * @since   0.1.0
 * @uses    get_header(), get_template_part(), tagwall_get_featued_image(), wp_trim_words(), the_permalink(),
 *          get_the_permalink(), esc_html(), wp_reset_postdata(), get_footer()
 */
?>

<?php

	get_header();

	// Get the custom catered post type object based off the archive template we are on.
	$custom = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_post_type_object( get_queried_object() );

	// Tag_Wall\Twenty_seventeen\Helpers\tagwall_var_dump( get_terms( array( 'taxonomy' => 'ladder_pull', 'hide_empty' => false ) ), true );
	// Tag_Wall\Twenty_seventeen\Helpers\tagwall_var_dump( $custom->terms, true );
	// Tag_Wall\Twenty_seventeen\Helpers\tagwall_var_dump( $custom->all_terms, true );
	// Tag_Wall\Twenty_seventeen\Helpers\tagwall_var_dump( $custom->terms, true );
	// Tag_Wall\Twenty_seventeen\Helpers\tagwall_var_dump( $custom->assoc_terms, true );
	// Tag_Wall\Twenty_seventeen\Helpers\tagwall_var_dump( $custom->taxonomies, true );

	// Include content/details partial.
	include( 'partials/content-details.php' );

?>

<div class="archive-container <?php echo esc_attr( $custom->name ); ?>">
	<?php foreach( $custom->terms as $term ) : ?>
		<?php $count = 1; ?>
		<section class="archive-item <?php echo esc_attr( $term->slug ); ?>">
			<div class="title">
				<h1><a name="<?php echo esc_attr( $term->slug ); ?>"><?php echo esc_html( $term->name ); ?></a></h1>
			</div>

			<hr />

			<?php $taxonomy_query = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_post_type_term_query( $custom->name, $term ); ?>

			<div class="taxonomies <?php echo esc_attr( $term->taxonomy ); ?>">
				<!-- <div class="title">
					<h1><a name="<?php echo esc_attr( $term->slug ); ?>"><?php echo esc_html( $term->name ); ?></a></h1>
				</div>
				<hr /> -->
				<div class="row"><?php
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
								<hr />
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
			</div>




		</section>
	<?php endforeach; ?>
</div>

<?php get_footer(); ?>
