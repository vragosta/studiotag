<?php
/**
* Template Name: Wall Details
*
* @package    Studio Tag - Twenty Seventeen
* @subpackage Studio Wall - Twenty Seventeen
* @since      0.1.0
*/
?>

<?php

	get_header();

	if ( have_posts() ) :
		while( have_posts() ) : the_post();

			// Get the 'hero-image' from the post.
			$hero_image = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_hero_image( $post );

			// Get the 'featured' image from the post.
			$image = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_featured_image( $post );

			// TODO
			$technicals      = get_object_taxonomies( 'technical', 'objects' );
			$applied_details = get_object_taxonomies( 'applied-detail', 'objects' );
			$doors           = get_object_taxonomies( 'door', 'objects' );
			$hardware        = get_object_taxonomies( 'hardware', 'objects' );
			$glass           = get_object_taxonomies( 'glass', 'objects' );
			$film            = get_object_taxonomies( 'film', 'objects' );
			$finishes        = get_object_taxonomies( 'finish', 'objects' ); ?>

			<figure class="hero-image settings">
				<div style="background-image: url( '<?php echo esc_attr( $hero_image ); ?>' );"></div>
			</figure>

			<main class="wall-details">

				<figure class="featured-image settings">
					<div style="background-image: url( '<?php echo esc_attr( $image ); ?>' );"></div>
				</figure>

				<div class="details-menu row">
					<div class="col-xs-12 col-sm-offset-3 col-sm-9">
						<div class="main row">
							<div class="col-xs-12 col-sm-6">
								<h1>Technicals</h1>
								<h1>Applied Details</h1>
								<h1>Doors</h1>
								<h1>Hardware</h1>
								<h1>Glass Film</h1>
								<h1>Finishes</h1>
							</div>
							<div class="col-xs-12 col-sm-6">

								<div class="menu one">
									<h2><span>Wall</span> Technicals</h2>
									<ul>
										<?php foreach( $technicals as $taxonomy ) : ?>
											<li><a href="<?php echo home_url( '/technicals#' . $taxonomy->name ); ?>"><?php echo esc_html( $taxonomy->label ); ?></a><li><?php

											$terms = get_terms( array(
												'taxonomy'   => $taxonomy->name,
												'hide_empty' => false,
												'order'      => 'desc'
											) );

											if ( $terms ) :
												foreach( $terms as $term ) : ?>
													<li class="term"><a href="<?php echo home_url( '/technicals#' . $term->slug ); ?>"><?php echo esc_html( $term->name ); ?></a></li><?php
												endforeach;
											endif;
											
										endforeach; ?>
										<li></li>
									</ul>
								</div>

								<div class="menu two">
									<h2><span>Wall</span> Applied Details</h2>
									<ul>
										<?php foreach( $applied_details as $taxonomy ) : ?>
											<li><a href="<?php echo home_url( '/technicals#' . $taxonomy->name ); ?>"><?php echo esc_html( $taxonomy->label ); ?></a><li><?php

											$terms = get_terms( array(
												'taxonomy'   => $taxonomy->name,
												'hide_empty' => false,
												'order'      => 'desc'
											) );

											if ( $terms ) :
												foreach( $terms as $term ) : ?>
													<li class="term"><a href="<?php echo home_url( '/technicals#' . $term->slug ); ?>"><?php echo esc_html( $term->name ); ?></a></li><?php
												endforeach;
											endif;

										endforeach; ?>
										<li></li>
									</ul>
								</div>

								<div class="menu three">
									<h2><span>Wall</span> Doors</h2>
									<ul>
										<?php foreach( $doors as $taxonomy ) : ?>
											<li><a href="<?php echo home_url( '/technicals#' . $taxonomy->name ); ?>"><?php echo esc_html( $taxonomy->label ); ?></a><li><?php

											$terms = get_terms( array(
												'taxonomy'   => $taxonomy->name,
												'hide_empty' => false,
												'order'      => 'desc'
											) );

											if ( $terms ) :
												foreach( $terms as $term ) : ?>
													<li class="term"><a href="<?php echo home_url( '/technicals#' . $term->slug ); ?>"><?php echo esc_html( $term->name ); ?></a></li><?php
												endforeach;
											endif;

										endforeach; ?>
										<li></li>
									</ul>
								</div>

								<div class="menu four">
									<h2><span>Wall</span> Hardware</h2>
									<ul>
										<?php foreach( $hardware as $taxonomy ) : ?>
											<li><a href="<?php echo home_url( '/technicals#' . $taxonomy->name ); ?>"><?php echo esc_html( $taxonomy->label ); ?></a><li><?php

											$terms = get_terms( array(
												'taxonomy'   => $taxonomy->name,
												'hide_empty' => false,
												'order'      => 'desc'
											) );

											if ( $terms ) :
												foreach( $terms as $term ) : ?>
													<li class="term"><a href="<?php echo home_url( '/technicals#' . $term->slug ); ?>"><?php echo esc_html( $term->name ); ?></a></li><?php
												endforeach;
											endif;

										endforeach; ?>
										<li></li>
									</ul>
								</div>

								<div class="menu five">
									<h2>Glass</h2>
									<ul>
										<?php foreach( $glass as $taxonomy ) : ?>
											<li><a href="<?php echo home_url( '/technicals#' . $taxonomy->name ); ?>"><?php echo esc_html( $taxonomy->label ); ?></a><li><?php

											$terms = get_terms( array(
												'taxonomy'   => $taxonomy->name,
												'hide_empty' => false,
												'order'      => 'desc'
											) );

											if ( $terms ) :
												foreach( $terms as $term ) : ?>
													<li class="term"><a href="<?php echo home_url( '/technicals#' . $term->slug ); ?>"><?php echo esc_html( $term->name ); ?></a></li><?php
												endforeach;
											endif;

										endforeach; ?>
										<li></li>
									</ul>
								</div>

								<div class="menu six">
									<h2>Film</h2>
									<ul>
										<?php foreach( $film as $taxonomy ) : ?>
											<li><a href="<?php echo home_url( '/technicals#' . $taxonomy->name ); ?>"><?php echo esc_html( $taxonomy->label ); ?></a></a><li><?php

											$terms = get_terms( array(
												'taxonomy'   => $taxonomy->name,
												'hide_empty' => false,
												'order'      => 'desc'
											) );

											if ( $terms ) :
												foreach( $terms as $term ) : ?>
													<li class="term"><a href="<?php echo home_url( '/technicals#' . $term->slug ); ?>"><?php echo esc_html( $term->name ); ?></a></li><?php
												endforeach;
											endif;

										endforeach; ?>
										<li></li>
									</ul>
								</div>

								<div class="menu seven">
									<h2><span>Tagwall</span> Finishes</h2>
									<ul>
										<?php foreach( $finishes as $taxonomy ) : ?>
											<li><a href="<?php echo home_url( '/technicals#' . $taxonomy->name ); ?>"><?php echo esc_html( $taxonomy->label ); ?></a><li><?php

											$terms = get_terms( array(
												'taxonomy'   => $taxonomy->name,
												'hide_empty' => false,
												'order'      => 'desc'
											) );

											if ( $terms ) :
												foreach( $terms as $term ) : ?>
													<li class="term"><a href="<?php echo home_url( '/technicals#' . $term->slug ); ?>"><?php echo esc_html( $term->name ); ?></a></li><?php
												endforeach;
											endif;

										endforeach; ?>
										<li></li>
									</ul>
								</div>

							</div>
						</div>
					</div>
				</div>
			</main>
<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
<?php endif; ?>

<?php get_footer(); ?>
