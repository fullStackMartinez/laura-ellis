<?php
/*
 * Template Name: Art
 */
get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<!-- Loop that will display info from the first post of each category and link to that categories' archive page-->
			<?php
			$args = array(
				'hide_empty' => 1,
				'orderby' => 'date',
				'order' => 'ASC'
			);
			$categories = get_categories($args);
			foreach($categories as $category) {
				$category_id = get_cat_ID($category->name);
				$category_link = get_category_link($category_id);
				$the_query = new WP_Query(array(
					'post_type' => 'Artwork',
					'posts_per_page' => 1,
					'category_name' => $category->slug
				));

				while($the_query->have_posts()) :
					$the_query->the_post(); ?>
					<a href="<?php echo esc_url($category_link); ?>"><?php the_post_thumbnail('categories'); ?></a><?php
				endwhile;
			}
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();