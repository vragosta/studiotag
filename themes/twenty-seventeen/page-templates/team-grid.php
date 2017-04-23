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
<?php $hero_image = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_hero_image( $post ); ?>
<?php $users      = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_job_status_array(); ?>

<?php if ( $hero_image ) : ?>
	<figure class="hero-image settings">
		<div style="background-image: url( '<?php echo esc_attr( $hero_image ); ?>' );"></div>
	</figure>
<?php endif; ?>

<main class="archive-users">

	<?php echo Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_wall_title(); ?>

	<?php if ( $users ) : ?>
		<div class="grid">
			<?php foreach( $users as $key => $user ) : ?>
				<?php $count  = 0; ?>
				<?php $excerpt = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_grid_excerpt( $key, $post->ID ); ?>
				<section class="archive-item users">
					<?php if ( $key !== 'executive' ) : ?>
						<div class="title">
							<h1><a><?php echo esc_html( $user['name'] ); ?></a></h1>
						</div>

						<hr />

						<?php if ( $excerpt ) : ?>
							<div class="row indent">
								<div class="col-xs-12 col-sm-6">
									<p><?php echo esc_html( $excerpt ); ?></p>
								</div>
							</div>
						<?php endif; ?>
					<?php endif; ?>

					<?php foreach( $user['users'] as $_user ) : ?>
						<?php $image       = ( get_user_meta( $_user->ID, 'image', true ) ) ? get_user_meta( $_user->ID, 'image', true ) : get_avatar_url( $user->ID, array( 'size' => '400' ) ); ?>
						<?php $is_avatar   = ( get_user_meta( $_user->ID, 'image', true ) ) ? false : true; ?>
						<?php $description  = get_user_meta( $_user->ID, 'description', true ); ?>
						<?php $job_title    = get_user_meta( $_user->ID, 'job_title', true ); ?>
						<?php $direct_phone = get_user_meta( $_user->ID, 'direct_phone', true ); ?>
						<?php $cell_phone   = get_user_meta( $_user->ID, 'cell_phone', true ); ?>

						<?php if ( $count == 0 ) : ?>
							<div class="row">
								<div class="right no-padding col-xs-12 col-sm-offset-6 col-sm-6">

									<?php if ( $is_avatar && $image ) : ?>
										<figure class="featured-image not-exists">
											<span>Coming Soon</span>
											<div style="background-image: url( '<?php echo esc_attr( $image ); ?>' );"></div>
										</figure>
									<?php elseif ( $image ) : ?>
										<figure class="featured-image">
											<div style="background-image: url( '<?php echo esc_attr( $image ); ?>' );"></div>
										</figure>
									<?php endif; ?>

									<div class="slash">
										<hr />
										<hr />
										<hr />
									</div>
								</div>
							</div>

						<?php elseif ( $count % 2 == 1 ) : ?>
							<div class="row">
								<div class="left no-padding col-xs-12 col-sm-6">

									<?php if ( $is_avatar && $image ) : ?>
										<figure class="featured-image not-exists">
											<span>Coming Soon</span>
											<div style="background-image: url( '<?php echo esc_attr( $image ); ?>' );"></div>
										</figure>
									<?php elseif ( $image ) : ?>
										<figure class="featured-image">
											<div style="background-image: url( '<?php echo esc_attr( $image ); ?>' );"></div>
										</figure>
									<?php endif; ?>

									<div class="slash">
										<hr />
										<hr />
										<hr />
									</div>
								</div>

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

								<div class="right no-padding col-xs-12 col-sm-6">

									<?php if ( $is_avatar && $image ) : ?>
										<figure class="featured-image not-exists">
											<span>Coming Soon</span>
											<div style="background-image: url( '<?php echo esc_attr( $image ); ?>' );"></div>
										</figure>
									<?php elseif ( $image ) : ?>
										<figure class="featured-image">
											<div style="background-image: url( '<?php echo esc_attr( $image ); ?>' );"></div>
										</figure>
									<?php endif; ?>

									<div class="slash">
										<hr />
										<hr />
										<hr />
									</div>
								</div>
							</div>
						<?php endif; ?>

						<?php
							/**
							 * Store the current user into a local variable for use in next iteration.
							 * NOTE: This is the key statement!
							 */
							$temp_user         = $_user;
							$temp_description  = $description;
							$temp_job_title    = $job_title;
							$temp_direct_phone = $direct_phone;
							$temp_cell_phone   = $cell_phone;
							$count++;
						?>
					<?php endforeach; ?>

					<div class="row">
						<?php if ( $count % 2 == 1 ) : ?>
							<div class="left no-padding col-xs-12 col-sm-6">
								<?php if ( $is_avatar && $image ) : ?>
									<figure class="featured-image not-exists">
										<span>Coming Soon</span>
										<div style="background-image: url( '<?php echo esc_attr( $image ); ?>' );"></div>
									</figure>
								<?php elseif ( $image ) : ?>
									<figure class="featured-image">
										<div style="background-image: url( '<?php echo esc_attr( $image ); ?>' );"></div>
									</figure>
								<?php endif; ?>
							</div>

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
						<?php elseif ( $count % 2 == 0 ) : ?>
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

							<div class="right no-padding col-xs-12 col-sm-6">
								<figure class="featured-image not-visible">
									<div style="background-image: url( '<?php echo esc_attr( $image ); ?>' );"></div>
								</figure>
							</div>
						<?php endif; ?>
					</div>
				</section>
				<hr />
			<?php endforeach; ?>
		</div>
	<?php endif; ?>
</main>

<?php get_footer(); ?>
