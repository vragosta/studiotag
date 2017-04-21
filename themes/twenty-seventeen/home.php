<?php
/**
 * Template Name: News
 *
 * @package Tag Wall - Twenty Seventeen
 * @since   0.1.0
 * @uses    TODO
 */
?>

<?php get_header(); ?>
<?php $blog_id    = get_option( 'page_for_posts' ); ?>
<?php $blog_post  = get_post( $blog_id ); ?>
<?php $hero_image = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_hero_image( $blog_post ); ?>
<?php $categories = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_filter_array( get_categories( [ 'hide_empty' => false, 'parent' => 0, 'order' => 'DESC' ] ) ); ?>

<?php if ( $hero_image ) : ?>
	<figure class="hero-image settings">
		<div style="background-image: url( '<?php echo esc_attr( $hero_image ); ?>' );"></div>
	</figure>
<?php endif; ?>

<main class="news">

	<?php echo Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_wall_title( $blog = true ); ?>

	<section class="menu-container">
		<div class="row">
			<?php if ( $categories ) : ?>
				<div class="static-menu col-xs-12 col-sm-3">
					<ul>
						<?php foreach( $categories as $category ) : ?>
							<li><a data-id="<?php echo esc_attr( $category->slug ); ?>"><?php echo esc_html( $category->name ); ?></a></li>
						<?php endforeach; ?>
					</ul>
				</div>
				<div class="dynamic-menu col-xs-12 col-sm-9">
					<?php foreach( $categories as $category ) : ?>

						<?php
							$posts = new WP_Query( [
								'post_type' => 'post',
								'order'     => 'DESC',
								'tax_query' => [ [
									'taxonomy' => 'category',
									'field'    => 'term_id',
									'terms'    => [ $category->term_id ],
									'operator' => 'IN'
								] ],
							] );
						?>

						<?php if ( $posts->have_posts() ) : ?>
							<div class="category-container">
								<?php while( $posts->have_posts() ) : $posts->the_post(); ?>
									<?php $image    = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_featured_image( $post->ID ); ?>
									<?php $id       = wp_get_post_categories( $post->ID, [ 'childless' => true ] )[0]; ?>
									<?php $category = get_category( $id ); ?>

									<div class="<?php echo esc_attr( $category->slug ); ?> row">
										<h2><?php echo esc_html( $post->post_title ); ?></h2>
										<h3><strong>Date Released: </strong><?php echo date_format( date_create( $post->post_date  ), 'F jS Y' ); ?></h3>

										<?php if ( $image ) : ?>
											<figure class="featured-image settings">
												<div style="background-image: url( '<?php echo esc_attr( $image ); ?>' );"></div>
											</figure>
										<?php endif; ?>

										<?php if ( get_the_content() ) : ?>
											<div class="content">
												<?php the_content(); ?>
											</div>
										<?php endif; ?>

									</div>
								<?php endwhile; ?>
								<?php wp_reset_postdata(); ?>
							</div>
						<?php endif; ?>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>
		</div>
	</section>

</main>

<?php get_footer(); ?>
