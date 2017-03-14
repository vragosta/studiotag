<?php
/**
* Template Name: Tile Grid
*
* @package    Studio Tag - Twenty Seventeen
* @subpackage Studio Wall - Twenty Seventeen
* @since      0.1.0
*/

	get_header();

	// Initialize the global count.
	$count = 0;

	// Arguements for query.
	$args = array(
		'post_type' => array( 'system' ),
		'order'     => 'ASC'
	);

	// Initialize the query.
	$query = new WP_Query( $args );

?>

	<main><?php
		// NOTE: will replace with slider, not going to remove inline styles or image for now ?>
		<figure class="systems-carousel">
			<div style="background-image: url( '<?php echo STUDIO_WALL_TEMPLATE_URL . '/assets/images/vigoss.jpg'; ?>' );"></div>
		</figure>

		<section class="systems-logo">
			<figure class="featured-image">
				<div style="background-image: url( '<?php echo STUDIO_WALL_TEMPLATE_URL . '/assets/images/wallsystems.png'; ?>' );"></div>
			</figure>
		</section>

		<section class="systems"><?php
			if ( $query->have_posts() ) :
				while ( $query->have_posts() ) : $query->the_post();

					// Get the image.
					$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' )[0];

					// Get the excerpt.
					$excerpt = wp_trim_words( $temp_post->post_excerpt, 35, '...' );

					// Get the mobile excerpt.
					$mobile_excerpt = wp_trim_words( $temp_post->post_excerpt, 25, '...' );

					// If this is the first iteration through the loop..
					if ( $count == 0 ) : ?>

						<div class="row">
							<div class="right no-padding col-xs-12 col-sm-offset-6 col-sm-6">
								<figure class="featured-image">
									<a href="<?php the_permalink(); ?>">
										<div style="background-image: url( '<?php echo esc_attr( $image ); ?>' );"></div>
									</a>
								</figure>
							</div>
						</div><?php

					// If an odd iteration through the loop..
					elseif ( $count % 2 == 1 ) : ?>

						<div class="row">
							<div class="left no-padding col-xs-12 col-sm-6">
								<figure class="featured-image">
									<a href="<?php the_permalink(); ?>">
										<div style="background-image: url( '<?php echo esc_attr( $image ); ?>' );"></div>
									</a>
								</figure>
							</div>
							<div class="info right col-xs-12 col-sm-6">
								<a href="<?php echo get_the_permalink( $temp_post->ID ); ?>">
									<h3><span>Tagwall</span> <?php echo esc_html( $temp_post->post_title ); ?></h3>
								</a>
								<p><?php echo esc_html( $excerpt ); ?></p>
								<p class="mobile"><?php echo esc_html( $mobile_excerpt ); ?></p>
							</div>
						</div><?php

					// If an event iteration through the loop..
					elseif ( $count % 2 == 0 ) : ?>

						<div class="row">
							<div class="info left col-xs-12 col-sm-6">
								<a href="<?php echo get_the_permalink( $temp_post->ID ); ?>">
									<h3><span>Tagwall</span> <?php echo esc_html( $temp_post->post_title ); ?></h3>
								</a>
								<p><?php echo esc_html( $excerpt ); ?></p>
								<p class="mobile"><?php echo esc_html( $mobile_excerpt ); ?></p>
							</div>
							<div class="right no-padding col-xs-12 col-sm-6">
								<figure class="featured-image">
									<a href="<?php the_permalink(); ?>">
										<div style="background-image: url( '<?php echo esc_attr( $image ); ?>' );"></div>
									</a>
								</figure>
							</div>
						</div><?php
					endif;

					/**
					 * Store the current post into a local variable for use in next iteration.
					 * NOTE: This is the key statement!
					 */
					$temp_post = $post;

					// Increment the global count variable.
					$count++;

				endwhile;
				wp_reset_postdata();
			endif;

			// Accomodate for the last temporary post's data. ?>
			<div class="row">
				<div class="info left col-xs-12 col-sm-6">
					<a href="<?php echo get_the_permalink( $temp_post->ID ); ?>">
						<h3><span>Tagwall</span> <?php echo esc_html( $temp_post->post_title ); ?></h3>
					</a>
					<p><?php echo esc_html( $excerpt ); ?></p>
					<p class="mobile"><?php echo esc_html( $mobile_excerpt ); ?></p>
				</div>
				<div class="right no-padding col-xs-12 col-sm-6">
					<figure class="featured-image not-visible">
						<a href="<?php echo get_the_permalink( $temp_post->ID ); ?>">
							<div style="background-image: url( '<?php echo esc_attr( $image ); ?>' );"></div>
						</a>
					</figure>
				</div>
			</div>

		</section>

	</main>

<?php get_footer(); ?>
