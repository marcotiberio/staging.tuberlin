<?php 
	/* Template Name: News */ 
?>

<?php get_header(); ?>

	<div id="primary--page-main" class="content-area--page-main">
		<main id="main--page-main" class="site-main--page-main">

            <section class="page-news">
                <div class="gallery-news">
				<?php

				// check if the repeater field has rows of data
				if( have_rows('gallery_repeater_news') ):

					// loop through the rows of data
					while ( have_rows('gallery_repeater_news') ) : the_row();

						// display a sub field value
						the_sub_field('image_repeater');
						the_sub_field('link_repeater');

					endwhile;

				else :

					// no rows found

				endif;

				?>
				</div>
            </section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
