<?php
	// TODO Make this a page template.

	get_header();

	// TODO
	$count = 0;

	// TODO
	$args = array(
		'post_type' => array( 'system' ),
		'order'     => 'ASC'
	);

	// TODO
	$query = new WP_Query( $args );

?>

	<main>

		<!-- NOTE: will replace with slider, not going to remove inline styles or image for now -->
		<figure style="padding-bottom: 68%; position: relative;">
			<div style="background-image: url( '<?php echo STUDIO_WALL_TEMPLATE_URL . '/assets/images/vigoss.jpg'; ?>' ); background-size: contain; position: absolute; top: 0; bottom: 0; left: 0; right: 0;"></div>
		</figure>
		<!-- END -->

		<section class="systems-logo">
			<figure class="featured-image">
				<div style="background-image: url( '<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' )[0]; ?>' );"></div>
			</figure>
		</section>

		<section class="systems">

			<?php if ( $query->have_posts() ) : ?>
				<?php while ( $query->have_posts() ) : $query->the_post(); ?>

					<!-- TODO Create custom image size. -->
					<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' )[0]; ?>

					<!-- TODO -->
					<?php $excerpt = wp_trim_words( $temp_post->post_excerpt, 35, '...' ); ?>

					<!-- TODO -->
					<?php $mobile_excerpt = wp_trim_words( $temp_post->post_excerpt, 25, '...' ); ?>

					<!-- TODO -->
					<?php if ( $count == 0 ) : ?>

						<div class="row">
							<div class="no-padding col-xs-offset-6 col-xs-12 col-sm-offset-6 col-sm-6">
								<figure class="featured-image right">
									<div style="background-image: url( '<?php echo esc_attr( $image ); ?>' );"></div>
								</figure>
							</div>
						</div>

					<!-- TODO -->
					<?php elseif ( $count % 2 == 1 ) : ?>

						<div class="row">
							<div class="no-padding col-xs-12 col-sm-6">
								<figure class="featured-image left">
									<div style="background-image: url( '<?php echo esc_attr( $image ); ?>' );"></div>
								</figure>
							</div>
							<div class="info right col-xs-12 col-sm-6">
								<h3><span>Tagwall</span> <?php echo esc_html( $temp_post->post_title ); ?></h3>
								<p><?php echo esc_html( $excerpt ); ?></p>
								<p class="mobile"><?php echo esc_html( $mobile_excerpt ); ?></p>
							</div>
						</div>

					<!-- TODO -->
					<?php elseif ( $count % 2 == 0 ) : ?>

						<div class="row">
							<div class="info left col-xs-12 col-sm-6">
								<h3><span>Tagwall</span> <?php echo esc_html( $temp_post->post_title ); ?></h3>
								<p><?php echo esc_html( $excerpt ); ?></p>
								<p class="mobile"><?php echo esc_html( $mobile_excerpt ); ?></p>
							</div>
							<div class="no-padding col-xs-12 col-sm-6">
								<figure class="featured-image right">
									<div style="background-image: url( '<?php echo esc_attr( $image ); ?>' );"></div>
								</figure>
							</div>
						</div>
					<?php endif; ?>

					<!-- TODO -->
					<?php $temp_post = $post; ?>
					<?php $count++; ?>

				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
			<?php endif; ?>

			<!-- TODO -->
			<div class="row">
				<div class="info left col-xs-12 col-sm-6">
					<h3><span>Tagwall</span> <?php echo esc_html( $temp_post->post_title ); ?></h3>
					<p><?php echo esc_html( $excerpt ); ?></p>
					<p class="mobile"><?php echo esc_html( $mobile_excerpt ); ?></p>
				</div>
				<div class="no-padding col-xs-12 col-sm-6">
					<figure class="featured-image right not-visible">
						<div style="background-image: url( '<?php echo esc_attr( $image ); ?>' );"></div>
					</figure>
				</div>
			</div>

		</section>

	</main>

<?php get_footer(); ?>
