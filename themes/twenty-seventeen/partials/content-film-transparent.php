<?php
/**
 * Partial used for Transparent on the film template.
 *
 * @package Tag Wall - Twenty Seventeen
 * @since   0.1.0
 * @uses    TODO
 */
?>

<div class="content row">
	<div class="col-xs-12 col-sm-9">
		<?php $image = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_term_featured_image( $term->term_id ); ?>
		<figure class="featured-image settings">
			<div style="background-image: url( '<?php echo esc_attr( $image ); ?>' );"></div>
		</figure>
	</div>
	<div class="col-xs-12 col-sm-3">
		<?php echo term_description( $term->term_id ); ?>
	</div>
</div>

<?php $taxonomy_query = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_post_type_term_query( $post_type, $term ); ?>
<div class="taxonomies row"><?php
	if ( $taxonomy_query->have_posts() ) : ?>
		<div class="title">
			<h1>Color</h1>
		</div>
		<hr /><?php
		while ( $taxonomy_query->have_posts() ) : $taxonomy_query->the_post();

			// Get the featured image.
			$image = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_featured_image( $post ); ?>

			<div class="taxonomy-item col-xs-12 col-sm-4">
				<div class="featured-image-circle">
					<img src="<?php echo esc_attr( $image ); ?>" />
				</div>

				<h1><?php echo esc_html( $post->post_title ); ?></h1>
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
