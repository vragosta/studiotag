<?php
/**
 * Template: Archive - Film
 * Template for displaying the film archive.
 *
 * @package Tag Wall - Twenty Seventeen
 * @since   0.1.0
 * @uses    TODO
 */
?>

<?php get_header(); ?>
<?php $film = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_post_type_object( get_queried_object() ); ?>

<div class="details-container <?php echo esc_attr( $film->name ); ?> row">
	<div class="col-xs-12 col-sm-6">
		<h1><?php post_type_archive_title(); ?></h1>
	</div>
	<div class="col-xs-12 col-sm-6">
		<ul>
			<?php foreach( $film->terms as $term ) : ?>
				<li><a href="<?php echo esc_attr( '#' . $term->slug ); ?>"><?php echo esc_html( $term->name ); ?></a></li>
			<?php endforeach; ?>
			<li><a href="<?php echo home_url( '/details/' ); ?>" class="back">Go Back to Wall Details</a></li>
		</ul>
	</div>
</div>

<div class="archive-container <?php echo esc_attr( $film->name ); ?>">

	<div class="row indent">
		<div class="col-xs-12 col-sm-6">
			<p>
				Tagwall provides full service design, print and installation of colored glass films.
				Our experienced designers can take your ideas seamlessly from concept to final production.
				Chroma brand decorative films transform glass and architectural surfaces into visually engaging facades.
			</p>

			<p>Transform any glass surface with color from floor to ceiling or partial accent band.
				Chroma Transparent Glass Films off exceptional clarity, vibrant hues, and a vast spectrum of color choices.
				Chroma Films can be layered, printed on, and diecut to accomplish almost any design.
				Personalize Chroma Film by incorporat- ing logos, room names and more.
			</p>

			<p>
				For any inquiries regarding special projects please contact us directly.
			</p>
		</div>
	</div>

	<?php foreach( $film->terms as $term ) : ?>
		<?php $count          = 1; ?>
		<?php $image          = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_term_meta( $term->term_id, 'featured_image_url' ); ?>
		<?php $portfolio_link = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_term_meta( $term->term_id, 'portfolio_link' ); ?>
		<?php $taxonomy_query = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_post_type_term_query( $post_type, $term ); ?>

		<section class="archive-item <?php echo esc_attr( $term->slug ); ?>">
			<div class="title">
				<h1><a name="<?php echo esc_attr( $term->slug ); ?>"><?php echo esc_html( $term->name ); ?></a></h1>
			</div>

			<hr />

			<?php if ( $image ) : ?>
				<div class="content row">
					<div class="col-xs-12 col-sm-8">
						<figure class="featured-image settings">
							<div style="background-image: url( '<?php echo esc_attr( $image ); ?>' );"></div>
						</figure>
					</div>
					<div class="description col-xs-12 col-sm-4">
						<?php echo term_description( $term->term_id ); ?>

						<?php if ( $portfolio_link ) : ?>
							<a href="<?php echo esc_attr( $portfolio_link ); ?>" target="_blank">View <?php echo esc_html( $term->name ); ?> Portfolio</a>
						<?php endif; ?>
					</div>
				</div>
			<?php endif; ?>

			<?php if ( $taxonomy_query->have_posts() ) : ?>
				<div class="taxonomies <?php echo esc_attr( $term->taxonomy ); ?>">
					<div class="title">
						<h1><?php echo ( $term->slug === 'transparent' ) ? 'Color' : 'Type'; ?></h1>
					</div>

					<hr />

					<div class="row">
						<?php while ( $taxonomy_query->have_posts() ) : $taxonomy_query->the_post(); ?>
							<?php $image = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_featured_image( $post ); ?>

							<div class="taxonomy-item col-xs-12 col-sm-4">
								<?php if ( $image ) : ?>
									<div class="featured-image-circle">
										<img src="<?php echo esc_attr( $image ); ?>" />
									</div>
								<?php endif; ?>

								<h1><?php echo esc_html( $post->post_title ); ?></h1>
							</div>

							<?php if ( $count++ % 3 == 0 ) : ?>
								</div>
								<hr />
								<div class="row">
							<?php endif; ?>

						<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>
					</div>

					<?php if ( $taxonomy_query->post_count % 3 !== 0 ) : ?>
						<hr />
					<?php endif; ?>

				</div>
			<?php endif; ?>

		</section>
	<?php endforeach; ?>
</div>

<?php get_footer(); ?>
