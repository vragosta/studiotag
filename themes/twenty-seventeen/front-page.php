<?php
/**
 * Template Name: Systems Grid
 * Template for displaying the front page.
 *
 * @package Tag Wall - Twenty Seventeen
 * @since   0.1.0
 * @uses    TODO
 */
?>

<?php get_header(); ?>
<?php $count = 0; ?>

<?php
	$args = [
		'post_type' => 'system',
		'order'     => 'ASC'
	];
?>

<?php $query = new WP_Query( $args ); ?>
<?php $carousel_images = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_carousel_images( $post->ID ); ?>

<section class="carousel">
	<?php foreach( $carousel_images as $image_url ) : ?>
		<?php if ( $image_url ) : ?>
			<img src="<?php echo get_post_meta( $post->ID, 'carousel_image_one', true ); ?>" />
		<?php endif; ?>
	<?php endforeach; ?>
</section>

<main class="archive-systems">

	<?php echo Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_wall_title(); ?>

	<?php if ( $query->have_posts() ) :?>
		<section class="grid">
			<?php while ( $query->have_posts() ) : $query->the_post(); ?>
				<?php $image = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_featured_image( $post ); ?>
				<?php if ( $count == 0 && $image ) : ?>
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
					</div>
				<?php elseif ( $count % 2 == 1 ) : ?>
					<div class="row">
						<?php if ( $image ) : ?>
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
						<?php endif; ?>

						<?php if ( $temp_post ) : ?>
							<div class="info right col-xs-12 col-sm-6">
								<a href="<?php echo get_the_permalink( $temp_post->ID ); ?>">
									<h3><span>Tagwall</span> <?php echo esc_html( $temp_post->post_title ); ?></h3>
								</a>
								<p><?php echo esc_html( $excerpt ); ?></p>
								<a href="<?php echo get_the_permalink( $temp_post->ID ); ?>" class="more">See More</a>
							</div>
						<?php endif; ?>
					</div>
				<?php elseif ( $count % 2 == 0 ) : ?>
					<div class="row">
						<?php if ( $temp_post ) : ?>
							<div class="info left col-xs-12 col-sm-6">
								<a href="<?php echo get_the_permalink( $temp_post->ID ); ?>">
									<h3><span>Tagwall</span> <?php echo esc_html( $temp_post->post_title ); ?></h3>
								</a>
								<p><?php echo esc_html( $excerpt ); ?></p>
								<a href="<?php echo get_the_permalink( $temp_post->ID ); ?>" class="more">See More</a>

							</div>
						<?php endif; ?>

						<?php if ( $image ) : ?>
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
						<?php endif; ?>
					</div>
				<?php endif; ?>

				<?php
					/**
					 * Store the current post into a local variable for use in next iteration.
					 * NOTE: This is the key statement!
					 */
					$temp_post = $post;
					$excerpt   = wp_trim_words( $temp_post->post_excerpt, 50, '...' );
					$count++;
				?>

			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>

			<div class="row">
				<?php if ( $temp_post ) : ?>
					<div class="info left col-xs-12 col-sm-6">
						<a href="<?php echo get_the_permalink( $temp_post->ID ); ?>">
							<h3><span>Tagwall</span> <?php echo esc_html( $temp_post->post_title ); ?></h3>
						</a>
						<p><?php echo esc_html( $excerpt ); ?></p>
						<a href="<?php echo get_the_permalink( $temp_post->ID ); ?>" class="more">See More</a>
					</div>
				<?php endif; ?>

				<?php if ( $image ) : ?>
					<div class="right no-padding col-xs-12 col-sm-6">
						<figure class="featured-image not-visible">
							<a href="<?php echo get_the_permalink( $post->ID ); ?>">
								<div style="background-image: url( '<?php echo esc_attr( $image ); ?>' );"></div>
							</a>
						</figure>
					</div>
				<?php endif; ?>
			</div>

		</section>
	<?php endif; ?>
</main>

<?php get_footer(); ?>
