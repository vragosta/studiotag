<?php
/**
 * Template: Archive - Hardware
 * Template for displaying the hardware archive.
 *
 * @package Tag Wall - Twenty Seventeen
 * @since   0.1.0
 * @uses    get_header(), get_template_part(), tagwall_get_featued_image(), wp_trim_words(), the_permalink(),
 *          get_the_permalink(), esc_html(), wp_reset_postdata(), get_footer()
 */
?>

<?php get_header(); ?>
<?php $hardware = Tag_Wall\Twenty_Seventeen\Helpers\tagwall_get_post_type_object( get_queried_object() ); ?>

<div class="details-container <?php echo esc_attr( $hardware->name ); ?> row">
	<div class="col-xs-12 col-sm-6">
		<h1><?php post_type_archive_title(); ?></h1>
	</div>
	<div class="col-xs-12 col-sm-6">
		<ul>
			<?php foreach( $hardware->terms as $term ) : ?>
				<li><a href="<?php echo esc_attr( '#' . $term->slug ); ?>"><?php echo esc_html( $term->name ); ?></a></li>
			<?php endforeach; ?>
			<li><a href="<?php echo home_url( '/details/' ); ?>" class="back">Go Back to Wall Details</a></li>
		</ul>
	</div>
</div>

<div class="archive-container <?php echo esc_attr( $hardware->name ); ?>">
	<?php foreach( $hardware->terms as $term ) : ?>

		<section class="<?php echo esc_attr( $term->slug ); ?>">
			<div class="title">
				<h1><a name="<?php echo esc_attr( $term->slug ); ?>"><?php echo esc_html( $term->name ); ?></a></h1>
			</div>

			<hr />

			<?php if ( $term->slug === 'electronic-ladder-pull' ) : ?>

				<?php include( 'partials/content-hardware-electronic-ladder-pull.php' ); ?>

			<?php elseif ( $term->slug === 'klo-ladder-pull' ) : ?>

				<?php include( 'partials/content-hardware-klo-ladder-pull.php' ); ?>

			<?php elseif ( $term->slug === 'hgu-view' ) : ?>

				<?php include( 'partials/content-hardware-hgu-view.php' ); ?>

			<?php elseif ( $term->slug === 'hgu-lever' ) : ?>

				<?php include( 'partials/content-hardware-hgu-lever.php' ); ?>

			<?php elseif ( $term->slug === 'hgu-finish' ) : ?>

				<?php include( 'partials/content-hardware-hgu-finish.php' ); ?>

			<?php endif; ?>

		</section>

	<?php endforeach; ?>
</div>

<?php get_footer(); ?>
