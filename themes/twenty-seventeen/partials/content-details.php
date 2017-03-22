<?php
/**
 * Partial used on all archive-{wall-details} templates.
 *
 * @package Tag Wall - Twenty Seventeen
 * @since   0.1.0
 * @uses    post_type_archive_title(), home_url(), wp_reset_postdata()
 */
?>

<?php

	// Get the post type object.
	$post_type = get_queried_object();

	// Arguements for main query.
	$args = array(
		'post_type' => $post_type->name,
		'order'     => 'ASC'
	);

	// Initialize the query.
	$query = new WP_Query( $args );

?>

<div class="details-container row">
	<div class="col-xs-12 col-sm-6">
		<h1><?php post_type_archive_title(); ?></h1>
	</div>
	<div class="col-xs-12 col-sm-6">
		<ul>

			<?php if ( $query->have_posts() ) : ?>
				<?php while( $query->have_posts() ) : $query->the_post(); ?>
					<li><a href="<?php echo home_url( $post_type->rewrite['slug'] . '#' . $post->post_name ); ?>"><?php echo esc_html( $post->post_title . ' ' . $post_type->label ); ?></a></li>
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
			<?php endif; ?>

			<a href="#top" class="back">Go Back to Wall Details</a>

		</ul>
	</div>
</div>
