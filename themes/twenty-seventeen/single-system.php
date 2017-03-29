<?php
/**
 * Template Name: Single - Three Column
 *
 * @package Tag Wall - Twenty Seventeen
 * @since   0.1.0
 * @uses    get_header(), tagwall_get_featured_image(), json_decode(), get_post_meta(), esc_attr(), the _title(), the_content()
 */
?>

<?php get_header(); 
	// Pinterest Galley constants
	$_ENCORE_GALLERY = "http://pin.it/nQO04sa";
	$_SLIMLINE_GALLERY = "http://pin.it/hryCyU2";
	$_ION_GALLERY = "http://pin.it/te8N5sY";
	$_INDUSTRIAL_SASH_GALLERY = "http://pin.it/Hb0Tnws";
	$_GREENWALL_GALLERY = "http://pin.it/ujvL0-k";
	$_PREBUILT_GALLERY = "http://pin.it/c8OBUYS";
?>

<?php if ( have_posts() ) : ?>
	<?php while( have_posts() ) : the_post();

		// Get the featured image from the post.
		$image = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_featured_image( $post ); ?>

		<figure class="featured-image">
			<div style="background-image: url( '<?php echo esc_attr( $image ); ?>' );"></div>
		</figure>

		<main class="systems-single">
			<?php
				// Get all 'system' specific meta.
				$custom_one_title     = json_decode( get_post_meta( $post->ID, 'custom_one_title', true ) );
				$custom_one_content   = json_decode( get_post_meta( $post->ID, 'custom_one_content', true ) );
				$custom_two_title     = json_decode( get_post_meta( $post->ID, 'custom_two_title', true ) );
				$custom_two_content   = json_decode( get_post_meta( $post->ID, 'custom_two_content', true ) );
				$custom_three_title   = json_decode( get_post_meta( $post->ID, 'custom_three_title', true ) );
				$custom_three_content = json_decode( get_post_meta( $post->ID, 'custom_three_content', true ) );
				$custom_four_title    = json_decode( get_post_meta( $post->ID, 'custom_four_title', true ) );
				$custom_four_content  = json_decode( get_post_meta( $post->ID, 'custom_four_content', true ) );
				$custom_five_title    = json_decode( get_post_meta( $post->ID, 'custom_five_title', true ) );
				$custom_five_content  = json_decode( get_post_meta( $post->ID, 'custom_five_content', true ) );
				$custom_six_title     = json_decode( get_post_meta( $post->ID, 'custom_six_title', true ) );
				$custom_six_content   = json_decode( get_post_meta( $post->ID, 'custom_six_content', true ) );
				$custom_seven_title   = json_decode( get_post_meta( $post->ID, 'custom_seven_title', true ) );
				$custom_seven_content = json_decode( get_post_meta( $post->ID, 'custom_seven_content', true ) );
				$custom_eight_title   = json_decode( get_post_meta( $post->ID, 'custom_eight_title', true ) );
				$custom_eight_content = json_decode( get_post_meta( $post->ID, 'custom_eight_content', true ) );
				$custom_nine_title    = json_decode( get_post_meta( $post->ID, 'custom_nine_title', true ) );
				$custom_nine_content  = json_decode( get_post_meta( $post->ID, 'custom_nine_content', true ) );
				$custom_ten_title     = json_decode( get_post_meta( $post->ID, 'custom_ten_title', true ) );
				$custom_ten_content   = json_decode( get_post_meta( $post->ID, 'custom_ten_content', true ) );
			?>

			<section>
				<div class="title-container row">
					<div class="col-xs-12">
						<h1><span>Tagwall</span> <?php the_title(); ?></h1>
					</div>
				</div>

				<div class="specs-container row">
					<div class="view-container col-xs-12 col-sm-5 col-md-3 col-lg-3">
						<ul>
							<!-- Greenwall doesnt have wall details -->
							<?php if (is_single('greenwall')) : ?>
								<li><a href="<?php echo $_GREENWALL_GALLERY; ?>">View Gallery</a></li>
								<li><a href="#">View LookBook</a></li>
							<?php else : ?>
								<!-- Set each galery link based on single page template -->
								<?php if (is_single('encore')) : ?>
									<li><a href="<?php echo $_ENCORE_GALLERY; ?>">View Gallery</a></li>
								<?php elseif (is_single('slimline')) : ?>
									<li><a href="<?php echo $_SLIMLINE_GALLERY; ?>">View Gallery</a></li>
								<?php elseif (is_single('ion')) : ?>
									<li><a href="<?php echo $_ION_GALLERY; ?>">View Gallery</a></li>
								<?php elseif (is_single('industrial-sash')) :?>
									<li><a href="<?php echo $_INDUSTRIAL_SASH_GALLERY; ?>">View Gallery</a></li>
								<?php elseif (is_single('prebuilt')) : ?>
									<li><a href="<?php echo $_PREBUILT_GALLERY; ?>">View Gallery</a></li>
									<li><a href="<?php echo home_url( '/details/' ); ?>">View Wall Details</a></li>
									<li><a href="#">View LookBook</a></li>
							<?php endif; ?>
						</ul>
					</div>

					<div class="content-container col-xs-12 col-sm-7 col-md-5 col-lg-4">
						<?php the_content(); ?>
					</div>

					<div class="custom-meta-container col-xs-12 col-sm-12 col-md-4 col-lg-5">

						<?php if ( $custom_one_title ) : ?>
							<div class="custom one">
								<h2><?php echo $custom_one_title; ?></h2>

								<?php if ( $custom_one_content ) : ?>
									<p><?php echo $custom_one_content; ?></p>
								<?php endif; ?>

							</div>
						<?php endif; ?>

						<?php if ( $custom_two_title ) : ?>
							<div class="custom two">
								<h2><?php echo $custom_two_title; ?></h2>

								<?php if ( $custom_two_content ) : ?>
									<p><?php echo $custom_two_content; ?></p>
								<?php endif; ?>

							</div>
						<?php endif; ?>

						<?php if ( $custom_three_title ) : ?>
							<div class="custom three">
								<h2><?php echo $custom_three_title; ?></h2>

								<?php if ( $custom_three_content ) : ?>
									<p><?php echo $custom_three_content; ?></p>
								<?php endif; ?>

							</div>
						<?php endif; ?>

						<?php if ( $custom_four_title ) : ?>
							<div class="custom four">
								<h2><?php echo $custom_four_title; ?></h2>

								<?php if ( $custom_four_content ) : ?>
									<p><?php echo $custom_four_content; ?></p>
								<?php endif; ?>

							</div>
						<?php endif; ?>

						<?php if ( $custom_five_title ) : ?>
							<div class="custom five">
								<h2><?php echo $custom_five_title; ?></h2>

								<?php if ( $custom_five_content ) : ?>
									<p><?php echo $custom_five_content; ?></p>
								<?php endif; ?>

							</div>
						<?php endif; ?>

						<?php if ( $custom_six_title ) : ?>
							<div class="custom six">
								<h2><?php echo $custom_six_title; ?></h2>

								<?php if ( $custom_six_content ) : ?>
									<p><?php echo $custom_six_content; ?></p>
								<?php endif; ?>

							</div>
						<?php endif; ?>

						<?php if ( $custom_seven_title ) : ?>
							<div class="custom seven">
								<h2><?php echo $custom_seven_title; ?></h2>

								<?php if ( $custom_seven_content ) : ?>
									<p><?php echo $custom_seven_content; ?></p>
								<?php endif; ?>

							</div>
						<?php endif; ?>

						<?php if ( $custom_eight_title ) : ?>
							<div class="custom eight">
								<h2><?php echo $custom_eight_title; ?></h2>

								<?php if ( $custom_eight_content ) : ?>
									<p><?php echo $custom_eight_content; ?></p>
								<?php endif; ?>

							</div>
						<?php endif; ?>

						<?php if ( $custom_nine_title ) : ?>
							<div class="custom nine">
								<h2><?php echo $custom_nine_title; ?></h2>

								<?php if ( $custom_nine_content ) : ?>
									<p><?php echo $custom_nine_content; ?></p>
								<?php endif; ?>

							</div>
						<?php endif; ?>

						<?php if ( $custom_ten_title ) : ?>
							<div class="custom ten">
								<h2><?php echo $custom_ten_title; ?></h2>

								<?php if ( $custom_ten_content ) : ?>
									<p><?php echo $custom_ten_content; ?></p>
								<?php endif; ?>

							</div>
						<?php endif; ?>

					</div>
				</div>
			</section>
		</main>

	<?php endwhile; ?>
	<?php wp_reset_postdata(); ?>
<?php endif; ?>

<?php get_footer(); ?>
