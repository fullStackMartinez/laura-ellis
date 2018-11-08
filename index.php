<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package laura-ellis
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<div class="home-image">
				<!-- Using get_template_directory_uri() to get image from file -->
				<img src="<?php echo get_template_directory_uri() . '/img/moonlight-on-sea.jpg'; ?>" />
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
