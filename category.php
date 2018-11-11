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
		<div class="category-title">
			<?php single_cat_title(''); ?>
		</div>
			<!--BEGINNING OF CATEGORY LOOP, WHICH WILL SHOW ARTWORK THAT SHARE THE SAME CATEGORY -->
			<?php $current_category = single_cat_title("", false);

			// The Arguments
			$args = array(
				'post_type' => 'Artwork',
				'category_name' => $current_category,
				'posts_per_page' => -1,
				'orderby' => 'modified'
			);

			// The Query
			$the_query = new WP_Query($args); ?>

			<?php

			// If we have the posts...
			if($the_query->have_posts()) : ?>

				<!-- Start the loop the loop -->
				<?php while($the_query->have_posts()) : $the_query->the_post(); ?>

				<div class="grid-item">
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
				</div>

				<?php endwhile; endif; // end of the loop. ?>

			<?php wp_reset_postdata(); ?>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();