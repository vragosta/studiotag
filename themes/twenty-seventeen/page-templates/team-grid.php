<?php
/**
 * Template Name: Team Grid
 *
 * @package Tag Wall - Twenty Seventeen
 * @since   0.1.0
 * @uses    TODO
 */
?>

<?php get_header(); ?>
<?php $count = 0; ?>
<?php $users = get_users( array( 'order' => 'DESC' ) ); ?>
<?php $hero_image = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_hero_image( $post ); ?>
<?php $image = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_featured_image( $post ); ?>

<?php if ( $hero_image ) : ?>
	<figure class="hero-image settings">
		<div style="background-image: url( '<?php echo esc_attr( $hero_image ); ?>' );"></div>
	</figure>
<?php endif; ?>

<main class="archive-users">

	<?php echo Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_wall_title(); ?>

	<?php if ( $users ) : ?>
		<section class="grid">
			<?php foreach( $users as $user ) : ?>
				<?php $image = get_avatar_url( $user->ID, array( 'size' => '400' ) ); ?>
				<?php $description  = get_user_meta( $user->ID, 'description', true ); ?>
				<?php $job_title    = get_user_meta( $user->ID, 'job_title', true ); ?>
				<?php $direct_phone = get_user_meta( $user->ID, 'direct_phone', true ); ?>
				<?php $cell_phone   = get_user_meta( $user->ID, 'cell_phone', true ); ?>

				<?php if ( $count == 0 && $image ) : ?>
					<div class="row">
						<div class="right no-padding col-xs-12 col-sm-offset-6 col-sm-6">
							<figure class="featured-image">
								<a href="<?php the_permalink(); ?>">
									<div style="background-image: url( '<?php echo esc_attr( $image ); ?>' );"></div>
								</a>
							</figure>

							<div class="slash">
								<hr />
								<hr />
								<hr />
							</div>
						</div>
					</div>

				<?php elseif ( $count % 2 == 1 ) : ?>
					<div class="row">
						<?php if ( $image ) : ?>
							<div class="left no-padding col-xs-12 col-sm-6">
								<figure class="featured-image">
									<div style="background-image: url( '<?php echo esc_attr( $image ); ?>' );"></div>
								</figure>

								<div class="slash">
									<hr />
									<hr />
									<hr />
								</div>
							</div>
						<?php endif; ?>

						<?php if ( $temp_user ) : ?>
							<div class="info right col-xs-12 col-sm-6">
								<a>
									<h3><?php echo esc_html( $temp_user->display_name ); ?></h3>
									<h3><span><?php echo esc_html( $temp_job_title ); ?></span></h3>
								</a>

								<div class="info-content">
									<?php if ( $temp_description ) : ?>
										<p><?php echo esc_html( $temp_description ); ?></p>
									<?php endif; ?>

									<?php if ( $temp_direct_phone ) : ?>
										<p>Direct Number: <?php echo esc_html( $temp_direct_phone ); ?></p>
									<?php endif; ?>

									<?php if ( $temp_cell_phone ) : ?>
										<p>Cell Phone: <?php echo esc_html( $temp_cell_phone ); ?></p>
									<?php endif; ?>

									<?php if ( $temp_user->user_email ) : ?>
										<p>Email: <?php echo esc_html( $temp_user->user_email ); ?></p>
									<?php endif; ?>
								</div>
							</div>
						<?php endif; ?>
					</div>
				<?php elseif ( $count % 2 == 0 ) : ?>
					<div class="row">
						<?php if ( $temp_user ) : ?>
							<div class="info left col-xs-12 col-sm-6">
								<a>
									<h3><?php echo esc_html( $temp_user->display_name ); ?></h3>
									<h3><span><?php echo esc_html( $temp_job_title ); ?></span></h3>
								</a>

								<div class="info-content">
									<?php if ( $temp_description ) : ?>
										<p><?php echo esc_html( $temp_description ); ?></p>
									<?php endif; ?>

									<?php if( $temp_direct_phone ) : ?>
										<p>Direct Number: <?php echo esc_html( $temp_direct_phone ); ?></p>
									<?php endif; ?>

									<?php if ( $temp_cell_phone ) : ?>
										<p>Cell Phone: <?php echo esc_html( $temp_cell_phone ); ?></p>
									<?php endif; ?>

									<?php if ( $temp_user->user_email ) : ?>
										<p>Email: <?php echo esc_html( $temp_user->user_email ); ?></p>
									<?php endif; ?>
								</div>

							</div>
						<?php endif; ?>

						<?php if ( $image ) : ?>
							<div class="right no-padding col-xs-12 col-sm-6">
								<figure class="featured-image">
									<div style="background-image: url( '<?php echo esc_attr( $image ); ?>' );"></div>
								</figure>

								<div class="slash">
									<hr />
									<hr />
									<hr />
								</div>
							</div>
						<?php endif; ?>
					</div>
				<?php endif; ?>

			<?php
				/**
				 * Store the current user into a local variable for use in next iteration.
				 * NOTE: This is the key statement!
				 */
				$temp_user         = $user;
				$temp_description  = $description;
				$temp_job_title    = $job_title;
				$temp_direct_phone = $direct_phone;
				$temp_cell_phone   = $cell_phone;
				$count++;
			?>

			<?php endforeach; ?>

			<div class="row">
				<?php if ( $temp_user ) : ?>
					<div class="info left col-xs-12 col-sm-6">
						<a>
							<h3><?php echo esc_html( $temp_user->display_name ); ?></h3>
							<h3><span><?php echo esc_html( $temp_job_title ); ?></span></h3>
						</a>

						<div class="info-content">
							<?php if ( $temp_description ) : ?>
								<p><?php echo esc_html( $temp_description ); ?></p>
							<?php endif; ?>

							<?php if ( $temp_direct_phone ) : ?>
								<p>Direct Number: <?php echo esc_html( $temp_direct_phone ); ?></p>
							<?php endif; ?>

							<?php if ( $temp_cell_phone ) : ?>
								<p>Cell Phone: <?php echo esc_html( $temp_cell_phone ); ?></p>
							<?php endif; ?>

							<?php if ( $temp_user->user_email ) : ?>
								<p>Email: <?php echo esc_html( $temp_user->user_email ); ?></p>
							<?php endif; ?>
						</div>
					</div>
				<?php endif; ?>

				<?php if ( $image ) : ?>
					<div class="right no-padding col-xs-12 col-sm-6">
						<figure class="featured-image not-visible">
							<div style="background-image: url( '<?php echo esc_attr( $image ); ?>' );"></div>
						</figure>
					</div>
				<?php endif; ?>
			</div>
		</section>
	<?php endif; ?>
</main>

<?php get_footer(); ?>
