<?php
/**
 * Template: Archive - Applied Details
 * Template for displaying the applied details archive.
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
	$count = 0;

	// Get the post type object.
	$custom = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_post_type_object( get_queried_object() );

	// Include the content/details partial.
	include( 'partials/content-details.php' );

?>

<div class="archive-container applied-detail">
	<section class="grid"><?php
		if ( $custom->query->have_posts() ) :
			while ( $custom->query->have_posts() ) : $custom->query->the_post();

				// Get the featured image.
				$image = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_featured_image( $post );

				// If this is the first iteration through the loop..
				if ( $count == 0 ) : ?>

					<div class="row">
						<div class="right no-padding col-xs-12 col-sm-offset-6 col-sm-6">

							<a name="<?php echo esc_attr( $post->post_name ); ?>"></a>
							<figure class="featured-image">
								<div style="background-image: url( '<?php echo esc_attr( $image ); ?>' );"></div>
							</figure>

							<!-- <div class="slash">
								<hr />
								<hr />
								<hr />
							</div> -->

						</div>
					</div><?php

				// If an odd iteration through the loop..
				elseif ( $count % 2 == 1 ) : ?>

					<div class="row">
						<div class="left no-padding col-xs-12 col-sm-6">

							<a name="<?php echo esc_attr( $post->post_name ); ?>"></a>
							<figure class="featured-image">
								<div style="background-image: url( '<?php echo esc_attr( $image ); ?>' );"></div>
							</figure>

							<!-- <div class="slash">
								<hr />
								<hr />
								<hr />
							</div> -->

						</div>
						<div class="info right col-xs-12 col-sm-6">

							<h3><?php echo esc_html( $temp_post->post_title ); ?></h3>

						</div>
					</div><?php

				// If an event iteration through the loop..
				elseif ( $count % 2 == 0 ) : ?>

					<div class="row">
						<div class="info left col-xs-12 col-sm-6">

							<h3><?php echo esc_html( $temp_post->post_title ); ?></h3>

						</div>
						<div class="right no-padding col-xs-12 col-sm-6">

							<a name="<?php echo esc_attr( $post->post_name ); ?>"></a>
							<figure class="featured-image">
								<div style="background-image: url( '<?php echo esc_attr( $image ); ?>' );"></div>
							</figure>

							<!-- <div class="slash">
								<hr />
								<hr />
								<hr />
							</div> -->

						</div>
					</div><?php
				endif;

				/**
				 * Store the current post into a local variable for use in next iteration.
				 * NOTE: This is the key statement!
				 */
				$temp_post = $post;
				$excerpt   = wp_trim_words( $temp_post->post_excerpt, 50, '...' );

				// Increment the global count variable.
				$count++;

			endwhile;
			wp_reset_postdata();
		endif;

		// Accomodate for the last temporary post's data. ?>
		<div class="row">
			<div class="left no-padding col-xs-12 col-sm-6">

				<a name="<?php echo esc_attr( $post->post_name ); ?>"></a>
				<figure class="featured-image not-visible">
					<div style="background-image: url( '<?php echo esc_attr( $image ); ?>' );"></div>
				</figure>

			</div>
			<div class="info right col-xs-12 col-sm-6">

				<h3><?php echo esc_html( $temp_post->post_title ); ?></h3>

			</div>
		</div>
	</section>

</div>

<?php get_footer(); ?>
