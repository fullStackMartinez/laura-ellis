<?php
/*
 * Template Name: Gallery
 */

get_header();
?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<h3>representation</h3>
			<!-- START OF REP LOOP -->
			<?php while(have_posts()) : the_post(); ?>

				<?php

				// check for rows (parent repeater)
				if(have_rows('representation')): ?>

					<ul>
					<?php

					// loop through rows (parent repeater)
					while(have_rows('representation')): the_row(); ?>

						<li id="container">
							<h4><?php the_sub_field('rep_name'); ?></h4>
							<p><?php the_sub_field('rep_address'); ?></p>
							<p><?php the_sub_field('rep_city_and_state'); ?></p>
							<p><?php the_sub_field('rep_phone_number'); ?></p>
							<p><?php the_sub_field('rep_email'); ?></p>
						</li>


					<?php endwhile; // while( has_sub_field('to-do_lists') ): ?>
					</ul>
				<?php endif; // if( get_field('to-do_lists') ): ?>

			<?php endwhile; // end of the loop. ?>

			<!-- END OF REP LOOP -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();