<?php
/**
 * The main template file
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package laura-ellis
 */
get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<!--BEGINNING OF CATEGORY LOOP, WHICH WILL SHOW ARTWORK THAT SHARE THE SAME CATEGORY -->
			<?php
			$current_category = single_cat_title("", false);

			$args = array(
				'post_type' => 'artwork',
				'category_name' => $current_category,
				'posts_per_page' => -1
			);
			// The Query
			$query = new WP_Query($args);
			// The Loop
			if($query->have_posts()) {
				while($query->have_posts()) {
					$query->the_post();
					?>
					<p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
					<?php
				} // End while
			} // End if
			echo '</div>';
			// Restore original Post Data
			wp_reset_postdata();
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();