
<?php
/**
 * Template Name: Systems Grid
 * Template for displaying the front page.
 *
 * @package Tag Wall - Twenty Seventeen
 * @since   0.1.0
 * @uses    get_header(), get_template_part(), tagwall_get_featued_image(), wp_trim_words(), the_permalink(),
 *          get_the_permalink(), esc_html(), wp_reset_postdata(), get_footer()
 */
?>

<?php

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

	<!-- TODO Replace this with carousel -->
	<section class="carousel">
		<img src="<?php echo TAGWALL_TEMPLATE_URL . '/assets/images/Carousel_Images/1.jpg'; ?>">
		<img src="<?php echo TAGWALL_TEMPLATE_URL . '/assets/images/Carousel_Images/2.jpg'; ?>">
		<img src="<?php echo TAGWALL_TEMPLATE_URL . '/assets/images/Carousel_Images/3.jpg'; ?>">
		<img src="<?php echo TAGWALL_TEMPLATE_URL . '/assets/images/Carousel_Images/4.jpg'; ?>">
	</section>
	<!-- TODO Replace this with carousel -->

	<main class="archive-systems">

		<?php echo Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_wall_title(); ?>

		<section class="grid"><?php
			if ( $query->have_posts() ) :
				while ( $query->have_posts() ) : $query->the_post();

					// Get the featured image.
					$image = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_featured_image( $post );

					// If this is the first iteration through the loop..
					if ( $count == 0 ) : ?>

						<div class="row">
							<div class="right no-padding col-xs-12 col-sm-offset-6 col-sm-6">

								<figure class="featured-image">
									<a href="<?php the_permalink(); ?>">
										<div style="background-image: url( '<?php echo esc_attr( $image ); ?>' );"></div>
									</a>
								</figure>

								<div class="slash">
									<hr />
									<hr />
									<hr />
								</div>

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

								<div class="slash">
									<hr />
									<hr />
									<hr />
								</div>

							</div>
							<div class="info right col-xs-12 col-sm-6">

								<a href="<?php echo get_the_permalink( $temp_post->ID ); ?>">
									<h3><span>Tagwall</span> <?php echo esc_html( $temp_post->post_title ); ?></h3>
								</a>
								<p><?php echo esc_html( $excerpt ); ?></p>
								<a href="<?php echo get_the_permalink( $temp_post->ID ); ?>" class="more">See More</a>

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
								<a href="<?php echo get_the_permalink( $temp_post->ID ); ?>" class="more">See More</a>

							</div>
							<div class="right no-padding col-xs-12 col-sm-6">

								<figure class="featured-image">
									<a href="<?php the_permalink(); ?>">
										<div style="background-image: url( '<?php echo esc_attr( $image ); ?>' );"></div>
									</a>
								</figure>

								<div class="slash">
									<hr />
									<hr />
									<hr />
								</div>

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
				<div class="info left col-xs-12 col-sm-6">
					<a href="<?php echo get_the_permalink( $temp_post->ID ); ?>">
						<h3><span>Tagwall</span> <?php echo esc_html( $temp_post->post_title ); ?></h3>
					</a>
					<p><?php echo esc_html( $excerpt ); ?></p>
					<a href="<?php echo get_the_permalink( $temp_post->ID ); ?>" class="more">See More</a>

				</div>
				<div class="right no-padding col-xs-12 col-sm-6">

					<figure class="featured-image not-visible">
						<a href="<?php echo get_the_permalink( $post->ID ); ?>">
							<div style="background-image: url( '<?php echo esc_attr( $image ); ?>' );"></div>
						</a>
					</figure>

				</div>
			</div>

		</section>

	</main>

<?php get_footer(); ?>
