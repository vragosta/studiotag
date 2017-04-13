<?php
/**
 * Partial used for the HGU Views on the hardware template.
 *
 * @package Tag Wall - Twenty Seventeen
 * @since   0.1.0
 * @uses    TODO
 */
?>

<?php $hgu_views = new WP_Query( array(
		'post_type' => 'hardware',
		'order'     => 'ASC',
		'tax_query' => array(
			array(
				'taxonomy' => 'hardware_type',
				'field'    => 'slug',
				'terms'    => 'hgu-view'
			)
		)
	) ); ?>

<?php if ( $hgu_views->have_posts() ) : ?>
	<div class="content row">
		<?php while( $hgu_views->have_posts() ) : $hgu_views->the_post();
			$image = [
				'Front' => get_post_meta( $post->ID, 'detailed_image_front', true ),
				'Side'  => get_post_meta( $post->ID, 'detailed_image_side', true ),
				'Back'  => get_post_meta( $post->ID, 'detailed_image_back', true )
			]; ?>

			<!-- TODO -->
			<?php foreach( $image as $key => $image_url ) : ?>
				<?php if ( $image_url ) : ?>
					<div class="col-xs-12 col-sm-4">
						<figure class="featured-image settings">
							<div style="background-image: url( '<?php echo esc_attr( $image_url ); ?>' );"></div>
						</figure>

						<div style="width: 100%; display: flex; justify-content: center; align-items: center;">
							<h2><?php echo esc_html( $key ); ?></h2>
						</div>
					</div>
				<?php endif; ?>
			<?php endforeach; ?>

		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
	</div>
<?php endif; ?>
