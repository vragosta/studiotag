<?php
/**
 * Template: Archive - Hardware
 * Template for displaying the hardware archive.
 *
 * @package Tag Wall - Twenty Seventeen
 * @since   0.1.0
 * @uses    TODO
 */
?>

<?php get_header(); ?>
<?php $hardware = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_post_type_object( get_queried_object() ); ?>

<div class="details-container <?php echo esc_attr( $hardware->name ); ?> row">
	<div class="col-xs-12 col-sm-6">
		<h1><?php post_type_archive_title(); ?></h1>
	</div>
	<div class="col-xs-12 col-sm-6">
		<ul>
			<?php foreach( $hardware->terms as $term ) : ?>
				<li><a href="<?php echo esc_attr( '#' . $term->slug ); ?>"><?php echo esc_html( $term->name ); ?></a></li>
			<?php endforeach; ?>
			<li><a href="<?php echo home_url( '/details/' ); ?>" class="back">Go Back to Wall Details</a></li>
		</ul>
	</div>
</div>

<div class="archive-container <?php echo esc_attr( $hardware->name ); ?>">
	<?php foreach( $hardware->terms as $term ) : ?>

		<section class="archive-item <?php echo esc_attr( $term->slug ); ?>">
			<div class="title">
				<h1><a name="<?php echo esc_attr( $term->slug ); ?>"><?php echo esc_html( $term->name ); ?></a></h1>
			</div>

			<hr />

			<?php if ( $term->slug === 'electronic-ladder-pull' ) : ?>
				<?php
					$electronic_ladder_pulls = new WP_Query( [
						'post_type' => 'hardware',
						'order'     => 'ASC',
						'tax_query' => [ [
							'taxonomy' => 'hardware_type',
							'field'    => 'slug',
							'terms'    => 'electronic-ladder-pull'
						] ]
					] );
				?>

				<?php if ( $electronic_ladder_pulls->have_posts() ) : ?>
					<?php $term_image = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_term_meta( $term->term_id, 'featured_image_url' ); ?>

					<div class="content row">
						<?php while( $electronic_ladder_pulls->have_posts() ) : $electronic_ladder_pulls->the_post(); ?>
							<?php $image = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_featured_image( $post->ID ); ?>

							<?php if ( $image ) : ?>
								<div class="col-xs-12 col-sm-4">
									<figure class="featured-image settings">
										<div style="background-image: url( '<?php echo esc_attr( $image ); ?>' );"></div>
									</figure>
								</div>
							<?php endif; ?>

						<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>

						<?php if ( $term_image ) : ?>
							<div class="col-xs-12 col-sm-4">
								<figure class="featured-image settings">
									<div style="background-image: url( '<?php echo esc_attr( $term_image ); ?>' );"></div>
								</figure>
							</div>
						<?php endif; ?>

						<div class="col-xs-12 col-sm-4 segment">
							<h2><?php echo term_description( $term->term_id ); ?></h2>
						</div>
					</div>

					<hr />
				<?php endif; ?>

			<?php elseif ( $term->slug === 'klo-ladder-pull' ) : ?>
				<?php $count = 1; ?>
				<?php $term_image = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_term_meta( $term->term_id, 'featured_image_url' ); ?>
				<?php
					$klo_ladder_pulls = new WP_Query( [
						'post_type' => 'hardware',
						'order'     => 'ASC',
						'tax_query' => [ [
							'taxonomy' => 'hardware_type',
							'field'    => 'slug',
							'terms'    => 'klo-ladder-pull'
						] ]
					] );
				?>

				<?php if ( $klo_ladder_pulls->have_posts() ) : ?>
					<div class="content row">
						<?php while( $klo_ladder_pulls->have_posts() ) : $klo_ladder_pulls->the_post(); ?>
							<?php $image = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_featured_image( $post->ID ); ?>

							<?php if ( $image ) : ?>
								<div class="col-xs-12 col-sm-4">
									<figure class="featured-image settings">
										<div style="background-image: url( '<?php echo esc_attr( $image ); ?>' );"></div>
									</figure>
								</div>
							<?php endif; ?>

								<?php if ( $count++ % 3 == 0 ) : ?>
									</div>
									<hr />
									<div class="content row">
								<?php endif; ?>

						<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>

						<?php if ( $term_image ) : ?>
							<div class="col-xs-12 col-sm-4">
								<figure class="featured-image settings">
									<div style="background-image: url( '<?php echo esc_attr( $term_image ); ?>' );"></div>
								</figure>
							</div>
						<?php endif; ?>
					</div>

					<?php if ( $klo_ladder_pulls->post_count % 3 !== 0 ) : ?>
						<hr />
					<?php endif; ?>

				<?php endif; ?>

			<?php elseif ( $term->slug === 'hgu-view' ) : ?>
				<?php
					$hgu_views = new WP_Query( [
						'post_type' => 'hardware',
						'order'     => 'ASC',
						'tax_query' => [ [
							'taxonomy' => 'hardware_type',
							'field'    => 'slug',
							'terms'    => 'hgu-view'
						] ]
					] );
				?>

				<?php if ( $hgu_views->have_posts() ) : ?>
					<div class="content row">
						<?php while( $hgu_views->have_posts() ) : $hgu_views->the_post(); ?>
							<?php
								$image = [
									'Front' => get_post_meta( $post->ID, 'detailed_image_front', true ),
									'Side'  => get_post_meta( $post->ID, 'detailed_image_side', true ),
									'Back'  => get_post_meta( $post->ID, 'detailed_image_back', true )
								];
							?>

							<?php foreach( $image as $key => $image_url ) : ?>
								<?php if ( $image_url ) : ?>
									<div class="col-xs-12 col-sm-4">
										<figure class="featured-image settings">
											<div style="background-image: url( '<?php echo esc_attr( $image_url ); ?>' );"></div>
										</figure>

										<div class="sub-title">
											<h2><?php echo esc_html( $key ); ?></h2>
										</div>
									</div>
								<?php endif; ?>
							<?php endforeach; ?>

						<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>
					</div>

					<hr />
				<?php endif; ?>

			<?php elseif ( $term->slug === 'hgu-lever' ) : ?>
				<?php $count = 1; ?>
				<?php
					$hgu_levers = new WP_Query( [
						'post_type' => 'hardware',
						'order'     => 'ASC',
						'posts_per_page' => -1,
						'tax_query' => [ [
							'taxonomy' => 'hardware_type',
							'field'    => 'slug',
							'terms'    => 'hgu-lever'
						] ]
					] );
				?>

				<?php if ( $hgu_levers->have_posts() ) : ?>
					<div class="content row">
						<?php while( $hgu_levers->have_posts() ) : $hgu_levers->the_post();
							$image = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_featured_image( $post ); ?>

							<?php if ( $image ) : ?>
								<div class="col-xs-12 col-sm-4">
									<figure class="featured-image settings lever">
										<div style="background-image: url( '<?php echo esc_attr( $image ); ?>' );"></div>
									</figure>

									<div class="sub-title">
										<h2><?php echo esc_html( $post->post_title ); ?></h2>
									</div>
								</div>
							<?php endif; ?>

							<?php if ( $count++ % 3 == 0 ) : ?>
								</div>
								<hr />
								<div class="content row">
							<?php endif; ?>

						<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>
					</div>

					<?php if ( $hgu_levers->post_count % 3 !== 0 ) : ?>
						<hr />
					<?php endif; ?>
					
				<?php endif; ?>

			<?php elseif ( $term->slug === 'hgu-finish' ) : ?>
				<?php
					$hgu_default_finishes = new WP_Query( [
						'post_type' => 'hardware',
						'order'     => 'ASC',
						'tax_query' => [
							'relation' => 'AND',
							[
								'taxonomy' => 'hardware_type',
								'field'    => 'slug',
								'terms'    => [ 'ansi-bhma-629-usd32', 'ansi-bhma-630-usd32d' ]
							],
							[
								'taxonomy' => 'hardware_type',
								'field'    => 'slug',
								'terms'    => [ 'wenge-essence', 'ash-essence', 'mahogany-essence' ],
								'operator' => 'NOT IN'
							]
						]
					] );

					$wenge_essence_finishes = new WP_Query( [
						'post_type' => 'hardware',
						'order'     => 'ASC',
						'tax_query' => [ [
							'taxonomy' => 'hardware_type',
							'field'    => 'slug',
							'terms'    => 'wenge-essence'
						] ]
					] );

					$ash_essence_finishes = new WP_Query( [
						'post_type' => 'hardware',
						'order'     => 'ASC',
						'tax_query' => [ [
							'taxonomy' => 'hardware_type',
							'field'    => 'slug',
							'terms'    => 'ash-essence'
						] ]
					] );

					$mahogany_essence_finishes = new WP_Query( [
						'post_type' => 'hardware',
						'order'     => 'ASC',
						'tax_query' => [ [
							'taxonomy' => 'hardware_type',
							'field'    => 'slug',
							'terms'    => 'mahogany-essence'
						] ]
					] );
				?>

				<?php if ( $hgu_default_finishes->have_posts() ) : ?>
					<div class="content row">
						<?php while( $hgu_default_finishes->have_posts() ) : $hgu_default_finishes->the_post(); ?>
							<?php $polish = get_post_meta( $post->ID, 'polish', true ); ?>
							<?php $ansi   = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_search_terms( $post->ID, 'hardware_type', [ 'ansi-bhma-629-usd32', 'ansi-bhma-630-usd32d' ] ); ?>

							<div class="finish-item col-xs-12 col-sm-4">
								<?php if ( $polish ) : ?>
									<h2><?php echo esc_html( $polish ); ?></h2>
								<?php endif; ?>
								<?php if ( $ansi ) : ?>
									<h2><?php echo esc_html( $ansi->name ); ?></h2>
								<?php endif; ?>
								<h2><?php echo esc_html( $post->post_title ); ?></h2>
							</div>

						<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>

					</div>
					<hr />
				<?php endif; ?>

				<?php if ( $wenge_essence_finishes->have_posts() ) : ?>
					<div class="content row">
						<?php while( $wenge_essence_finishes->have_posts() ) : $wenge_essence_finishes->the_post(); ?>
							<?php $image         = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_term_meta( $wenge_essence->term_id, 'featured_image_url' ); ?>
							<?php $polish        = get_post_meta( $post->ID, 'polish', true ); ?>
							<?php $ansi          = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_search_terms( $post->ID, 'hardware_type', [ 'ansi-bhma-629-usd32', 'ansi-bhma-630-usd32d' ] ); ?>
							<?php $wenge_essence = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_search_terms( $post->ID, 'hardware_type', 'wenge-essence' ); ?>

							<div class="finish-item col-xs-12 col-sm-4">
								<?php if ( $polish ) : ?>
									<h2><?php echo esc_html( $polish ); ?></h2>
								<?php endif; ?>
								<?php if ( $wenge_essence ) : ?>
									<h2>w/ <?php echo esc_html( $wenge_essence->name ); ?></h2>
								<?php endif; ?>
								<?php if ( $ansi ) : ?>
									<h2><?php echo esc_html( $ansi->name ); ?></h2>
								<?php endif; ?>
								<h2><?php echo esc_html( $post->post_title ); ?></h2>
							</div>

						<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>

						<div class="finish-item col-xs-12 col-sm-4">
							<div class="featured-image-circle">
								<img src="<?php echo esc_attr( $image ); ?>" />
							</div>
						</div>

					</div>
					<hr />
				<?php endif; ?>

				<?php if ( $ash_essence_finishes->have_posts() ) : ?>
					<div class="content row">
						<?php while( $ash_essence_finishes->have_posts() ) : $ash_essence_finishes->the_post(); ?>
							<?php $image       = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_term_meta( $ash_essence->term_id, 'featured_image_url' ); ?>
							<?php $polish      = get_post_meta( $post->ID, 'polish', true ); ?>
							<?php $ansi        = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_search_terms( $post->ID, 'hardware_type', [ 'ansi-bhma-629-usd32', 'ansi-bhma-630-usd32d' ] ); ?>
							<?php $ash_essence = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_search_terms( $post->ID, 'hardware_type', 'ash-essence' ); ?>

							<div class="finish-item col-xs-12 col-sm-4">
								<?php if ( $polish ) : ?>
									<h2><?php echo esc_html( $polish ); ?></h2>
								<?php endif; ?>
								<?php if ( $ash_essence ) : ?>
									<h2>w/ <?php echo esc_html( $ash_essence->name ); ?></h2>
								<?php endif; ?>
								<?php if ( $ansi ) : ?>
									<h2><?php echo esc_html( $ansi->name ); ?></h2>
								<?php endif; ?>
								<h2><?php echo esc_html( $post->post_title ); ?></h2>
							</div>

						<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>

						<div class="finish-item col-xs-12 col-sm-4">
							<div class="featured-image-circle">
								<img src="<?php echo esc_attr( $image ); ?>" />
							</div>
						</div>

					</div>
					<hr />
				<?php endif; ?>

				<?php if ( $mahogany_essence_finishes->have_posts() ) : ?>
					<div class="content row">
						<?php while( $mahogany_essence_finishes->have_posts() ) : $mahogany_essence_finishes->the_post(); ?>
							<?php $image            = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_term_meta( $mahogany_essence->term_id, 'featured_image_url' ); ?>
							<?php $polish           = get_post_meta( $post->ID, 'polish', true ); ?>
							<?php $ansi             = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_search_terms( $post->ID, 'hardware_type', [ 'ansi-bhma-629-usd32', 'ansi-bhma-630-usd32d' ] ); ?>
							<?php $mahogany_essence = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_search_terms( $post->ID, 'hardware_type', 'mahogany-essence' ); ?>

							<div class="finish-item col-xs-12 col-sm-4">
								<?php if ( $polish ) : ?>
									<h2><?php echo esc_html( $polish ); ?></h2>
								<?php endif;?>
								<?php if ( $mahogany_essence ) : ?>
									<h2>w/ <?php echo esc_html( $mahogany_essence->name ); ?></h2>
								<?php endif; ?>
								<?php if ( $ansi ) : ?>
									<h2><?php echo esc_html( $ansi->name ); ?></h2>
								<?php endif; ?>
								<h2><?php echo esc_html( $post->post_title ); ?></h2>
							</div>

						<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>

						<div class="finish-item col-xs-12 col-sm-4">
							<div class="featured-image-circle">
								<img src="<?php echo esc_attr( $image ); ?>" />
							</div>
						</div>

					</div>
					<hr />
				<?php endif; ?>
			<?php endif; ?>
		</section>

	<?php endforeach; ?>
</div>

<?php get_footer(); ?>
