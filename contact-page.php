<?php
/*
 * Template Name: Contact
 */

get_header();
?>
<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<?php while(have_posts()) : the_post(); ?>
			<div class="home-image">
				<?php the_post_thumbnail(); ?>
				<h1>contact</h1>
				<?php the_content(); ?>
				</div>
		<?php endwhile; ?>
	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();

