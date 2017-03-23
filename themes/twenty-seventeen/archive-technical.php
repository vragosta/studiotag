<?php
/**
 * Template: Archive - Technicals
 * Template for displaying the technicals archive.
 *
 * @package Tag Wall - Twenty Seventeen
 * @since   0.1.0
 * @uses    get_header(), get_template_part(), tagwall_get_featued_image(), wp_trim_words(), the_permalink(),
 *          get_the_permalink(), esc_html(), wp_reset_postdata(), get_footer()
 */
?>

<?php get_header(); ?>

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

	// TODO
	include( 'partials/content-details.php' );
?>

<div class="archive-container">

	<?php if ( $query->have_posts() ) : ?>
		<?php while( $query->have_posts() ) : $query->the_post(); ?>

			<?php
				// TODO
				$blueprint_one   = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_blueprint_image( $post, 'one' );
				$blueprint_two   = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_blueprint_image( $post, 'two' );
				$blueprint_three = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_blueprint_image( $post, 'three' );
			?>

			<section class="<?php echo esc_attr( $post->post_name ); ?>">
				<div class="title">
					<h1><a name="<?php echo esc_attr( $post->post_name ); ?>"><?php echo esc_html( $post->post_title ) . ' Technicals'; ?></a></h1>
				</div>

				<div class="blueprint-container">

					<?php if ( $blueprint_one ) : ?>
						<figure class="featured-image settings">
							<div style="background-image: url( '<?php echo esc_attr( $blueprint_one ); ?>' );"></div>
						</figure>
					<?php endif; ?>

					<?php if ( $blueprint_two ) : ?>
						<figure class="featured-image settings">
							<div style="background-image: url( '<?php echo esc_attr( $blueprint_two ); ?>' );"></div>
						</figure>
					<?php endif; ?>

					<?php if ( $blueprint_three ) : ?>
						<figure class="featured-image settings">
							<div style="background-image: url( '<?php echo esc_attr( $blueprint_three ); ?>' );"></div>
						</figure>
					<?php endif; ?>

				</div>
			</section>

		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
	<?php endif; ?>

</div>

<?php get_footer(); ?>
