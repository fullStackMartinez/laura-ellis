<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package laura-ellis
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php
			while(have_posts()) :
				the_post();

				the_post_thumbnail();
				the_title();


			endwhile; // End of the loop.

			wp_reset_postdata();
			?>
			<!-- Next previous loop that collects post ids of a category and uses them for navigation next/previous -->
			<?php
			$post_id = $post->ID; // current post id
			$cat = get_the_category();
			$current_cat_id = $cat[0]->cat_ID; // current category Id

			$args = array(
				'post_type' => 'artwork',
				'category' => $current_cat_id,
				'order' => 'DESC',
				'posts_per_page' => -1
			);
			$posts = get_posts($args);
			// get ids of posts retrieved from get_posts
			$ids = array();
			foreach($posts as $thepost) {
				$ids[] = $thepost->ID;
			}
			// get and echo previous and next post in the same category
			$thisindex = array_search($post->ID, $ids);
			$previd = $ids[$thisindex - 1];
			$nextid = $ids[$thisindex + 1];

			if(!empty($previd)) {
				?>
				<a rel="prev" href="<?php echo get_permalink($previd) ?>">Previous</a>
				<?php
			}
			if(!empty($nextid)) {
				?>
				<a rel="next" href="<?php echo get_permalink($nextid) ?>">Next</a>
				<?php
			}
			?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
