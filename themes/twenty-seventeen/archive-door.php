<?php
/**
 * Template: Archive - Doors
 * Template for displaying the doors archive.
 *
 * @package Tag Wall - Twenty Seventeen
 * @since   0.1.0
 * @uses    get_header(), get_template_part(), tagwall_get_featued_image(), wp_trim_words(), the_permalink(),
 *          get_the_permalink(), esc_html(), wp_reset_postdata(), get_footer()
 */
?>

<?php

	get_header();

	// Get the post type object.
	$post_type = get_queried_object();

	// Initialize the global count.
	$count = 1;

	// TODO
	$custom = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_post_type_object( $post_type );

	// echo '<pre>';
	// var_dump( $custom );
	// echo '</pre>';
	// exit();

	// $panels_query          = get_terms( 'panel', array( 'fields' => 'ids' ) );
	// $powder_coatings_query = get_terms( 'powder-coating', array( 'fields' => 'ids' ) );

	// Arguements for main query.
	// $args = array(
	// 	'post_type' => $post_type->name,
	// 	'order'     => 'ASC',
	// 	'tax_query' => array(
	// 		'relation' => 'AND',
	// 		array(
	// 			'taxonomy' => 'panel',
	// 			'terms'    => $panels_query,
	// 			'operator' => 'NOT IN'
	// 		),
	// 		array(
	// 			'taxonomy' => 'powder-coating',
	// 			'terms'    => $powder_coatings_query,
	// 			'operator' => 'NOT IN'
	// 		)
	// 	)
	// );
	//
	// // Initialize the query.
	// $query = new WP_Query( $args );

	$query = $custom->query;
	$terms = $custom->terms;

	// TODO
	include( 'partials/content-details.php' );

?>

<div class="archive-container door">
	<div class="row"><?php

		if ( $query->have_posts() ) :
			while ( $query->have_posts() ) : $query->the_post();

			// Get the featured image.
			$image = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_featured_image( $post ); ?>

			<div class="col-xs-12 col-sm-6">
				<a name="<?php echo esc_attr( $post->post_name ); ?>"></a>
				<figure class="featured-image">
					<div style="background-image: url( '<?php echo esc_attr( $image ); ?>' );"></div>
				</figure>

				<h1><?php echo esc_html( $post->post_title ); ?></h1>
			</div><?php

			if ( $count % 2 == 0 ) : ?>
				</div>
				<div class="row"><?php
			endif;

			$count++;

			endwhile;
			wp_reset_postdata();
		endif; ?>

	</div>

	<?php

		// Reinitialize the count variable.
		$count = 1;

		// Get all panel terms
		$terms = get_terms( array(
			'taxonomy'   => 'panel',
			'hide_empty' => false
		) );

		// Get the woodgrain term.
		$woodgrain_term = get_term_by( 'slug', 'woodgrain', 'panel' );

		// Arguements for woodgrain query.
		$args = array(
			'post_type' => $post_type->name,
			'order'     => 'ASC',
			'tax_query' => array(
				array(
					'taxonomy' => 'panel',
					'terms'    => $woodgrain_term->term_id,
					'operator' => 'IN'
				)
			)
		);

		// Initialize the query.
		$woodgrain_query = new WP_Query( $args );

	?>

	<section class="taxonomies woodgrain">
		<div class="title">
			<h1><a name="<?php echo esc_attr( $woodgrain_term->slug ); ?>"><?php echo esc_html( $woodgrain_term->name ); ?></a></h1>
		</div>

		<div class="row">
			<?php
				if ( $woodgrain_query->have_posts() ) :
					while ( $woodgrain_query->have_posts() ) : $woodgrain_query->the_post();

						// Get the featured image.
						$image = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_featured_image( $post ); ?>

						<div class="taxonomy-item col-xs-12 col-sm-4">
							<div class="featured-image-circle">
								<img src="<?php echo esc_attr( $image ); ?>" />
							</div>

							<h1><?php echo esc_html( $post->post_title ); ?></h1>
						</div><?php

						if ( $count % 3 == 0 ) : ?>
							</div>
							<div class="row"><?php
						endif;

					$count++;

					endwhile;
					wp_reset_postdata();
				endif;
			?>
		</div>
	</section>

	<?php

		// Reinitialize the count variable.
		$count = 1;

		// Get the painted term.
		$painted_term   = get_term_by( 'slug', 'painted', 'panel' );

		// Arguements for painted query.
		$args = array(
			'post_type' => $post_type->name,
			'order'     => 'ASC',
			'tax_query' => array(
				array(
					'taxonomy' => 'panel',
					'terms'    => $painted_term->term_id,
					'operator' => 'IN'
				)
			)
		);

		// Initialize the query.
		$painted_query = new WP_Query( $args );

	?>

	<section class="taxonomies painted">
		<div class="title">
			<h1><a name="<?php echo esc_attr( $painted_term->slug ); ?>"><?php echo esc_html( $painted_term->name ); ?></a></h1>
		</div>

		<div class="row">
			<?php
				if ( $painted_query->have_posts() ) :
					while ( $painted_query->have_posts() ) : $painted_query->the_post();

						// Get the featured image.
						$image = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_featured_image( $post ); ?>

						<div class="taxonomy-item col-xs-12 col-sm-4">
							<div class="featured-image-circle">
								<img src="<?php echo esc_attr( $image ); ?>" />
							</div>

							<h1><?php echo esc_html( $post->post_title ); ?></h1>
						</div><?php

						if ( $count % 3 == 0 ) : ?>
							</div>
							<div class="row"><?php
						endif;

					$count++;

					endwhile;
					wp_reset_postdata();
				endif;
			?>
		</div>
	</section>

	<?php

		// Reinitialize the count variable.
		$count = 1;

		// Get the painted term.
		$laminated_term   = get_term_by( 'slug', 'laminated', 'powder-coating' );

		// Arguements for painted query.
		$args = array(
			'post_type' => $post_type->name,
			'order'     => 'ASC',
			'tax_query' => array(
				array(
					'taxonomy' => 'powder-coating',
					'terms'    => $laminated_term->term_id,
					'operator' => 'IN'
				)
			)
		);

		// Initialize the query.
		$laminated_query = new WP_Query( $args );

	?>

	<section class="taxonomies laminated">
		<div class="title">
			<h1><a name="<?php echo esc_attr( $laminated_term->slug ); ?>"><?php echo esc_html( $laminated_term->name ); ?></a></h1>
		</div>

		<div class="row">
			<?php
				if ( $laminated_query->have_posts() ) :
					while ( $laminated_query->have_posts() ) : $laminated_query->the_post();

						// Get the featured image.
						$image = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_featured_image( $post ); ?>

						<div class="taxonomy-item col-xs-12 col-sm-4">
							<div class="featured-image-circle">
								<img src="<?php echo esc_attr( $image ); ?>" />
							</div>

							<h1><?php echo esc_html( $post->post_title ); ?></h1>
						</div><?php

						if ( $count % 3 == 0 ) : ?>
							</div>
							<div class="row"><?php
						endif;

					$count++;

					endwhile;
					wp_reset_postdata();
				endif;
			?>
		</div>
	</section>

</div>

<?php get_footer(); ?>
