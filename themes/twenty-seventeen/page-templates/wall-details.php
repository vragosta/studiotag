<?php
/**
* Template Name: Wall Details
*
* @package    Studio Tag - Twenty Seventeen
* @subpackage Studio Wall - Twenty Seventeen
* @since      0.1.0
*/
?>

<?php get_header(); ?>
<?php $count = 0; ?>

<?php if ( have_posts() ) : ?>
	<?php while( have_posts() ) : the_post(); ?>
		<?php $hero_image = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_hero_image( $post ); ?>
		<?php $image      = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_featured_image( $post ); ?>
		<?php $post_types = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_post_type_objects(); ?>

		<?php if ( $hero_image ) : ?>
			<figure class="hero-image settings">
				<div style="background-image: url( '<?php echo esc_attr( $hero_image ); ?>' );"></div>
			</figure>
		<?php endif; ?>

		<main class="wall-details">

			<?php echo Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_wall_title(); ?>

			<?php if ( $post_types ) : ?>
				<section class="menu-container">
					<div>
						<div class="row">
							<div class="static-menu col-xs-12 col-sm-7">
								<ul>
									<?php foreach( $post_types as $post_type ) : ?>
										<li><a data-id="<?php echo esc_attr( $post_type->name ); ?>"><?php echo esc_html( $post_type->label ); ?></a></li>
									<?php endforeach; ?>
								</ul>
							</div>
							<div class="dynamic-menu col-xs-12 col-sm-5">
								<?php foreach( $post_types as $post_type ) : ?>
									<?php $terms = ( $post_type->name === 'hardware' ) ? $post_type->terms : $post_type->all_terms; ?>

									<div class="<?php echo esc_attr( $post_type->name ); ?>">
										<h2>
											<a href="<?php echo home_url( '/' . $post_type->slug . '/' ); ?>" name="<?php echo esc_attr( $post_type->name ); ?>">
												<span>Wall</span> <?php echo esc_html( $post_type->label ); ?>
											</a>
										</h2>

										<ul>
											<?php if ( $post_type->query->have_posts() ) : ?>
												<?php while( $post_type->query->have_posts() ) : $post_type->query->the_post(); ?>
													<li><a href="<?php echo home_url( '/' . $post_type->slug . '#' . $post->post_name ); ?>"><?php echo esc_html( $post->post_title ); ?></a></li>
												<?php endwhile; ?>
												<?php wp_reset_postdata(); ?>
											<?php endif; ?>

											<?php if ( $terms ) : ?>
												<?php foreach( $terms as $term ) : ?>
													<li><a href="<?php echo home_url( '/' . $post_type->slug . '#' . $term->slug ); ?>"><?php echo esc_html( $term->name ); ?></a></li>
												<?php endforeach; ?>
											<?php endif; ?>
										</ul>
									</div>

								<?php endforeach; ?>
							</div>
						</div>
					</div>
				</section>
			<?php endif; ?>

		</main>
	<?php endwhile; ?>
	<?php wp_reset_postdata(); ?>
<?php endif; ?>

<?php get_footer(); ?>
