<?php
/*
 * Template Name: Art
 */
get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<!-- Loop that will display info from the first post of each category and link to that categories' archive page-->
			<ul class="artwork-grid">
				<?php
				$args = array(
					'hide_empty' => 1,
					'orderby' => 'name',
					'order' => 'ASC'
				);
				$categories = get_categories($args);
				foreach($categories as $category) {
					$category_id = get_cat_ID($category->name);
					$category_link = get_category_link($category_id);
					$term = get_category_by_slug($category->name);

					$the_query = new WP_Query(array(
						'post_type' => 'Artwork',
						'posts_per_page' => 1,
						'category_name' => $category->slug,
						'orderby' => 'modified'
					));

					while($the_query->have_posts()) :
						$the_query->the_post();
						$cat = get_terms('artwork');
						?>
						<li>
							<div class="grid-container">
								<a href="<?php echo esc_url($category_link); ?>">
									<p class="image"><?php the_post_thumbnail('categories'); ?></p>
								</a>
								<div class="middle">
									<div class="text"><?php echo $term->name; ?></div>
								</div>
							</div>
							<p class="hidden-title"><?php echo $term->name; ?></p>
						</li>
					<?php
					endwhile;

				} ?>
			</ul>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();