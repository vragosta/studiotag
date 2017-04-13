<?php
/**
 * Partial used for Decorative Glass on the glass template.
 *
 * @package Tag Wall - Twenty Seventeen
 * @since   0.1.0
 * @uses    TODO
 */
?>

<?php

	$count = 1;

	$children = get_term_children( $term->term_id, 'glass_type' ); ?>

	<div class="row indent">
		<?php if ( $children ) : ?>
			<div class="row child">

				<?php foreach( $children as $child ) : ?>
					<?php $child = get_term_by( 'id', $child, 'glass_type' ); ?>
					<div class="col-xs-12 col-sm-6">
						<h2><?php echo esc_html( $child->name ); ?></h2>
						<?php echo term_description( $child->term_id ); ?>
					</div>

					<?php if ( $count++ % 2 == 0 ) : ?>
						</div>
						<hr />
						<div class="row child">
					<?php endif; ?>

				<?php endforeach; ?>

			</div>
		<?php endif; ?>

		<hr />

		<div class="row child">
			<?php $interlayer_description = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_term_meta( $term->term_id, 'interlayer_description' ); ?>
			<?php if ( $interlayer_description ) : ?>
				<div class="col-xs-12 col-sm-6">
					<h2>Interlayer Description</h2>
					<p><?php echo $interlayer_description; ?></p>
				</div>
			<?php endif; ?>

			<?php $glass_combination = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_term_meta( $term->term_id, 'glass_combination' ); ?>
			<?php if ( $glass_combination ) : ?>
				<div class="col-xs-12 col-sm-6">
					<h2>Glass Combination</h2>
					<p><?php echo $glass_combination; ?></p>
				</div>
			<?php endif; ?>
		</div>

		<hr />

		<div class="row child">
			<?php $max_size = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_term_meta( $term->term_id, 'max_size' ); ?>
			<?php if ( $max_size ) : ?>
				<div class="col-xs-12 col-sm-6">
					<h2>Max Size of Glass Panel</h2>
					<p><?php echo $max_size; ?></p>
				</div>
			<?php endif; ?>

			<?php $glass_thickness = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_term_meta( $term->term_id, 'glass_thickness' ); ?>
			<?php if ( $glass_thickness ) : ?>
				<div class="col-xs-12 col-sm-6">
					<h2>Glass Thickness</h2>
					<p><?php echo $glass_thickness; ?></p>
				</div>
			<?php endif; ?>
		</div>

		<hr />

		<div class="row child">
			<?php $glass_laminated = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_term_meta( $term->term_id, 'glass_laminated' ); ?>
			<?php if ( $glass_laminated ) : ?>
				<div class="col-xs-12 col-sm-6">
					<h2>Glass Laminated</h2>
					<p><?php echo $glass_laminated; ?></p>
				</div>
			<?php endif; ?>
		</div>

	</div>

	<?php $count = 1; ?>
	<?php $children = get_term_children( $term->term_id, 'glass_type' ); ?>
	<?php //Tag_Wall\Twenty_Seventeen\Helpers\tagwall_var_dump( $children, true ); ?>
	<?php foreach( $children as $child ) : ?>
		<?php $child = get_term_by( 'id', $child, 'glass_type' ); ?>
		<?php $glass = new WP_Query( array(
				'post_type' => 'glass',
				'order'     => 'ASC',
				'tax_query' => array(
					array(
						'taxonomy' => 'glass_type',
						'field'    => 'id',
						'terms'    => $child->term_id
					),
				)
			) ); ?>

		<?php // Tag_Wall\Twenty_Seventeen\Helpers\tagwall_var_dump( $organic_glass->posts, true ); ?>
		<div class="taxonomies row">
			<div class="title">
				<h1><a name="<?php echo esc_attr( $child->slug ); ?>"><?php echo esc_html( $child->name ); ?></a></h1>
			</div>

			<hr /><?php
			if ( $glass->have_posts() ) :
				while ( $glass->have_posts() ) : $glass->the_post();

					// Get the featured image.
					$image = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_featured_image( $post ); ?>

					<div class="taxonomy-item col-xs-12 col-sm-4">
						<div class="featured-image-circle">
							<img src="<?php echo esc_attr( $image ); ?>" />
						</div>

						<h1><?php echo esc_html( $post->post_title ); ?></h1>
					</div><?php

					if ( $count++ % 3 == 0 ) : ?>
						</div>
						<hr />
						<div class="row"><?php
					endif;

				endwhile;
				wp_reset_postdata();
			endif; ?>
		</div>
	<?php endforeach; ?>
