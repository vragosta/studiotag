<?php
/**
 * Template Name: Team Grid
 *
 * @package Tag Wall - Twenty Seventeen
 * @since   0.1.0
 * @uses    get_header(), get_users(), tagwall_get_hero_image(), tagwall_get_featued_image(),
 *          esc_attr(), esc_html(), get_avatar_url(), get_user_meta()
 */
?>

<?php

	get_header();

	// Initialize the global count.
	$count = 0;

	// TODO
	$users = get_users( array( 'order' => 'DESC' ) );

	// Get the 'hero-image' from the post.
	$hero_image = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_hero_image( $post );

	// Get the 'featured' image from the post.
	$image = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_featured_image( $post ); ?>

	<figure class="hero-image settings">
		<div style="background-image: url( '<?php echo esc_attr( $hero_image ); ?>' );"></div>
	</figure>

	<main class="archive-users">

		<?php echo Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_wall_title(); ?>

		<section class="grid"><?php
			foreach( $users as $user ) :

				// Get the gravatar image.
				$image = get_avatar_url( $user->ID, array( 'size' => '400' ) );

				// Get the user 'job_title', 'hashtag', 'direct_phone', and 'cell_phone'.
				$description  = get_user_meta( $user->ID, 'description', true );
				$job_title    = get_user_meta( $user->ID, 'job_title', true );
				$direct_phone = get_user_meta( $user->ID, 'direct_phone', true );
				$cell_phone   = get_user_meta( $user->ID, 'cell_phone', true );

				// If this is the first iteration through the loop..
				if ( $count == 0 ) : ?>

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
					</div><?php

				// If an odd iteration through the loop..
				elseif ( $count % 2 == 1 ) : ?>

					<div class="row">
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
					</div><?php

				// If an event iteration through the loop..
				elseif ( $count % 2 == 0 ) : ?>

					<div class="row">
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
					</div><?php
				endif;

				/**
				 * Store the current user into a local variable for use in next iteration.
				 * NOTE: This is the key statement!
				 */
				$temp_user         = $user;
				$temp_description  = $description;
				$temp_job_title    = $job_title;
				$temp_direct_phone = $direct_phone;
				$temp_cell_phone   = $cell_phone;

				// Increment the global count variable.
				$count++;
				endforeach;

			// Accomodate for the last temporary post's data. ?>
			<div class="row">
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
				<div class="right no-padding col-xs-12 col-sm-6">

					<figure class="featured-image not-visible">
						<div style="background-image: url( '<?php echo esc_attr( $image ); ?>' );"></div>
					</figure>

				</div>
			</div>
		</section>
	</main>

<?php get_footer(); ?>
