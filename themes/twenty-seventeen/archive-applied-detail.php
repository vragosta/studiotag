<?php
/**
 * Template: Archive - Applied Details
 * Template for displaying the applied details archive.
 *
 * @package Tag Wall - Twenty Seventeen
 * @since   0.1.0
 * @uses    TODO
 */
?>

<?php get_header(); ?>
<?php $applied_detail = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_post_type_object( get_queried_object() ); ?>

<div class="details-container <?php echo esc_attr( $custom->name ); ?> row">
	<div class="col-xs-12 col-sm-6">
		<h1><?php post_type_archive_title(); ?></h1>
	</div>
	<div class="col-xs-12 col-sm-6">
		<ul>
			<?php if ( $applied_detail->query && $applied_detail->query->have_posts() ) : ?>
				<?php while( $applied_detail->query->have_posts() ) : $applied_detail->query->the_post(); ?>
					<li><a href="<?php echo esc_attr( '#' . $post->post_name ); ?>"><?php echo esc_html( $post->post_title ); ?></a></li>
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
			<?php endif; ?>
			<li><a href="<?php echo home_url( '/details/' ); ?>" class="back">Go Back to Wall Details</a></li>
		</ul>
	</div>
</div>

<div class="archive-container applied-detail">
	<?php if ( $applied_detail->query->have_posts() ) : ?>
		<?php $count = 0; ?>
		<section class="grid">
			<?php while ( $applied_detail->query->have_posts() ) : $applied_detail->query->the_post(); ?>
				<?php $image = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_featured_image( $post ); ?>

				<?php if ( $count == 0 && $image ) : ?>
					<div class="row">
						<div class="right no-padding col-xs-12 col-sm-offset-6 col-sm-6">
							<a name="<?php echo esc_attr( $post->post_name ); ?>"></a>
							<figure class="featured-image">
								<div style="background-image: url( '<?php echo esc_attr( $image ); ?>' );"></div>
							</figure>

						</div>
					</div>
				<?php elseif ( $count % 2 == 1 && $image ) : ?>
					<div class="row">
						<div class="left no-padding col-xs-12 col-sm-6">
							<a name="<?php echo esc_attr( $post->post_name ); ?>"></a>
							<figure class="featured-image">
								<div style="background-image: url( '<?php echo esc_attr( $image ); ?>' );"></div>
							</figure>
						</div>
						<div class="info right col-xs-12 col-sm-6">
							<h3><?php echo esc_html( $temp_post->post_title ); ?></h3>
						</div>
					</div>
				<?php elseif ( $count % 2 == 0 && $image ) : ?>
					<div class="row">
						<div class="info left col-xs-12 col-sm-6">
							<h3><?php echo esc_html( $temp_post->post_title ); ?></h3>
						</div>
						<div class="right no-padding col-xs-12 col-sm-6">
							<a name="<?php echo esc_attr( $post->post_name ); ?>"></a>
							<figure class="featured-image">
								<div style="background-image: url( '<?php echo esc_attr( $image ); ?>' );"></div>
							</figure>
						</div>
					</div>
				<?php endif; ?>

				<?php
					/**
					 * Store the current post into a local variable for use in next iteration.
					 * NOTE: This is the key statement!
					 */
					$temp_post = $post;
					$excerpt   = wp_trim_words( $temp_post->post_excerpt, 50, '...' );
					$count++;
				?>

			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>

			<?php if ( $image ) : ?>
				<div class="row">
					<div class="left no-padding col-xs-12 col-sm-6">
						<a name="<?php echo esc_attr( $post->post_name ); ?>"></a>
						<figure class="featured-image not-visible">
							<div style="background-image: url( '<?php echo esc_attr( $image ); ?>' );"></div>
						</figure>
					</div>
					<div class="info right col-xs-12 col-sm-6">
						<h3><?php echo esc_html( $temp_post->post_title ); ?></h3>
					</div>
				</div>
			<?php endif; ?>
		</section>

	<?php endif; ?>
</div>

<?php get_footer(); ?>
