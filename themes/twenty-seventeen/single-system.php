<?php
/**
 * Template Name: Single - Three Column
 *
 * @package Tag Wall - Twenty Seventeen
 * @since   0.1.0
 * @uses    TODO
 */
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
	<?php while( have_posts() ) : the_post(); ?>
		<?php $image   = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_featured_image( $post ); ?>
		<?php $gallery = get_post_meta( $post->ID, 'gallery', true ); ?>
		<?php $metadata = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_system_metadata( $post->ID ); ?>

		<?php $left_name_1 = get_post_meta( $post->ID, 'left_name_1', true ); ?>
		<?php $left_link_1 = get_post_meta( $post->ID, 'left_link_1', true ); ?>

		<?php $left_name_2 = get_post_meta( $post->ID, 'left_name_2', true ); ?>
		<?php $left_link_2 = get_post_meta( $post->ID, 'left_link_2', true ); ?>

		<?php $left_name_3 = get_post_meta( $post->ID, 'left_name_3', true ); ?>
		<?php $left_link_3 = get_post_meta( $post->ID, 'left_link_3', true ); ?>



		<?php if ( $image ) : ?>
			<figure class="featured-image">
				<div style="background-image: url( '<?php echo esc_attr( $image ); ?>' );"></div>
			</figure>
		<?php endif; ?>

		<main class="systems-single">
			<section>
				<div class="title-container row">
					<div class="col-xs-12">
						<h1><span>Tagwall</span> <?php the_title(); ?></h1>
					</div>
				</div>

				<div class="specs-container row">
					<div class="view-container col-xs-12 col-sm-5 col-md-3 col-lg-3">
						<ul>
							<?php if (isset($left_name_1) && isset($left_link_1)) : ?>
								<li><a href="<?php echo esc_attr($left_link_1); ?>"> <?php echo $left_name_1; ?> </a></li>
							<?php endif; ?>
							<?php if (isset($left_name_2) && isset($left_link_2)) : ?>
								<li><a href="<?php echo esc_attr($left_link_2); ?>"> <?php echo $left_name_2; ?> </a></li>
							<?php endif; ?>
							<?php if (isset($left_name_3) && isset($left_link_3)) : ?>
								<li><a href="<?php echo esc_attr($left_link_3); ?>"> <?php echo $left_name_3; ?> </a></li>
							<?php endif; ?>
						</ul>
					</div>

					<?php if ( get_the_content() ) : ?>
						<div class="content-container col-xs-12 col-sm-7 col-md-5 col-lg-4">
							<?php the_content(); ?>
						</div>
					<?php endif; ?>

					<div class="custom-meta-container col-xs-12 col-sm-12 col-md-4 col-lg-5">
						<?php foreach( $metadata as $meta ) : ?>
							<?php $meta = ( object ) $meta; ?>
							<?php if ( $meta->title ) : ?>
								<div class="custom one">
									<h2><?php echo $meta->title; ?></h2>

									<?php if ( $meta->content ) : ?>
										<p><?php echo $meta->content; ?></p>
									<?php endif; ?>

								</div>
							<?php endif; ?>
						<?php endforeach; ?>
					</div>
				</div>
			</section>
		</main>

	<?php endwhile; ?>
	<?php wp_reset_postdata(); ?>
<?php endif; ?>

<?php get_footer(); ?>
