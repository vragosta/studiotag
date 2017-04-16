<?php
/**
 * Partial used for Architectural Glass on the glass template.
 *
 * @package Tag Wall - Twenty Seventeen
 * @since   0.1.0
 * @uses    TODO
 */
?>

<?php $count = 1; ?>

<div class="row indent">
	<div class="col-xs-12 col-sm-6">
		<?php echo term_description( $term->term_id ); ?>
	</div>
</div>

<?php $taxonomy_query = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_post_type_term_query( $post_type, $term ); ?>
<div class="taxonomies row"><?php
	if ( $taxonomy_query->have_posts() ) :
		while ( $taxonomy_query->have_posts() ) : $taxonomy_query->the_post();

			// Get the featured image.
			$image = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_featured_image( $post ); ?>

			<div class="taxonomy-item col-xs-12 col-sm-4">
				<div class="featured-image-circle">
					<img src="<?php echo esc_attr( $image ); ?>" />
				</div>

				<h1><?php echo esc_html( $post->post_title ) . ' - ' . esc_html( get_post_meta( $post->ID, 'glass_id', true ) ); ?></h1>
			</div><?php

			if ( $count++ % 3 == 0 ) : ?>
				</div>
				<hr />
				<div class="row"><?php
			endif;

		endwhile;
		wp_reset_postdata();
	endif; ?>
</div>
