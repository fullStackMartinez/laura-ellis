<?php
/**
 * Template Name: About Page
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<h1><?php the_title(); ?></h1>

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
								<h3><?php the_sub_field('exhibition_year'); ?></h3>
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
								<h3><?php the_sub_field('publication_year'); ?></h3>
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
								<h3><?php the_sub_field('collections_year'); ?></h3>
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
								<h3><?php the_sub_field('education_year'); ?></h3>
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

			<h3>representation</h3>

			<!-- START OF REP LOOP -->

			<?php while(have_posts()) : the_post(); ?>

				<?php

				// check for rows (parent repeater)
				if(have_rows('representation')): ?>
					<div id="container">
						<?php

						// loop through rows (parent repeater)
						while(have_rows('representation')): the_row(); ?>
							<div>
								<h3><?php the_sub_field('rep_name'); ?></h3>
								<p><?php the_sub_field('rep_address'); ?></p>
								<p><?php the_sub_field('rep_city_and_state'); ?></p>
								<p><?php the_sub_field('rep_phone_number'); ?></p>
								<p><?php the_sub_field('rep_email'); ?></p>
							</div>

						<?php endwhile; // while( has_sub_field('to-do_lists') ): ?>
					</div>
				<?php endif; // if( get_field('to-do_lists') ): ?>

			<?php endwhile; // end of the loop. ?>

			<!-- END OF REP LOOP -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();