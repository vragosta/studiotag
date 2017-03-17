<?php
/**
* Template Name: Wall Details
*
* @package    Studio Tag - Twenty Seventeen
* @subpackage Studio Wall - Twenty Seventeen
* @since      0.1.0
*/
?>

<?php get_header(); ?>

<main class="two-column-textblock">
	<?php if ( have_posts() ) : ?>
		<?php while( have_posts() ) : the_post(); ?>

			<?php
				// Get the 'hero-image' from the post.
				$hero_image = studio_tag\Studio_Wall\Twenty_Seventeen\Helpers\studiowall_get_hero_image( $post );

				// Get the 'featured' image from the post.
				$image = studio_tag\Studio_Wall\Twenty_Seventeen\Helpers\studiowall_get_featured_image( $post );
			?>

			<figure class="hero-image settings">
				<div style="background-image: url( '<?php echo esc_attr( $hero_image ); ?>' );"></div>
			</figure>

			<figure class="featured-image settings">
				<div style="background-image: url( '<?php echo esc_attr( $image ); ?>' );"></div>
			</figure>

			<div class="row">
				<div class="col-xs-12 col-sm-offset-4 col-sm-8">
					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<h1 style="font-size: 10rem; font-weight: bold; font-family: HelveticaNeueLT Std; margin: 0; color: #221E1F;">Technicals</h1>
							<h1 style="font-size: 10rem; font-weight: bold; font-family: HelveticaNeueLT Std; margin: 0; color: #221E1F;">Applied Details</h1>
							<h1 style="font-size: 10rem; font-weight: bold; font-family: HelveticaNeueLT Std; margin: 0; color: #221E1F;">Doors</h1>
							<h1 style="font-size: 10rem; font-weight: bold; font-family: HelveticaNeueLT Std; margin: 0; color: #221E1F;">Hardware</h1>
							<h1 style="font-size: 10rem; font-weight: bold; font-family: HelveticaNeueLT Std; margin: 0; color: #221E1F;">Glass Film</h1>
							<h1 style="font-size: 10rem; font-weight: bold; font-family: HelveticaNeueLT Std; margin: 0; color: #221E1F;">Finishes</h1>
						</div>
						<div class="col-xs-12 col-sm-6">

						</div>
					</div>
				</div>
			</div>

		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
	<?php endif; ?>
</main>

<?php get_footer(); ?>
