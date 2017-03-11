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

					</div>
				</div>
			</section>

		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
	<?php endif; ?>
</main>

<?php get_footer(); ?>
