<?php
/**
 * Template Name: Abstract
 */
get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<header class="page-header">
				<?php
				the_archive_title('<h1 class="page-title">', '</h1>');
				the_archive_description('<div class="archive-description">', '</div>');
				?>
			</header><!-- .page-header -->

			<!-- START OF ABSTRACT ARTWORK LOOP -->
			<?php
			$args = array(
				'posts_per_page' => -1,
				'post_type' => 'Artwork',
				'category_name' => 'abstract',
			);

			// query
			$the_query = new WP_Query($args);

			?>
			<?php if($the_query->have_posts()): ?>
				<?php while($the_query->have_posts()) : $the_query->the_post(); ?>
					<?php $featured = get_field('is_this_a_sold_item?'); ?>
					<div class="artwork-container"><?php
						the_post_thumbnail(); ?>
						<p><?php the_title(); ?></p>

						<?php the_field('artwork_year'); ?>,
						<?php the_field('artwork_medium'); ?>,
						<?php the_field('width'); ?>,
						<?php the_field('height'); ?>

						<!-- IF THIS CUSTOM FIELD HAS A SPECIFIC VALUE, ECHO SOMETHING OUT -->
						<?php if(isset($featured) && $featured == "y") : ?>
							Private Collection
						<?php endif; ?>

					</div>
				<?php

				endwhile; endif; ?>

			<!-- END OF ABSTRACT LOOP -->


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
