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
			$technicals      = new WP_Query( array( 'post_type' => 'technical', 'order' => 'ASC' ) );
			$applied_details = new WP_Query( array( 'post_type' => 'applied-detail', 'order' => 'ASC' ) );
			$doors           = new WP_Query( array( 'post_type' => 'door', 'order' => 'ASC' ) );
			$hardware        = new WP_Query( array( 'post_type' => 'hardware', 'order' => 'ASC' ) );
			$glass           = new WP_Query( array( 'post_type' => 'glass', 'order' => 'ASC' ) );
			$film            = new WP_Query( array( 'post_type' => 'film', 'order' => 'ASC' ) );
			$finishes        = new WP_Query( array( 'post_type' => 'finish', 'order' => 'ASC' ) );

			// TODO
			$technical_taxonomies      = get_object_taxonomies( 'technical', 'objects' );
			$applied_detail_taxonomies = get_object_taxonomies( 'applied-detail', 'objects' );
			$door_taxonomies           = get_object_taxonomies( 'door', 'objects' );
			$hardware_taxonomies       = get_object_taxonomies( 'hardware', 'objects' );
			$glass_taxonomies          = get_object_taxonomies( 'glass', 'objects' );
			$film_taxonomies           = get_object_taxonomies( 'film', 'objects' );
			$finish_taxonomies         = get_object_taxonomies( 'finish', 'objects' ); ?>

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
									<h2><a href="<?php echo home_url( '/technicals/' ); ?>" name="technicals"><span>Wall</span> Technicals</a></h2>
									<ul>
										<?php if ( $technicals->have_posts() ) : ?>
											<?php while( $technicals->have_posts() ) : $technicals->the_post(); ?>
												<li><a href="<?php echo home_url( '/technicals#' . $post->post_name ); ?>"><?php echo esc_html( $post->post_title ); ?></a></li>
											<?php endwhile; ?>
											<?php wp_reset_postdata(); ?>

											<?php foreach( $technical_taxonomies as $term ) : ?>
												<li class="term"><a href="<?php echo home_url( '/technicals#' . $term->name ); ?>"><?php echo esc_html( $term->label ); ?></a></li>
											<?php endforeach; ?>

										<?php endif; ?>
									</ul>
								</div>

								<div class="menu two">
									<h2><a href="<?php echo home_url( '/applied-details/' ); ?>" name="applied-details"><span>Wall</span> Applied Details</a></h2>
									<ul>
										<?php if ( $applied_details->have_posts() ) : ?>
											<?php while( $applied_details->have_posts() ) : $applied_details->the_post(); ?>
												<li><a href="<?php echo home_url( '/applied-details#' . $post->post_name ); ?>"><?php echo esc_html( $post->post_title ); ?></a></li>
											<?php endwhile; ?>
											<?php wp_reset_postdata(); ?>

											<?php foreach( $applied_detail_taxonomies as $term ) : ?>
												<li class="term"><a href="<?php echo home_url( '/applied-details#' . $term->name ); ?>"><?php echo esc_html( $term->label ); ?></a></li>
											<?php endforeach; ?>

										<?php endif; ?>
									</ul>
								</div>

								<div class="menu three">
									<h2><a href="<?php echo home_url( '/doors/' ); ?>"name="doors"><span>Wall</span> Doors</a></h2>
									<ul>
										<?php if ( $doors->have_posts() ) : ?>
											<?php while( $doors->have_posts() ) : $doors->the_post(); ?>
												<li><a href="<?php echo home_url( '/doors#' . $post->post_name ); ?>"><?php echo esc_html( $post->post_title ); ?></a></li>
											<?php endwhile; ?>
											<?php wp_reset_postdata(); ?>

											<?php foreach( $door_taxonomies as $term ) : ?>
												<li class="term"><a href="<?php echo home_url( '/doors#' . $term->name ); ?>"><?php echo esc_html( $term->label ); ?></a></li>
											<?php endforeach; ?>

										<?php endif; ?>
									</ul>
								</div>

								<div class="menu four">
									<h2><a href="<?php echo home_url( '/hardware/' ); ?>" name="hardware"><span>Wall</span> Hardware</a></h2>
									<ul>
										<?php if ( $hardware->have_posts() ) : ?>
											<?php while( $hardware->have_posts() ) : $hardware->the_post(); ?>
												<li><a href="<?php echo home_url( '/hardware#' . $post->post_name ); ?>"><?php echo esc_html( $post->post_title ); ?></a></li>
											<?php endwhile; ?>
											<?php wp_reset_postdata(); ?>

											<?php foreach( $hardware_taxonomies as $term ) : ?>
												<li class="term"><a href="<?php echo home_url( '/hardware#' . $term->name ); ?>"><?php echo esc_html( $term->label ); ?></a></li>
											<?php endforeach; ?>

										<?php endif; ?>
									</ul>
								</div>

								<div class="menu five">
									<h2><a href="<?php echo home_url( '/glass/' ); ?>" name="glass">Glass</a></h2>
									<ul>
										<?php if ( $glass->have_posts() ) : ?>
											<?php while( $glass->have_posts() ) : $glass->the_post(); ?>
												<li><a href="<?php echo home_url( '/glass#' . $post->post_name ); ?>"><?php echo esc_html( $post->post_title ); ?></a></li>
											<?php endwhile; ?>
											<?php wp_reset_postdata(); ?>

											<?php foreach( $glass_taxonomies as $term ) : ?>
												<li class="term"><a href="<?php echo home_url( '/glass#' . $term->name ); ?>"><?php echo esc_html( $term->label ); ?></a></li>
											<?php endforeach; ?>

										<?php endif; ?>
									</ul>
								</div>

								<div class="menu six">
									<h2><a href="<?php echo home_url( '/film/' ); ?>" name="film">Film</a></h2>
									<ul>
										<?php if ( $film->have_posts() ) : ?>
											<?php while( $film->have_posts() ) : $film->the_post(); ?>
												<li><a href="<?php echo home_url( '/film#' . $post->post_name ); ?>"><?php echo esc_html( $post->post_title ); ?></a></li>
											<?php endwhile; ?>
											<?php wp_reset_postdata(); ?>

											<?php foreach( $film_taxonomies as $term ) : ?>
												<li class="term"><a href="<?php echo home_url( '/film#' . $term->name ); ?>"><?php echo esc_html( $term->label ); ?></a></li>
											<?php endforeach; ?>

										<?php endif; ?>
									</ul>
								</div>

								<div class="menu seven">
									<h2><a href="<?php echo home_url( '/finishes/' ); ?>" name="finishes"><span>Tagwall</span> Finishes</a></h2>
									<ul>
										<?php if ( $finishes->have_posts() ) : ?>
											<?php while( $finishes->have_posts() ) : $finishes->the_post(); ?>
												<li><a href="<?php echo home_url( '/finishes#' . $post->post_name ); ?>"><?php echo esc_html( $post->post_title ); ?></a></li>
											<?php endwhile; ?>
											<?php wp_reset_postdata(); ?>

											<?php foreach( $finish_taxonomies as $term ) : ?>
												<li class="term"><a href="<?php echo home_url( '/finishes#' . $term->name ); ?>"><?php echo esc_html( $term->label ); ?></a></li>
											<?php endforeach; ?>

										<?php endif; ?>
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
