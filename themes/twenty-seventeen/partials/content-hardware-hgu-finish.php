<?php
/**
 * Partial used for the HGU Finish on the hardware template.
 *
 * @package Tag Wall - Twenty Seventeen
 * @since   0.1.0
 * @uses    TODO
 */
?>

<?php $hgu_default_finishes = new WP_Query( array(
		'post_type' => 'hardware',
		'order'     => 'ASC',
		'tax_query' => array(
			'relation' => 'AND',
			array(
				'taxonomy' => 'hardware_type',
				'field'    => 'slug',
				'terms'    => [ 'ansi-bhma-629-usd32', 'ansi-bhma-630-usd32d' ]
			),
			array(
				'taxonomy' => 'hardware_type',
				'field'    => 'slug',
				'terms'    => [ 'wenge-essence', 'ash-essence', 'mahogany-essence' ],
				'operator' => 'NOT IN'
			)
		)
	) ); ?>

	<?php $wenge_essence_finishes = new WP_Query( array(
			'post_type' => 'hardware',
			'order'     => 'ASC',
			'tax_query' => array(
				array(
					'taxonomy' => 'hardware_type',
					'field'    => 'slug',
					'terms'    => 'wenge-essence'
				),
			)
		) ); ?>

	<?php $ash_essence_finishes = new WP_Query( array(
			'post_type' => 'hardware',
			'order'     => 'ASC',
			'tax_query' => array(
				array(
					'taxonomy' => 'hardware_type',
					'field'    => 'slug',
					'terms'    => 'ash-essence'
				),
			)
		) ); ?>

	<?php $mahogany_essence_finishes = new WP_Query( array(
			'post_type' => 'hardware',
			'order'     => 'ASC',
			'tax_query' => array(
				array(
					'taxonomy' => 'hardware_type',
					'field'    => 'slug',
					'terms'    => 'mahogany-essence'
				),
			)
		) ); ?>

<?php // Tag_Wall\Twenty_seventeen\Helpers\tagwall_var_dump( $default_finishes->posts, true ); ?>

<?php if ( $hgu_default_finishes->have_posts() ) : ?>
	<div class="content row">
		<?php while( $hgu_default_finishes->have_posts() ) : $hgu_default_finishes->the_post(); ?>

			<?php // var_dump( wp_get_post_terms( $post->ID, 'hardware_type' ) ); exit() ?>

			<!-- TODO -->
			<div class="col-xs-12 col-sm-4">
				<h2 style="margin: 0; text-align: center;"><?php echo esc_html( get_post_meta( $post->ID, 'polish', true ) ); ?></h2>
				<h2 style="margin: 0; text-align: center;"><?php echo esc_html( wp_get_post_terms( $post->ID, 'hardware_type' )[0]->name ); ?></h2>
				<h2 style="margin: 0; text-align: center;"><?php echo esc_html( $post->post_title ); ?></h2>
			</div>

		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
	</div>
<?php endif; ?>

<?php if ( $wenge_essence_finishes->have_posts() ) : ?>
	<div class="content row">
		<?php while( $wenge_essence_finishes->have_posts() ) : $wenge_essence_finishes->the_post(); ?>

			<?php // var_dump( wp_get_post_terms( $post->ID, 'hardware_type' ) ); exit() ?>

			<!-- TODO -->
			<div class="col-xs-12 col-sm-4">
				<h2 style="margin: 0; text-align: center;"><?php echo esc_html( get_post_meta( $post->ID, 'polish', true ) ); ?></h2>
				<h2 style="margin: 0; text-align: center;">w/ <?php echo esc_html( wp_get_post_terms( $post->ID, 'hardware_type' )[1]->name ); ?></h2>
				<h2 style="margin: 0; text-align: center;"><?php echo esc_html( wp_get_post_terms( $post->ID, 'hardware_type' )[0]->name ); ?></h2>
				<h2 style="margin: 0; text-align: center;"><?php echo esc_html( $post->post_title ); ?></h2>
			</div>

		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
	</div>
<?php endif; ?>

<?php if ( $ash_essence_finishes->have_posts() ) : ?>
	<div class="content row">
		<?php while( $ash_essence_finishes->have_posts() ) : $ash_essence_finishes->the_post(); ?>

			<?php // var_dump( wp_get_post_terms( $post->ID, 'hardware_type' ) ); exit() ?>

			<!-- TODO -->
			<div class="col-xs-12 col-sm-4">
				<h2 style="margin: 0; text-align: center;"><?php echo esc_html( get_post_meta( $post->ID, 'polish', true ) ); ?></h2>
				<h2 style="margin: 0; text-align: center;">w/ <?php echo esc_html( wp_get_post_terms( $post->ID, 'hardware_type' )[1]->name ); ?></h2>
				<h2 style="margin: 0; text-align: center;"><?php echo esc_html( wp_get_post_terms( $post->ID, 'hardware_type' )[0]->name ); ?></h2>
				<h2 style="margin: 0; text-align: center;"><?php echo esc_html( $post->post_title ); ?></h2>
			</div>

		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
	</div>
<?php endif; ?>

<?php if ( $mahogany_essence_finishes->have_posts() ) : ?>
	<div class="content row">
		<?php while( $mahogany_essence_finishes->have_posts() ) : $mahogany_essence_finishes->the_post(); ?>

			<?php // var_dump( wp_get_post_terms( $post->ID, 'hardware_type' ) ); exit() ?>

			<!-- TODO -->
			<div class="col-xs-12 col-sm-4">
				<h2 style="margin: 0; text-align: center;"><?php echo esc_html( get_post_meta( $post->ID, 'polish', true ) ); ?></h2>
				<h2 style="margin: 0; text-align: center;">w/ <?php echo esc_html( wp_get_post_terms( $post->ID, 'hardware_type' )[1]->name ); ?></h2>
				<h2 style="margin: 0; text-align: center;"><?php echo esc_html( wp_get_post_terms( $post->ID, 'hardware_type' )[0]->name ); ?></h2>
				<h2 style="margin: 0; text-align: center;"><?php echo esc_html( $post->post_title ); ?></h2>
			</div>

		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
	</div>
<?php endif; ?>
