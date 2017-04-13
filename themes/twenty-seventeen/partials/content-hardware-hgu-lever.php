<?php
/**
 * Partial used for the HGU Levers on the hardware template.
 *
 * @package Tag Wall - Twenty Seventeen
 * @since   0.1.0
 * @uses    TODO
 */
?>

<?php

	$count = 1;

	$hgu_levers = new WP_Query( array(
		'post_type' => 'hardware',
		'order'     => 'ASC',
		'tax_query' => array(
			array(
				'taxonomy' => 'hardware_type',
				'field'    => 'slug',
				'terms'    => 'hgu-lever'
			)
		)
	) ); ?>

<?php // Tag_Wall\Twenty_Seventeen\Helpers\tagwall_var_dump( $hgu_levers->posts, true ); ?>

<?php if ( $hgu_levers->have_posts() ) : ?>
	<div class="content row">
		<?php while( $hgu_levers->have_posts() ) : $hgu_levers->the_post();
			$image = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_featured_image( $post ); ?>
			<div class="col-xs-12 col-sm-4">
				<figure class="featured-image settings lever">
					<div style="background-image: url( '<?php echo esc_attr( $image ); ?>' );"></div>
				</figure>

				<div class="sub-title">
					<h2><?php echo esc_html( $post->post_title ); ?></h2>
				</div>
			</div>

			<!-- TODO -->
			<?php if ( $count++ % 3 == 0 ) : ?>
				</div>
				<hr />
				<div class="content row">
			<?php endif; ?>

		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
	</div>
<?php endif; ?>
