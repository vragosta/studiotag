<?php
/**
 * Template: Archive - Film
 * Template for displaying the film archive.
 *
 * @package Tag Wall - Twenty Seventeen
 * @since   0.1.0
 * @uses    get_header(), get_template_part(), tagwall_get_featued_image(), wp_trim_words(), the_permalink(),
 *          get_the_permalink(), esc_html(), wp_reset_postdata(), get_footer()
 */
?>

<?php

	get_header();

	// Get the custom catered post type object based off the archive template we are on.
	$custom = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_post_type_object( get_queried_object() );

	// Tag_Wall\Twenty_seventeen\Helpers\tagwall_var_dump( get_terms( array( 'taxonomy' => 'ladder_pull', 'hide_empty' => false ) ), true );
	// Tag_Wall\Twenty_seventeen\Helpers\tagwall_var_dump( $custom->terms, true );
	// Tag_Wall\Twenty_seventeen\Helpers\tagwall_var_dump( $custom->all_terms, true );
	// Tag_Wall\Twenty_seventeen\Helpers\tagwall_var_dump( $custom->terms, true );
	// Tag_Wall\Twenty_seventeen\Helpers\tagwall_var_dump( $custom->assoc_terms, true );
	// Tag_Wall\Twenty_seventeen\Helpers\tagwall_var_dump( $custom->taxonomies, true );

	// Include content/details partial.
	include( 'partials/content-details.php' );

?>

<div class="archive-container <?php echo esc_attr( $custom->name ); ?>">
	<?php foreach( $custom->terms as $term ) : ?>
		<section class="<?php echo esc_attr( $term->slug ); ?>">
			<div class="title">
				<h1><a name="<?php echo esc_attr( $term->slug ); ?>"><?php echo esc_html( $term->name ); ?></a></h1>
			</div>

			<hr />

			<?php if ( $term->slug === 'transparent' ) : ?>
				<?php include( 'partials/content-film-transparent.php' ); ?>
				<?php elseif ( $term->slug === 'gradient' ) : ?>


			<?php endif; ?>
		</section>
	<?php endforeach; ?>
</div>
