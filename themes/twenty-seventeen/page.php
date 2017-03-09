<?php
	// TODO

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
		<!-- NOTE: will replace with slider -->
		<figure style="padding-bottom: 68%; position: relative;">
			<div style="background-image: url( '<?php echo STUDIO_WALL_TEMPLATE_URL . '/assets/images/vigoss.jpg'; ?>' ); background-size: contain; position: absolute; top: 0; bottom: 0; left: 0; right: 0;"></div>
		</figure>
		<!-- END -->

		<section style="margin: 2rem 1rem -8rem;">
			<figure style="padding-bottom: 40%; position: relative; width: 85%;">
				<div style="background-image: url( '<?php echo STUDIO_WALL_TEMPLATE_URL . '/assets/images/wallsystems.png'; ?>' ); background-size: contain; position: absolute; top: 0; bottom: 0; left: 0; right: 0;"></div>
			</figure>
		</section>

		<section style="margin: 0 0 40rem 0;">

			<?php if ( $query->have_posts() ) : ?>
				<?php while ( $query->have_posts() ) : $query->the_post(); ?>

					<!-- TODO Create custom image size. -->
					<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' )[0]; ?>

				<?php //elseif ( ( $query->current_post ) == ( $query->post_count ) ) : ?>
					<!-- <div class="row">
						<div class="col-xs-12 col-sm-6" style="padding: 1rem 4rem 1rem 14rem;">
							<h3 style="font-size: 3.5rem; font-weight: 600; margin-bottom: 10rem;"><span style="font-family: HelveticaNeueLT Std; color: #A3A5A8;">Tagwall</span> <?php echo esc_html( $temp_post->post_title ); ?></h3>
							<p style="font-family: HelveticaNeueLT Std; color: #A3A5A8; font-size: 2.8rem; line-height: 1.3;"><?php echo esc_html( $temp_post->post_excerpt ); ?></p>
						</div>
					</div> -->

					<?php if ( $count == 0 ) : ?>
						<div class="row">
							<div class="col-xs-12 col-sm-offset-6 col-sm-6" style="padding: 0;">
								<figure style="padding-bottom: 70%; position: relative;">
									<div style="background-image: url( '<?php echo esc_attr( $image ); ?>' ); background-size: cover; position: absolute; top: 0; bottom: 0; left: 0; right: 10rem;"></div>
								</figure>
							</div>
						</div>
					<?php elseif ( $count % 2 == 1 ) : ?>
						<div class="row">
							<div class="col-xs-12 col-sm-6" style="padding: 0;">
								<figure style="padding-bottom: 70%; position: relative;" style="padding: 0;">
									<div style="background-image: url( '<?php echo esc_attr( $image ); ?>' ); background-size: cover; position: absolute; top: 0; bottom: 0; left: 10rem; right: 0;"></div>
								</figure>
							</div>
							<div class="col-xs-12 col-sm-6" style="padding: 1rem 10rem 1rem 4rem;">
								<h3 style="font-size: 3.5rem; font-weight: 600; margin-bottom: 10rem;"><span style="font-family: HelveticaNeueLT Std; color: #A3A5A8;">Tagwall</span> <?php echo esc_html( $temp_post->post_title ); ?></h3>
								<p style="font-family: HelveticaNeueLT Std; color: #A3A5A8; font-size: 2.8rem; line-height: 1.3;"><?php echo esc_html( $temp_post->post_excerpt ); ?></p>
							</div>
						</div>
					<?php elseif ( $count % 2 == 0 ) : ?>
						<div class="row">
							<div class="col-xs-12 col-sm-6" style="padding: 1rem 4rem 1rem 14rem;">
								<h3 style="font-size: 3.5rem; font-weight: 600; margin-bottom: 10rem;"><span style="font-family: HelveticaNeueLT Std; color: #A3A5A8;">Tagwall</span> <?php echo esc_html( $temp_post->post_title ); ?></h3>
								<p style="font-family: HelveticaNeueLT Std; color: #A3A5A8; font-size: 2.8rem; line-height: 1.3;"><?php echo esc_html( $temp_post->post_excerpt ); ?></p>
							</div>
							<div class="col-xs-12 col-sm-6" style="padding: 0;">
								<figure style="padding-bottom: 70%; position: relative;">
									<div style="background-image: url( '<?php echo esc_attr( $image ); ?>' ); background-size: cover; position: absolute; top: 0; bottom: 0; left: 0; right: 10rem;"></div>
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

			<!-- <div class="row">
				<div class="col-xs-12 col-sm-offset-6 col-sm-6" style="padding: 0;">
					<figure style="padding-bottom: 70%; position: relative;">
						<div style="background-image: url( '<?php echo STUDIO_WALL_TEMPLATE_URL . '/assets/images/encore.jpg'; ?>' ); background-size: cover; position: absolute; top: 0; bottom: 0; left: 0; right: 10rem;"></div>
					</figure>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12 col-sm-6" style="padding: 0;">
					<figure style="padding-bottom: 70%; position: relative;" style="padding: 0;">
						<div style="background-image: url( '<?php echo STUDIO_WALL_TEMPLATE_URL . '/assets/images/slimline.jpg'; ?>' ); background-size: cover; position: absolute; top: 0; bottom: 0; left: 10rem; right: 0;"></div>
					</figure>
				</div>
				<div class="col-xs-12 col-sm-6" style="padding: 1rem 10rem 1rem 4rem;">
					<h3 style="font-size: 3.5rem; font-weight: 600; margin-bottom: 10rem;"><span style="font-family: HelveticaNeueLT Std; color: #A3A5A8;">Tagwall</span> Encore</h3>
					<p style="font-family: HelveticaNeueLT Std; color: #A3A5A8; font-size: 2.8rem; line-height: 1.3;">Comfortable conversation or quiet contemplation? Find furniture to create a room that will be the epicenter of your home.</p>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12 col-sm-6" style="padding: 1rem 4rem 1rem 14rem;">
					<h3 style="font-size: 3.5rem; font-weight: 600; margin-bottom: 10rem;"><span style="font-family: HelveticaNeueLT Std; color: #A3A5A8;">Tagwall</span> Slimline</h3>
					<p style="font-family: HelveticaNeueLT Std; color: #A3A5A8; font-size: 2.8rem; line-height: 1.3;">Comfortable conversation or quiet contemplation? Find furniture to create a room that will be the epicenter of your home.</p>
				</div>
				<div class="col-xs-12 col-sm-6" style="padding: 0;">
					<figure style="padding-bottom: 70%; position: relative;">
						<div style="background-image: url( '<?php echo STUDIO_WALL_TEMPLATE_URL . '/assets/images/ion.jpg'; ?>' ); background-size: cover; position: absolute; top: 0; bottom: 0; left: 0; right: 10rem;"></div>
					</figure>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12 col-sm-6" style="padding: 0;">
					<figure style="padding-bottom: 70%; position: relative;" style="padding: 0;">
						<div style="background-image: url( '<?php echo STUDIO_WALL_TEMPLATE_URL . '/assets/images/industrialsash.jpg'; ?>' ); background-size: cover; position: absolute; top: 0; bottom: 0; left: 10rem; right: 0;"></div>
					</figure>
				</div>
				<div class="col-xs-12 col-sm-6" style="padding: 1rem 10rem 1rem 4rem;">
					<h3 style="font-size: 3.5rem; font-weight: 600; margin-bottom: 10rem;"><span style="font-family: HelveticaNeueLT Std; color: #A3A5A8;">Tagwall</span> Ion</h3>
					<p style="font-family: HelveticaNeueLT Std; color: #A3A5A8; font-size: 2.8rem; line-height: 1.3;">Comfortable conversation or quiet contemplation? Find furniture to create a room that will be the epicenter of your home.</p>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12 col-sm-6" style="padding: 1rem 4rem 1rem 14rem;">
					<h3 style="font-size: 3.5rem; font-weight: 600; margin-bottom: 10rem;"><span style="font-family: HelveticaNeueLT Std; color: #A3A5A8;">Tagwall</span> Industrial Sash</h3>
					<p style="font-family: HelveticaNeueLT Std; color: #A3A5A8; font-size: 2.8rem; line-height: 1.3;">Comfortable conversation or quiet contemplation? Find furniture to create a room that will be the epicenter of your home.</p>
				</div>
				<div class="col-xs-12 col-sm-6" style="padding: 0;">
					<figure style="padding-bottom: 70%; position: relative;">
						<div style="background-image: url( '<?php echo STUDIO_WALL_TEMPLATE_URL . '/assets/images/greenwall.png'; ?>' ); background-size: cover; position: absolute; top: 0; bottom: 0; left: 0; right: 10rem;"></div>
					</figure>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12 col-sm-6" style="padding: 0;">
					<figure style="padding-bottom: 70%; position: relative;" style="padding: 0;">
						<div style="background-image: url( '<?php echo STUDIO_WALL_TEMPLATE_URL . '/assets/images/prebuilt.jpg'; ?>' ); background-size: cover; position: absolute; top: 0; bottom: 0; left: 10rem; right: 0;"></div>
					</figure>
				</div>
				<div class="col-xs-12 col-sm-6" style="padding: 1rem 10rem 1rem 4rem;">
					<h3 style="font-size: 3.5rem; font-weight: 600; margin-bottom: 10rem;"><span style="font-family: HelveticaNeueLT Std; color: #A3A5A8;">Tagwall</span> Greenwall</h3>
					<p style="font-family: HelveticaNeueLT Std; color: #A3A5A8; font-size: 2.8rem; line-height: 1.3;">Comfortable conversation or quiet contemplation? Find furniture to create a room that will be the epicenter of your home.</p>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12 col-sm-6" style="padding: 1rem 4rem 1rem 14rem;">
					<h3 style="font-size: 3.5rem; font-weight: 600; margin-bottom: 10rem;"><span style="font-family: HelveticaNeueLT Std; color: #A3A5A8;">Tagwall</span> Prebuilt</h3>
					<p style="font-family: HelveticaNeueLT Std; color: #A3A5A8; font-size: 2.8rem; line-height: 1.3;">Comfortable conversation or quiet contemplation? Find furniture to create a room that will be the epicenter of your home.</p>
				</div>
			</div> -->

		</section>
	</main>

<?php get_footer(); ?>
