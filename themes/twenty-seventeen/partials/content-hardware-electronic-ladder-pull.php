<?php
/**
 * Partial used for Electronic Ladder Pull on the hardware template.
 *
 * @package Tag Wall - Twenty Seventeen
 * @since   0.1.0
 * @uses    TODO
 */
?>

<?php $electronic_ladder_pulls = new WP_Query( array(
		'post_type' => 'hardware',
		'order'     => 'ASC',
		'tax_query' => array(
			array(
				'taxonomy' => 'hardware_type',
				'field'    => 'slug',
				'terms'    => 'electronic-ladder-pull'
			)
		)
	) ); ?>

<?php if ( $electronic_ladder_pulls->have_posts() ) : ?>
	<div class="content row">
		<?php while( $electronic_ladder_pulls->have_posts() ) : $electronic_ladder_pulls->the_post(); ?>
			<?php $image = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_featured_image( $post->ID ); ?>
				<div class="col-xs-12 col-sm-4">
					<figure class="featured-image settings">
						<div style="background-image: url( '<?php echo esc_attr( $image ); ?>' );"></div>
					</figure>
				</div>
		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>

		<!-- TODO -->
		<?php $term_image = get_option( 'taxonomy_term_' . $term->term_id )['featured_image_url']; ?>
		<?php if ( $term_image ) : ?>
			<div class="col-xs-12 col-sm-4">
				<figure class="featured-image settings">
					<div style="background-image: url( '<?php echo esc_attr( $term_image ); ?>' );"></div>
				</figure>
			</div>
		<?php endif; ?>

		<!-- TODO -->
		<div class="col-xs-12 col-sm-4 segment">
			<h2><?php echo term_description( $term->term_id ); ?></h2>
		</div>
	</div>
<?php endif; ?>
