<?php
/**
* Template Name: Single - Three Column
*
* @package    Studio Tag - Twenty Seventeen
* @subpackage Studio Wall - Twenty Seventeen
* @since      0.1.0
*/
?>

<?php get_header(); ?>

<main class="systems-single">
	<?php if ( have_posts() ) : ?>
		<?php while( have_posts() ) : the_post(); ?>

			<?php
				// Get the featured image from the post.
				$image = studio_tag\Studio_Wall\Twenty_Seventeen\Helpers\studiowall_get_featured_image( $post );

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

			<figure class="featured-image">
				<div style="background-image: url( '<?php echo esc_attr( $image ); ?>' );"></div>
			</figure>

			<section>
				<div class="title-container row">
					<div class="col-xs-12">
						<h1><span>Tagwall</span> <?php the_title(); ?></h1>
					</div>
				</div>

				<div class="specs-container row">
					<div class="view-container col-xs-12 col-sm-5 col-md-3 col-lg-3">
						<ul>
							<li><a href="#">View Gallery</a></li>
							<li><a href="#">View Wall Details</a></li>
							<li><a href="#">View LookBook</a></li>
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

		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
	<?php endif; ?>
</main>

<?php get_footer(); ?>
