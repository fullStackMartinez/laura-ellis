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
			?>
			<div class="upfront">
				<div class="close">
					<a href="<?php echo get_category_link($current_cat_id); ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/img/ellisx.png" id="xx" />
					</a>
				</div>
				<?php
				if(!empty($previd)) {
					?>
					<a rel="prev" href="<?php echo get_permalink($previd) ?>" class="prev"><img src="<?php echo get_template_directory_uri(); ?>/img/ellis2018bleft.png"/></a>
					<?php
				}
				the_post_thumbnail(); ?>
				<?php
				if(!empty($nextid)) {
					?>
					<a rel="next" href="<?php echo get_permalink($nextid) ?>" class="next"><img src="<?php echo get_template_directory_uri(); ?>/img/ellis2018b.png"/></a>
					<?php
				} ?>
			</div>
			<?php $featured = get_field('is_this_a_sold_item?'); ?>
			<div class="artwork-container">

				<span><?php the_title(); ?>,
				<?php the_field('artwork_year'); ?><span class="comma">,</span></span>
				<span><?php the_field('artwork_medium'); ?><span class="comma">,</span></span>
				<span><?php the_field('width'); ?>" X <?php the_field('height'); ?></span>

				<!-- IF THIS CUSTOM FIELD HAS A SPECIFIC VALUE, ECHO SOMETHING OUT -->
				<?php if(isset($featured) && $featured == "y") : ?>
					Private Collection
				<?php endif; ?>

			</div>
			<?php


			wp_reset_postdata();
			?>
			<!-- Next previous loop that collects post ids of a category and uses them for navigation next/previous -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
