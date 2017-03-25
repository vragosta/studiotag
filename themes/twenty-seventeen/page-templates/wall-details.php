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

	// Initialize counter;
	$count = 0;

	if ( have_posts() ) :
		while( have_posts() ) : the_post();

			// Get the 'hero-image' from the post.
			$hero_image = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_hero_image( $post );

			// Get the 'featured' image from the post.
			$image = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_featured_image( $post );

			// Get the custom post type array.
			$post_types = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_post_type_objects(); ?>

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

								<?php foreach( $post_types as $post_type ) : ?>
									<?php if ( $count == 4 ) : ?>
										<div class="break">
									<?php elseif ( $count == 6 ) : ?>
										</div>
									<?php endif; ?>

									<h1 data-menu="<?php echo esc_attr( $post_type->slug ); ?>">
										<a href="#<?php echo esc_attr( $post_type->name ); ?>">
											<?php echo esc_html( $post_type->label ); ?>
										</a>
									</h1>

									<?php $count++; ?>
								<?php endforeach; ?>

							</div>
							<div class="col-xs-12 col-sm-12 col-md-6">

								<?php foreach( $post_types as $post_type ) : ?>

									<div class="menu <?php echo esc_attr( $post_type->slug ); ?>">

										<h2>
											<a href="<?php echo home_url( '/' . $post_type->slug . '/' ); ?>" name="<?php echo esc_attr( $post_type->name ); ?>">
												<span>Wall</span> <?php echo esc_html( $post_type->label ); ?>
											</a>
										</h2>

										<ul>
											<?php if ( $post_type->query->have_posts() ) : ?>
												<?php while( $post_type->query->have_posts() ) : $post_type->query->the_post(); ?>

													<li>
														<a href="<?php echo home_url( '/' . $post_type->slug . '#' . $post->post_name ); ?>">
															<?php echo esc_html( $post->post_title ); ?>
														</a>
													</li>

												<?php endwhile; ?>
												<?php wp_reset_postdata(); ?>
											<?php endif; ?>

											<?php if ( $post_type->terms ) : ?>
												<?php foreach( $post_type->terms as $term ) : ?>
													<li><a href="<?php echo home_url( '/technicals#' . $term->slug ); ?>"><?php echo esc_html( $term->name ); ?></a></li>
												<?php endforeach; ?>
											<?php endif; ?>
										</ul>

									</div>

								<?php endforeach; ?>

							</div>
						</div>
					</div>
				</div>
			</main>
		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
	<?php endif; ?>

<?php get_footer(); ?>
