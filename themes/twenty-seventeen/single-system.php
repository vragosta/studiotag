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
				// TODO
				$custom_one_title   = json_decode( get_post_meta( $post->ID, 'custom_one_title', true ) );
				$custom_one_content = json_decode( get_post_meta( $post->ID, 'custom_one_content', true ) );
				// $custom_two   = json_decode( get_post_meta( $post->ID, 'custom_two', true ) );
				// $custom_three = json_decode( get_post_meta( $post->ID, 'custom_three', true ) );
				// $custom_four  = json_decode( get_post_meta( $post->ID, 'custom_four', true ) );
				// $custom_five  = json_decode( get_post_meta( $post->ID, 'custom_five', true ) );
				// $custom_six   = json_decode( get_post_meta( $post->ID, 'custom_six', true ) );
				// $custom_seven = json_decode( get_post_meta( $post->ID, 'custom_seven', true ) );
				// $custom_eight = json_decode( get_post_meta( $post->ID, 'custom_eight', true ) );
				// $custom_nine  = json_decode( get_post_meta( $post->ID, 'custom_nine', true ) );
				// $custom_ten   = json_decode( get_post_meta( $post->ID, 'custom_ten', true ) );
			?>

			<figure class="featured-image">
				<div style="background-image: url( '<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' )[0]; ?>' );"></div>
			</figure>

			<section>
				<div class="row">
					<div class="col-xs-12">
						<h1><span>Tagwall</span> Encore</h1>
					</div>
				</div>

				<div class="content-container row">
					<div class="col-xs-12 col-sm-3">
						<ul>
							<li><a href="#">View Gallery</a></li>
							<li><a href="#">View Wall Details</a></li>
							<li><a href="#">View LookBook</a></li>
						</ul>
					</div>
					<div class="col-xs-12 col-sm-4">
						<?php the_content(); ?>
					</div>
					<div class="col-xs-12 col-sm-5">

						<?php if ( $custom_one_title ) : ?>
							<div class="custom one">
								<h2><?php echo $custom_one_title; ?></h2>

								<?php if ( $custom_one_content ) : ?>
									<p><?php echo $custom_one_content; ?></p>
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
