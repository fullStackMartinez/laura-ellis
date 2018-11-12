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

				$featured = get_field('is_this_a_sold_item?'); ?>
	<div class="artwork-container">

		<?php the_title(); ?>,
		<?php the_field('artwork_year'); ?>,
		<?php the_field('artwork_medium'); ?>,
		<?php the_field('width'); ?>" X <?php the_field('height'); ?>

		<!-- IF THIS CUSTOM FIELD HAS A SPECIFIC VALUE, ECHO SOMETHING OUT -->
		<?php if(isset($featured) && $featured == "y") : ?>
			Private Collection
		<?php endif; ?>

	</div>
<?php

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
				<a rel="prev" href="<?php echo get_permalink($previd) ?>"><</a>
				<?php
			}
			if(!empty($nextid)) {
				?>
				<a rel="next" href="<?php echo get_permalink($nextid) ?>"><i class="fas fa-chevron-circle-right"></i></a>
				<?php
			}
			?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
