<?php
/**
* Template Name: Team Template
*
* @package    Studio Tag - Twenty Seventeen
* @subpackage Studio Wall - Twenty Seventeen
* @since      0.1.0
*/
?>

<?php

	get_header();

	// Initialize the global count.
	$count = 0;

	// TODO
	$users = get_users( array( 'order' => 'DESC' ) );
	// echo '<pre>';
	// var_dump( $users );
	// echo '</pre>';

	// Get the 'hero-image' from the post.
	$hero_image = studio_tag\Studio_Wall\Twenty_Seventeen\Helpers\studiowall_get_hero_image( $post );

	// Get the 'featured' image from the post.
	$image = studio_tag\Studio_Wall\Twenty_Seventeen\Helpers\studiowall_get_featured_image( $post );
?>

	<main class="archive-systems">

		<figure class="hero-image settings">
			<div style="background-image: url( '<?php echo esc_attr( $hero_image ); ?>' );"></div>
		</figure>

		<figure class="featured-image settings">
			<div style="background-image: url( '<?php echo esc_attr( $image ); ?>' );"></div>
		</figure>

		<section class="systems-grid"><?php
			foreach( $users as $user ) :

				// Get the gravatar image.
				$image = get_avatar_url( $user->ID, array( 'size' => '400' ) );

				// Get the user 'description', 'job_title', and 'hashtag'.
				$description = the_author_meta( 'description', $user->ID );
				$job_title   = get_user_meta( $user->ID, 'job_title', true );
				$hashtag     = get_user_meta( $user->ID, 'hashtag', true );

				// If this is the first iteration through the loop..
				if ( $count == 0 ) : ?>

					<div class="row">
						<div class="right no-padding col-xs-12 col-sm-offset-6 col-sm-6">
							<figure class="user-image">
								<a href="<?php get_the_author_link(); ?>">
									<div style="background-image: url( '<?php echo esc_attr( $image ); ?>' );"></div>
								</a>
							</figure>
						</div>
					</div><?php

				// If an odd iteration through the loop..
				elseif ( $count % 2 == 1 ) : ?>

					<div class="row">
						<div class="left no-padding col-xs-12 col-sm-6">
							<figure class="user-image">
								<a href="<?php the_author_link(); ?>">
									<div style="background-image: url( '<?php echo esc_attr( $image ); ?>' );"></div>
								</a>
							</figure>
						</div>
						<div class="info right col-xs-12 col-sm-6">
							<a href="<?php echo esc_attr( $temp_author_link ); ?>">
								<h3><?php echo esc_html( $temp_user->display_name ); ?></h3>
							</a>
							<h3><span><?php echo esc_html( $temp_job_title ); ?></span> <?php echo esc_html( $temp_hashtag ); ?></h3>
							<p><?php echo esc_html( $description ); ?></p>
						</div>
					</div><?php

				// If an event iteration through the loop..
				elseif ( $count % 2 == 0 ) : ?>

					<div class="row">
						<div class="info left col-xs-12 col-sm-6">
							<a href="<?php echo esc_attr( $temp_author_link ); ?>">
								<h3><?php echo esc_html( $temp_user->display_name ); ?></h3>
							</a>
							<h3><span><?php echo esc_html( $temp_job_title ); ?></span> <?php echo esc_html( $temp_hashtag ); ?></h3>
							<p><?php echo esc_html( $description ); ?></p>
						</div>
						<div class="right no-padding col-xs-12 col-sm-6">
							<figure class="user-image">
								<a href="<?php the_author_link(); ?>">
									<div style="background-image: url( '<?php echo esc_attr( $image ); ?>' );"></div>
								</a>
							</figure>
						</div>
					</div><?php
				endif;

				/**
				 * Store the current user into a local variable for use in next iteration.
				 * NOTE: This is the key statement!
				 */
				$temp_user        = $user;
				$temp_author_link = get_the_author_link();
				$temp_job_title   = $job_title;
				$temp_hashtag     = $hashtag;

				// Increment the global count variable.
				$count++;
			endforeach;

			// Accomodate for the last temporary post's data. ?>
			<div class="row">
				<div class="info left col-xs-12 col-sm-6">
					<a href="<?php echo esc_attr( $temp_author_link ); ?>">
						<h3><?php echo esc_html( $temp_user->display_name ); ?></h3>
					</a>
					<h3><span><?php echo esc_html( $temp_job_title ); ?></span> <?php echo esc_html( $temp_hashtag ); ?></h3>
					<p><?php echo esc_html( $description ); ?></p>
				</div>
				<div class="right no-padding col-xs-12 col-sm-6">
					<figure class="user-image not-visible">
						<a href="<?php echo esc_attr( $temp_author_link ); ?>">
							<div style="background-image: url( '<?php echo esc_attr( $image ); ?>' );"></div>
						</a>
					</figure>
				</div>
			</div>

		</section>

	</main>

<?php get_footer(); ?>
