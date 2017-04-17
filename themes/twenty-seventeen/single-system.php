<?php
/**
 * Template Name: Single - Three Column
 *
 * @package Tag Wall - Twenty Seventeen
 * @since   0.1.0
 * @uses    TODO
 */
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
	<?php while( have_posts() ) : the_post(); ?>
		<?php $image = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_featured_image( $post ); ?>
		<?php
			$metadata = [
				[
					'title'     => json_decode( get_post_meta( $post->ID, 'custom_one_title', true ) ),
					'content'   => json_decode( get_post_meta( $post->ID, 'custom_one_content', true ) )
				],
				[
					'title'   => json_decode( get_post_meta( $post->ID, 'custom_two_title', true ) ),
					'content' => json_decode( get_post_meta( $post->ID, 'custom_two_content', true ) )
				],
				[
					'title'   => json_decode( get_post_meta( $post->ID, 'custom_three_title', true ) ),
					'content' => json_decode( get_post_meta( $post->ID, 'custom_three_content', true ) )
				],
				[
					'title'    => json_decode( get_post_meta( $post->ID, 'custom_four_title', true ) ),
					'content'  => json_decode( get_post_meta( $post->ID, 'custom_four_content', true ) )
				],
				[
					'title'    => json_decode( get_post_meta( $post->ID, 'custom_five_title', true ) ),
					'content'  => json_decode( get_post_meta( $post->ID, 'custom_five_content', true ) )
				],
				[
					'title'     => json_decode( get_post_meta( $post->ID, 'custom_six_title', true ) ),
					'content'   => json_decode( get_post_meta( $post->ID, 'custom_six_content', true ) )
				],
				[
					'title'   => json_decode( get_post_meta( $post->ID, 'custom_seven_title', true ) ),
					'content' => json_decode( get_post_meta( $post->ID, 'custom_seven_content', true ) )
				],
				[
					'title'   => json_decode( get_post_meta( $post->ID, 'custom_eight_title', true ) ),
					'content' => json_decode( get_post_meta( $post->ID, 'custom_eight_content', true ) )
				],
				[
					'title'    => json_decode( get_post_meta( $post->ID, 'custom_nine_title', true ) ),
					'content'  => json_decode( get_post_meta( $post->ID, 'custom_nine_content', true ) )
				],
				[
					'title'     => json_decode( get_post_meta( $post->ID, 'custom_ten_title', true ) ),
					'content'   => json_decode( get_post_meta( $post->ID, 'custom_ten_content', true ) )
				]
			];
		?>

		<?php if ( $image ) : ?>
			<figure class="featured-image">
				<div style="background-image: url( '<?php echo esc_attr( $image ); ?>' );"></div>
			</figure>
		<?php endif; ?>

		<main class="systems-single">
			<section>
				<div class="title-container row">
					<div class="col-xs-12">
						<h1><span>Tagwall</span> <?php the_title(); ?></h1>
					</div>
				</div>

				<div class="specs-container row">
					<div class="view-container col-xs-12 col-sm-5 col-md-3 col-lg-3">
						<ul>
							<?php if ( is_single( 'greenwall' ) ) : ?>
								<li><a href="<?php echo TAGWALL_GREENWALL_GALLERY; ?>" target="_blank">View Gallery</a></li>
								<li><a href="#">View LookBook</a></li>
							<?php else : ?>
								<?php if ( is_single( 'encore' ) ) : ?>
									<li><a href="<?php echo TAGWALL_ENCORE_GALLERY; ?>" target="_blank">View Gallery</a></li>
								<?php elseif ( is_single( 'slimline') ) : ?>
									<li><a href="<?php echo TAGWALL_SLIMELINE_GALLERY; ?>" target="_blank">View Gallery</a></li>
								<?php elseif ( is_single( 'ion' ) ) : ?>
									<li><a href="<?php echo TAGWALL_ION_GALLERY; ?>" target="_blank">View Gallery</a></li>
								<?php elseif ( is_single( 'industrial-sash' ) ) :?>
									<li><a href="<?php echo TAGWALL_INDUSTRIAL_SASH_GALLERY; ?>" target="_blank">View Gallery</a></li>
								<?php elseif ( is_single( 'prebuilt' ) ) : ?>
									<li><a href="<?php echo TAGWALL_PREBUILT_GALLERY; ?>" target="_blank">View Gallery</a></li>
									<li><a href="<?php echo home_url( '/details/' ); ?>">View Wall Details</a></li>
									<li><a href="#">View LookBook</a></li>
								<?php endif; ?>
							<?php endif; ?>
						</ul>
					</div>

					<?php if ( get_the_content() ) : ?>
						<div class="content-container col-xs-12 col-sm-7 col-md-5 col-lg-4">
							<?php the_content(); ?>
						</div>
					<?php endif; ?>

					<div class="custom-meta-container col-xs-12 col-sm-12 col-md-4 col-lg-5">
						<?php foreach( $metadata as $meta ) : ?>
							<?php $meta = ( object ) $meta; ?>
							<?php if ( $meta->title ) : ?>
								<div class="custom one">
									<h2><?php echo $meta->title; ?></h2>

									<?php if ( $meta->content ) : ?>
										<p><?php echo $meta->content; ?></p>
									<?php endif; ?>

								</div>
							<?php endif; ?>
						<?php endforeach; ?>

					</div>
				</div>
			</section>
		</main>

	<?php endwhile; ?>
	<?php wp_reset_postdata(); ?>
<?php endif; ?>

<?php get_footer(); ?>
