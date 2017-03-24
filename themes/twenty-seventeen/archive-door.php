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

	// Get the post type object.
	$post_type = get_queried_object();

	// Initialize the global count.
	$count = 0;

	// Arguements for main query.
	$args = array(
		'post_type' => $post_type->name,
		'order'     => 'ASC',
		'tax_query' => array(
			array(
					'taxonomy' => 'panel',
					'terms'    => get_terms( 'panel', array( 'fields' => 'ids' ) ),
					'operator' => 'NOT IN'
			)
		)
	);

	// Initialize the query.
	$query = new WP_Query( $args );

	// TODO
	$terms = get_terms( array(
		'taxonomy'   => 'panel',
		'hide_empty' => false
	) );

	// TODO
	include( 'partials/content-details.php' );

?>

<div class="archive-container door">
	<div class="row"><?php

		if ( $query->have_posts() ) :
			while ( $query->have_posts() ) : $query->the_post();

			// Get the featured image.
			$image = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_featured_image( $post ); ?>

			<div class="col-xs-12 col-sm-6">
				<a name="<?php echo esc_attr( $post->post_name ); ?>"></a>
				<figure class="featured-image">
					<div style="background-image: url( '<?php echo esc_attr( $image ); ?>' );"></div>
				</figure>

				<h1><?php echo esc_html( $post->post_title ); ?></h1>
			</div><?php

			if ( $count % 2 == 1 ) : ?>
				</div>
				<div class="row"><?php
			endif;

			$count++;

			endwhile;
			wp_reset_postdata();
		endif; ?>

	</div>

	<div class="row">
		<div class="col-xs-12">

		</div>
	</div>
</div>
