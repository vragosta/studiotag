<?php
/**
 * Template: Archive - Technicals
 * Template for displaying the technicals archive.
 *
 * @package Tag Wall - Twenty Seventeen
 * @since   0.1.0
 * @uses    get_header(), get_template_part(), tagwall_get_featued_image(), wp_trim_words(), the_permalink(),
 *          get_the_permalink(), esc_html(), wp_reset_postdata(), get_footer()
 */
?>

<?php

	get_header();

	// Get the custom catered post type object based off the archive template we are on.
	$custom = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_post_type_object( get_queried_object() );

	// Include content/details  partial.
	include( 'partials/content-details.php' );

?>

<div class="archive-container technical">

	<?php if ( $custom->query->have_posts() ) : ?>
		<?php while( $custom->query->have_posts() ) : $custom->query->the_post(); ?>

			<?php

				// Get all blueprint images if they are set.
				$blueprint_one   = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_blueprint_image( $post, 'one' );
				$blueprint_two   = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_blueprint_image( $post, 'two' );
				$blueprint_three = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_blueprint_image( $post, 'three' );

			?>

			<section class="<?php echo esc_attr( $post->post_name ); ?>">
				<div class="title">
					<h1><a name="<?php echo esc_attr( $post->post_name ); ?>"><?php echo esc_html( $post->post_title ); ?></a></h1>
				</div>

				<div class="blueprint-container">

					<?php if ( $blueprint_one ) : ?>
						<figure class="featured-image settings">
							<div style="background-image: url( '<?php echo esc_attr( $blueprint_one ); ?>' );"></div>
						</figure>
					<?php endif; ?>

					<?php if ( $blueprint_two ) : ?>
						<figure class="featured-image settings">
							<div style="background-image: url( '<?php echo esc_attr( $blueprint_two ); ?>' );"></div>
						</figure>
					<?php endif; ?>

					<?php if ( $blueprint_three ) : ?>
						<figure class="featured-image settings">
							<div style="background-image: url( '<?php echo esc_attr( $blueprint_three ); ?>' );"></div>
						</figure>
					<?php endif; ?>

				</div>
			</section>

		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
	<?php endif; ?>

	<div class="arrow top">
		<a href="#"><i class="ion ion-ios-arrow-up"></i></a>
	</div>

</div>

<?php get_footer(); ?>
