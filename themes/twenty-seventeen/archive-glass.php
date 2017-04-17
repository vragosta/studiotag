<?php
/**
 * Template: Archive - Glass
 * Template for displaying the glass archive.
 *
 * @package Tag Wall - Twenty Seventeen
 * @since   0.1.0
 * @uses    TODO
 */
?>

<?php get_header(); ?>
<?php $glass = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_post_type_object( get_queried_object() ); ?>

<div class="details-container <?php echo esc_attr( $glass->name ); ?> row">
	<div class="col-xs-12 col-sm-6">
		<h1><?php post_type_archive_title(); ?></h1>
	</div>
	<div class="col-xs-12 col-sm-6">
		<ul>
			<?php foreach( $glass->all_terms as $term ) : ?>
				<li><a href="<?php echo esc_attr( '#' . $term->slug ); ?>"><?php echo esc_html( $term->name ); ?></a></li>
			<?php endforeach; ?>
			<li><a href="<?php echo home_url( '/details/' ); ?>" class="back">Go Back to Wall Details</a></li>
		</ul>
	</div>
</div>

<div class="archive-container <?php echo esc_attr( $glass->name ); ?>">
	<?php foreach( $glass->terms as $term ) : ?>
			<?php if ( $term->slug === 'architectural-glass' ) : ?>
				<?php $count          = 1; ?>
				<?php $taxonomy_query = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_post_type_term_query( $glass->name, $term ); ?>

				<?php if ( $taxonomy_query->have_posts() ) : ?>
					<section class="archive-item <?php echo esc_attr( $term->slug ); ?>">
						<div class="title">
							<h1><a name="<?php echo esc_attr( $term->slug ); ?>"><?php echo esc_html( $term->name ); ?></a></h1>
						</div>

						<hr />

						<div class="row indent">
							<div class="col-xs-12 col-sm-6">
								<?php echo term_description( $term->term_id ); ?>
							</div>
						</div>

						<div class="taxonomies row">
							<?php while ( $taxonomy_query->have_posts() ) : $taxonomy_query->the_post(); ?>
								<?php $image    = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_featured_image( $post ); ?>
								<?php $glass_id = get_post_meta( $post->ID, 'glass_id', true ); ?>

								<?php if ( $image ) : ?>
									<div class="taxonomy-item col-xs-12 col-sm-4">
										<div class="featured-image-circle">
											<img src="<?php echo esc_attr( $image ); ?>" />
										</div>

										<h1><span><?php echo esc_html( $post->post_title ); ?></span><span><?php echo ( $glass_id ) ? ' - ' . esc_html( $glass_id ) : ''; ?></span></h1>
									</div>
								<?php endif; ?>

								<?php if ( $count++ % 3 == 0 ) : ?>
									</div>
									<hr />
									<div class="row">
								<?php endif; ?>

							<?php endwhile; ?>
							<?php wp_reset_postdata(); ?>
						</div>
					</section>
				<?php endif; ?>

			<?php elseif ( $term->slug === 'decorative-glass' ) : ?>
				<?php $count                  = 1; ?>
				<?php $children               = get_term_children( $term->term_id, 'glass_type' ); ?>
				<?php $interlayer_description = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_term_meta( $term->term_id, 'interlayer_description' ); ?>
				<?php $glass_combination      = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_term_meta( $term->term_id, 'glass_combination' ); ?>
				<?php $max_size               = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_term_meta( $term->term_id, 'max_size' ); ?>
				<?php $glass_thickness        = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_term_meta( $term->term_id, 'glass_thickness' ); ?>
				<?php $glass_thickness        = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_term_meta( $term->term_id, 'glass_thickness' ); ?>

				<section class="archive-item <?php echo esc_attr( $term->slug ); ?>">
					<div class="title">
						<h1><a name="<?php echo esc_attr( $term->slug ); ?>"><?php echo esc_html( $term->name ); ?></a></h1>
					</div>

					<hr />

					<div class="row indent">
						<?php if ( $children ) : ?>
							<div class="row child">
								<?php foreach( $children as $child ) : ?>
									<?php $child = get_term_by( 'id', $child, 'glass_type' ); ?>

									<div class="col-xs-12 col-sm-6">
										<h2><?php echo esc_html( $child->name ); ?></h2>
										<?php echo term_description( $child->term_id ); ?>
									</div>

									<?php if ( $count++ % 2 == 0 ) : ?>
										</div>
										<hr />
										<div class="row child">
									<?php endif; ?>
								<?php endforeach; ?>
							</div>

							<hr />
						<?php endif; ?>

						<?php if ( $interlayer_description || $glass_combination ) : ?>
							<div class="row child">
								<?php if ( $interlayer_description ) : ?>
									<div class="col-xs-12 col-sm-6">
										<h2>Interlayer Description</h2>
										<p><?php echo $interlayer_description; ?></p>
									</div>
								<?php endif; ?>

								<?php if ( $glass_combination ) : ?>
									<div class="col-xs-12 col-sm-6">
										<h2>Glass Combination</h2>
										<p><?php echo $glass_combination; ?></p>
									</div>
								<?php endif; ?>
							</div>

							<hr />
						<?php endif; ?>

						<?php if ( $max_size || $glass_thickness ) : ?>
							<div class="row child">
								<?php if ( $max_size ) : ?>
									<div class="col-xs-12 col-sm-6">
										<h2>Max Size of Glass Panel</h2>
										<p><?php echo $max_size; ?></p>
									</div>
								<?php endif; ?>

								<?php if ( $glass_thickness ) : ?>
									<div class="col-xs-12 col-sm-6">
										<h2>Glass Thickness</h2>
										<p><?php echo $glass_thickness; ?></p>
									</div>
								<?php endif; ?>
							</div>

							<hr />
						<?php endif; ?>

						<?php if ( $glass_laminated ) : ?>
							<div class="row child">
								<div class="col-xs-12 col-sm-6">
									<h2>Glass Laminated</h2>
									<p><?php echo $glass_laminated; ?></p>
								</div>
							</div>
						<?php endif; ?>

					</div>

					<?php $count = 1; ?>
					<?php $children = get_term_children( $term->term_id, 'glass_type' ); ?>
					<?php foreach( $children as $child ) : ?>
						<?php $child = get_term_by( 'id', $child, 'glass_type' ); ?>
						<?php
							$glass_type = new WP_Query( [
								'post_type' => 'glass',
								'order'     => 'ASC',
								'tax_query' => [ [
									'taxonomy' => 'glass_type',
									'field'    => 'id',
									'terms'    => $child->term_id
								] ]
							] );
						?>

						<?php if ( $glass_type->have_posts() ) : ?>
							<div class="taxonomies row">
								<div class="title">
									<h1><a name="<?php echo esc_attr( $child->slug ); ?>"><?php echo esc_html( $child->name ); ?></a></h1>
								</div>

								<hr />
								<?php while ( $glass_type->have_posts() ) : $glass_type->the_post(); ?>
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
							</div>
						<?php endif; ?>
					<?php endforeach; ?>
				</section>
			<?php endif; ?>

	<?php endforeach; ?>
</div>

<?php get_footer(); ?>
