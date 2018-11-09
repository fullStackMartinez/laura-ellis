<?php
/**
 * Template Name: About Page
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<div class="home-image">
				<!-- Using get_template_directory_uri() to get image from file -->
				<?php the_post_thumbnail(); ?>
			</div>

			<div class="about-content">
				<?php
				global $post;
				$content = $post->post_content;

				if ( !empty( $content ) ) :
				echo $content;
				endif;
				?>
			</div>

			<!-- START OF BIO LOOP -->
			<h3>bio</h3>
			<?php while ( have_posts() ) : the_post(); ?>

				<p class="bio"><?php the_field('bio'); ?></p>


			<?php endwhile; // end of the loop. ?>
			<!--End of bio loop -->

			<!-- START OF EXHIBITIONS LOOP -->
			<h3>exhibitions</h3>

			<?php while(have_posts()) : the_post(); ?>

				<?php

				// check for rows (parent repeater)
				if(have_rows('exhibitions_info')): ?>
					<div id="container">
						<?php

						// loop through rows (parent repeater)
						while(have_rows('exhibitions_info')): the_row(); ?>
							<div>
								<h4><?php the_sub_field('exhibition_year'); ?></h4>
								<?php

								// check for rows (sub repeater)
								if(have_rows('exhibition_information')): ?>
									<ul>
										<?php

										// loop through rows (sub repeater)
										while(have_rows('exhibition_information')): the_row();

											// display each item as a list - with a class of completed ( if completed )
											?>
											<li><?php the_sub_field('exhibition_data'); ?></li>
										<?php endwhile; ?>
									</ul>
								<?php endif; //if( get_sub_field('items') ): ?>
							</div>

						<?php endwhile; // while( has_sub_field('to-do_lists') ): ?>
					</div>
				<?php endif; // if( get_field('to-do_lists') ): ?>

			<?php endwhile; // end of the loop. ?>

			<!-- END OF EXHIBITIONS LOOP -->
			<h3>publications</h3>
			<!-- START OF PUBLICATIONS LOOP -->

			<?php while(have_posts()) : the_post(); ?>

				<?php

				// check for rows (parent repeater)
				if(have_rows('publications')): ?>
					<div id="container">
						<?php

						// loop through rows (parent repeater)
						while(have_rows('publications')): the_row(); ?>
							<div>
								<h4><?php the_sub_field('publication_year'); ?></h4>
								<?php

								// check for rows (sub repeater)
								if(have_rows('publication_info')): ?>
									<ul>
										<?php

										// loop through rows (sub repeater)
										while(have_rows('publication_info')): the_row();

											// display each item as a list - with a class of completed ( if completed )
											?>
											<li><?php the_sub_field('publication_data'); ?></li>
										<?php endwhile; ?>
									</ul>
								<?php endif; //if( get_sub_field('items') ): ?>
							</div>

						<?php endwhile; // while( has_sub_field('to-do_lists') ): ?>
					</div>
				<?php endif; // if( get_field('to-do_lists') ): ?>

			<?php endwhile; // end of the loop. ?>

			<!-- END OF PUBLICATIONS LOOP -->

			<h3>public collections</h3>

			<!-- START OF COLLECTIONS LOOP -->

			<?php while(have_posts()) : the_post(); ?>

				<?php

				// check for rows (parent repeater)
				if(have_rows('public_collections')): ?>
					<div id="container">
						<?php

						// loop through rows (parent repeater)
						while(have_rows('public_collections')): the_row(); ?>
							<div>
								<h4><?php the_sub_field('collections_year'); ?></h4>
								<?php

								// check for rows (sub repeater)
								if(have_rows('collections_info')): ?>
									<ul>
										<?php

										// loop through rows (sub repeater)
										while(have_rows('collections_info')): the_row();

											// display each item as a list - with a class of completed ( if completed )
											?>
											<li><?php the_sub_field('collections_data'); ?></li>
										<?php endwhile; ?>
									</ul>
								<?php endif; //if( get_sub_field('items') ): ?>
							</div>

						<?php endwhile; // while( has_sub_field('to-do_lists') ): ?>
					</div>
				<?php endif; // if( get_field('to-do_lists') ): ?>

			<?php endwhile; // end of the loop. ?>

			<!-- END OF COLLECTIONS LOOP -->

			<h3>education</h3>

			<!-- START OF EDUCATION LOOP -->

			<?php while(have_posts()) : the_post(); ?>

				<?php

				// check for rows (parent repeater)
				if(have_rows('education')): ?>
					<div id="container">
						<?php

						// loop through rows (parent repeater)
						while(have_rows('education')): the_row(); ?>
							<div>
								<h4><?php the_sub_field('education_year'); ?></h4>
								<?php

								// check for rows (sub repeater)
								if(have_rows('education_info')): ?>
									<ul>
										<?php

										// loop through rows (sub repeater)
										while(have_rows('education_info')): the_row();

											// display each item as a list - with a class of completed ( if completed )
											?>
											<li><?php the_sub_field('education_data'); ?></li>
										<?php endwhile; ?>
									</ul>
								<?php endif; //if( get_sub_field('items') ): ?>
							</div>

						<?php endwhile; // while( has_sub_field('to-do_lists') ): ?>
					</div>
				<?php endif; // if( get_field('to-do_lists') ): ?>

			<?php endwhile; // end of the loop. ?>
			<!-- END OF EDUCATION LOOP -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();