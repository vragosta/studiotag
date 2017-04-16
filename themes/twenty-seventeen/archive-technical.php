<?php
/**
 * Template: Archive - Technicals
 * Template for displaying the technicals archive.
 *
 * @package Tag Wall - Twenty Seventeen
 * @since   0.1.0
 * @uses    TODO
 */
?>

<?php get_header(); ?>
<?php $technical = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_post_type_object( get_queried_object() ); ?>

<div class="details-container <?php echo esc_attr( $technical->name ); ?> row">
	<div class="col-xs-12 col-sm-6">
		<h1><?php post_type_archive_title(); ?></h1>
	</div>
	<div class="col-xs-12 col-sm-6">
		<ul>
			<?php if ( $technical->query && $technical->query->have_posts() ) : ?>
				<?php while( $technical->query->have_posts() ) : $technical->query->the_post(); ?>
					<li><a href="<?php echo esc_attr( '#' . $post->post_name ); ?>"><?php echo esc_html( $post->post_title ); ?></a></li>
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
			<?php endif; ?>
			<li><a href="<?php echo home_url( '/details/' ); ?>" class="back">Go Back to Wall Details</a></li>
		</ul>
	</div>
</div>

<div class="archive-container <?php echo esc_attr( $technical->name ); ?>">
	<?php if ( $technical->query->have_posts() ) : ?>
		<?php while( $technical->query->have_posts() ) : $technical->query->the_post(); ?>
			<?php
				$image = [
					Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_blueprint_image( $post, 'one' ),
					Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_blueprint_image( $post, 'two' ),
					Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_blueprint_image( $post, 'three' )
				];
			?>

			<?php if ( $image ) : ?>
				<section class="archive-item <?php echo esc_attr( $post->post_name ); ?>">
					<div class="title">
						<h1><a name="<?php echo esc_attr( $post->post_name ); ?>"><?php echo esc_html( $post->post_title ); ?></a></h1>
					</div>

					<hr />

					<div class="blueprint-container">
						<?php foreach( $image as $image_url ) : ?>
							<?php if ( $image_url ) : ?>
								<figure class="featured-image settings">
									<div style="background-image: url( '<?php echo esc_attr( $image_url ); ?>' );"></div>
								</figure>
							<?php endif; ?>
						<?php endforeach; ?>
					</div>
				</section>
			<?php endif; ?>

		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>

		<div class="arrow top">
			<a href="#"><i class="ion ion-ios-arrow-up"></i></a>
		</div>
	<?php endif; ?>

</div>

<?php get_footer(); ?>
