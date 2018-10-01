<?php
/**
 * Template Name: Landscape
 */
get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">

	<header class="page-header">
		<?php
		the_archive_title( '<h1 class="page-title">', '</h1>' );
		the_archive_description( '<div class="archive-description">', '</div>' );
		?>
	</header><!-- .page-header -->

		<?php while ( have_posts() ) : the_post(); ?>

			<h1><?php the_field('custom_title'); ?></h1>

			<img src="<?php the_field('hero_image'); ?>" />

			<p><?php the_content(); ?></p>

		<?php endwhile; // end of the loop. ?>



	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
