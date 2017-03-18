<?php
/**
 * Template Name: Team Grid
 *
 * @package Tag Wall - Twenty Seventeen
 * @since   0.1.0
 * @uses    get_header(), get_users(), studiowall_get_hero_image(), studiowall_get_featued_image(),
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
	$hero_image = Tag_wall\Twenty_Seventeen\Helpers\studiowall_get_hero_image( $post );

	// Get the 'featured' image from the post.
	$image = Tag_wall\Twenty_Seventeen\Helpers\studiowall_get_featured_image( $post );
?>

	<main class="archive-users">

		<figure class="hero-image settings">
			<div style="background-image: url( '<?php echo esc_attr( $hero_image ); ?>' );"></div>
		</figure>

		<figure class="featured-image settings">
			<div style="background-image: url( '<?php echo esc_attr( $image ); ?>' );"></div>
		</figure>

		<section class="team-grid"><?php
			foreach( $users as $user ) :

				// Get the gravatar image.
				$image = get_avatar_url( $user->ID, array( 'size' => '400' ) );

				// Get the user 'job_title', 'hashtag', 'work_phone', and 'personal_phone'.
				$job_title      = get_user_meta( $user->ID, 'job_title', true );
				$hashtag        = get_user_meta( $user->ID, 'hashtag', true );
				$work_phone     = get_user_meta( $user->ID, 'work_phone', true );
				$personal_phone = get_user_meta( $user->ID, 'personal_phone', true );

				// If this is the first iteration through the loop..
				if ( $count == 0 ) : ?>

					<div class="row">
						<div class="right no-padding col-xs-12 col-sm-offset-6 col-sm-6">
							<figure class="user-image">
								<div style="background-image: url( '<?php echo esc_attr( $image ); ?>' );"></div>
							</figure>
						</div>
					</div><?php

				// If an odd iteration through the loop..
				elseif ( $count % 2 == 1 ) : ?>

					<div class="row">
						<div class="left no-padding col-xs-12 col-sm-6">
							<figure class="user-image">
								<div style="background-image: url( '<?php echo esc_attr( $image ); ?>' );"></div>
							</figure>
						</div>
						<div class="info right col-xs-12 col-sm-6">
							<div class="header-content">
								<h3><?php echo esc_html( $temp_user->display_name ); ?></h3>
								<h3><span><?php echo esc_html( $temp_job_title ); ?></span> <?php echo esc_html( $temp_hashtag ); ?></h3>
							</div>
							<div class="info-content">
								<p><?php echo esc_html( $temp_work_phone ); ?></p>

								<?php if ( $temp_personal_phone ) : ?>
									<p><?php echo esc_html( $temp_personal_phone ); ?></p>
								<?php endif; ?>

								<?php if ( $temp_user->user_email ) : ?>
									<p><?php echo esc_html( $temp_user->user_email ); ?></p>
								<?php endif; ?>
							</div>
						</div>
					</div><?php

				// If an event iteration through the loop..
				elseif ( $count % 2 == 0 ) : ?>

					<div class="row">
						<div class="info left col-xs-12 col-sm-6">
							<div class="header-content">
								<h3><?php echo esc_html( $temp_user->display_name ); ?></h3>
								<h3><span><?php echo esc_html( $temp_job_title ); ?></span> <?php echo esc_html( $temp_hashtag ); ?></h3>
							</div>
							<div class="info-content">
								<p><?php echo esc_html( $temp_work_phone ); ?></p>

								<?php if ( $temp_personal_phone ) : ?>
									<p><?php echo esc_html( $temp_personal_phone ); ?></p>
								<?php endif; ?>

								<?php if ( $temp_user->user_email ) : ?>
									<p><?php echo esc_html( $temp_user->user_email ); ?></p>
								<?php endif; ?>
							</div>
						</div>
						<div class="right no-padding col-xs-12 col-sm-6">
							<figure class="user-image">
								<div style="background-image: url( '<?php echo esc_attr( $image ); ?>' );"></div>
							</figure>
						</div>
					</div><?php
				endif;

				/**
				 * Store the current user into a local variable for use in next iteration.
				 * NOTE: This is the key statement!
				 */
				$temp_user           = $user;
				$temp_author_link    = get_the_author_link();
				$temp_job_title      = $job_title;
				$temp_hashtag        = $hashtag;
				$temp_work_phone     = $work_phone;
				$temp_personal_phone = $personal_phone;

				// Increment the global count variable.
				$count++;
			endforeach;

			// Accomodate for the last temporary post's data. ?>
			<div class="row">
				<div class="info left col-xs-12 col-sm-6">
					<div class="header-content">
						<h3><?php echo esc_html( $temp_user->display_name ); ?></h3>
						<h3><span><?php echo esc_html( $temp_job_title ); ?></span> <?php echo esc_html( $temp_hashtag ); ?></h3>
					</div>
					<div class="info-content">
						<p><?php echo esc_html( $temp_work_phone ); ?></p>

						<?php if ( $temp_personal_phone ) : ?>
							<p><?php echo esc_html( $temp_personal_phone ); ?></p>
						<?php endif; ?>

						<?php if ( $temp_user->user_email ) : ?>
							<p><?php echo esc_html( $temp_user->user_email ); ?></p>
						<?php endif; ?>
					</div>
				</div>
				<div class="right no-padding col-xs-12 col-sm-6">
					<figure class="user-image not-visible">
						<div style="background-image: url( '<?php echo esc_attr( $image ); ?>' );"></div>
					</figure>
				</div>
			</div>

		</section>

	</main>

<?php get_footer(); ?>
