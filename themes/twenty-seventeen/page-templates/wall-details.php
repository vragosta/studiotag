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
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-offset-3 col-lg-9">
						<div class="main row">
							<div class="col-xs-12 col-sm-12 col-md-6">
								<h1 data-menu="one"><a href="#technicals">Technicals</a></h1>
								<h1 data-menu="two"><a href="#applied-details">Applied Details</a></h1>
								<h1 data-menu="three"><a href="#doors">Doors</a></h1>
								<h1 data-menu="four"><a href="#hardware">Hardware</a></h1>
								<div class="break">
									<h1 data-menu="five"><a href="#glass">Glass</a></h1>
									<h1 data-menu="six"><a href="#film">Film</a></h1>
								</div>
								<h1 data-menu="seven"><a href="#finishes">Finishes</a></h1>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-6">

								<div class="menu one">
									<h2><a name="technicals"><span>Wall</span> Technicals</a></h2>
									<ul>
										<?php foreach( $technicals as $taxonomy ) : ?>
											<li><a href="<?php echo home_url( '/technicals#' . $taxonomy->name ); ?>"><?php echo esc_html( $taxonomy->label ); ?></a></li><?php

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
									<h2><a name="applied-details"><span>Wall</span> Applied Details</a></h2>
									<ul>
										<?php foreach( $applied_details as $taxonomy ) : ?>
											<li><a href="<?php echo home_url( '/applied-details#' . $taxonomy->name ); ?>"><?php echo esc_html( $taxonomy->label ); ?></a></li><?php

											$terms = get_terms( array(
												'taxonomy'   => $taxonomy->name,
												'hide_empty' => false,
												'order'      => 'desc'
											) );

											if ( $terms ) :
												foreach( $terms as $term ) : ?>
													<li class="term"><a href="<?php echo home_url( '/applied-details#' . $term->slug ); ?>"><?php echo esc_html( $term->name ); ?></a></li><?php
												endforeach;
											endif;

										endforeach; ?>
									</ul>
								</div>

								<div class="menu three">
									<h2><a name="doors"><span>Wall</span> Doors</a></h2>
									<ul>
										<?php foreach( $doors as $taxonomy ) : ?>
											<li><a href="<?php echo home_url( '/doors#' . $taxonomy->name ); ?>"><?php echo esc_html( $taxonomy->label ); ?></a><li><?php

											$terms = get_terms( array(
												'taxonomy'   => $taxonomy->name,
												'hide_empty' => false,
												'order'      => 'desc'
											) );

											if ( $terms ) :
												foreach( $terms as $term ) : ?>
													<li class="term"><a href="<?php echo home_url( '/doors#' . $term->slug ); ?>"><?php echo esc_html( $term->name ); ?></a></li><?php
												endforeach;
											endif;

										endforeach; ?>
									</ul>
								</div>

								<div class="menu four">
									<h2><a name="hardware"><span>Wall</span> Hardware</a></h2>
									<ul>
										<?php foreach( $hardware as $taxonomy ) : ?>
											<li><a href="<?php echo home_url( '/hardware#' . $taxonomy->name ); ?>"><?php echo esc_html( $taxonomy->label ); ?></a><li><?php

											$terms = get_terms( array(
												'taxonomy'   => $taxonomy->name,
												'hide_empty' => false,
												'order'      => 'desc'
											) );

											if ( $terms ) :
												foreach( $terms as $term ) : ?>
													<li class="term"><a href="<?php echo home_url( '/hardware#' . $term->slug ); ?>"><?php echo esc_html( $term->name ); ?></a></li><?php
												endforeach;
											endif;

										endforeach; ?>
									</ul>
								</div>

								<div class="menu five">
									<h2><a name="glass">Glass</a></h2>
									<ul>
										<?php foreach( $glass as $taxonomy ) : ?>
											<li><a href="<?php echo home_url( '/glass#' . $taxonomy->name ); ?>"><?php echo esc_html( $taxonomy->label ); ?></a><li><?php

											$terms = get_terms( array(
												'taxonomy'   => $taxonomy->name,
												'hide_empty' => false,
												'order'      => 'desc'
											) );

											if ( $terms ) :
												foreach( $terms as $term ) : ?>
													<li class="term"><a href="<?php echo home_url( '/glass#' . $term->slug ); ?>"><?php echo esc_html( $term->name ); ?></a></li><?php
												endforeach;
											endif;

										endforeach; ?>
									</ul>
								</div>

								<div class="menu six">
									<h2><a name="film">Film</a></h2>
									<ul>
										<?php foreach( $film as $taxonomy ) : ?>
											<li><a href="<?php echo home_url( '/film#' . $taxonomy->name ); ?>"><?php echo esc_html( $taxonomy->label ); ?></a></a><li><?php

											$terms = get_terms( array(
												'taxonomy'   => $taxonomy->name,
												'hide_empty' => false,
												'order'      => 'desc'
											) );

											if ( $terms ) :
												foreach( $terms as $term ) : ?>
													<li class="term"><a href="<?php echo home_url( '/film#' . $term->slug ); ?>"><?php echo esc_html( $term->name ); ?></a></li><?php
												endforeach;
											endif;

										endforeach; ?>
									</ul>
								</div>

								<div class="menu seven">
									<h2><a name="finishes"><span>Tagwall</span> Finishes</a></h2>
									<ul>
										<?php foreach( $finishes as $taxonomy ) : ?>
											<li><a href="<?php echo home_url( '/finish#' . $taxonomy->name ); ?>"><?php echo esc_html( $taxonomy->label ); ?></a><li><?php

											$terms = get_terms( array(
												'taxonomy'   => $taxonomy->name,
												'hide_empty' => false,
												'order'      => 'desc'
											) );

											if ( $terms ) :
												foreach( $terms as $term ) : ?>
													<li class="term"><a href="<?php echo home_url( '/finish#' . $term->slug ); ?>"><?php echo esc_html( $term->name ); ?></a></li><?php
												endforeach;
											endif;

										endforeach; ?>
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
