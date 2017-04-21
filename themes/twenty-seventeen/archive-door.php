<?php
/**
 * Template: Archive - Doors
 * Template for displaying the doors archive.
 *
 * @package Tag Wall - Twenty Seventeen
 * @since   0.1.0
 * @uses    TODO
 */
?>

<?php get_header(); ?>
<?php $door = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_post_type_object( get_queried_object() ); ?>

<div class="details-container <?php echo esc_attr( $custom->name ); ?> row">
	<div class="col-xs-12 col-sm-6">
		<h1><?php post_type_archive_title(); ?></h1>
	</div>
	<div class="col-xs-12 col-sm-6">
		<ul>
			<?php foreach( $door->all_terms as $term ) : ?>
				<li><a href="<?php echo esc_attr( '#' . $term->slug ); ?>"><?php echo esc_html( $term->name ); ?></a></li>
			<?php endforeach; ?>
			<li><a href="<?php echo home_url( '/details/' ); ?>" class="back">Go Back to Wall Details</a></li>
		</ul>
	</div>
</div>

<div class="archive-container <?php echo esc_attr( $door->name ); ?>">
	<div class="row">
		<?php $count = 0; ?>
		<?php foreach( $door->terms as $term ) : ?>
			<?php $term_image = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_term_meta( $term->term_id, 'featured_image_url' ); ?>

			<?php if ( $term_image ) : ?>
				<div class="col-xs-12 col-sm-6">
					<a name="<?php echo esc_attr( $term->slug ); ?>"></a>

					<figure class="featured-image">
						<div style="background-image: url( '<?php echo esc_attr( $term_image ); ?>' );"></div>
					</figure>

					<h1><?php echo esc_html( $term->name ); ?></h1>
				</div>
			<?php endif; ?>

			<?php if ( ++$count % 2 == 0 ) : ?>
				</div>
				<hr />
				<div class="row">
			<?php endif; ?>

		<?php endforeach; ?>
	</div>

	<?php foreach( $door->child_terms as $term ) : ?>
		<?php $count          = 1; ?>
		<?php $taxonomy_query = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_post_type_term_query( $door->name, $term ); ?>

		<?php if ( $taxonomy_query->have_posts() ) : ?>
			<section class="archive-item <?php echo esc_attr( $term->slug ); ?>">
				<div class="title">
					<h1><a name="<?php echo esc_attr( $term->slug ); ?>"><?php echo esc_html( $term->name ); ?></a></h1>
				</div>

				<hr />

				<div class="taxonomies">
					<div class="row">
						<?php while ( $taxonomy_query->have_posts() ) : $taxonomy_query->the_post(); ?>
							<?php $image = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_featured_image( $post ); ?>

							<?php if ( $image ) : ?>
								<div class="taxonomy-item col-xs-12 col-sm-4">
									<div class="featured-image-circle">
										<img src="<?php echo esc_attr( $image ); ?>" />
									</div>

									<h1><?php echo esc_html( $post->post_title ); ?></h1>
								</div>
							<?php endif; ?>

							<?php if ( $count++ % 3 == 0 ) : ?>
								</div>
								<hr />
								<div class="row">
							<?php endif; ?>

						<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>

						<div class="taxonomy-item col-xs-12 col-sm-4">
							<div class="featured-image-circle custom"></div>
							<h1>Custom</h1>
						</div>

					</div>
					<?php if ( $taxonomy_query->post_count % 3 !== 0 ) : ?>
						<hr />
					<?php endif; ?>
				</div>
			</section>
		<?php endif; ?>

	<?php endforeach; ?>
</div>

<?php get_footer(); ?>
