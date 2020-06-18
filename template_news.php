<?php 
	/* Template Name: News */ 
?>

<?php get_header(); ?>

	<div id="primary--page-main" class="content-area--page-main">
		<main id="main--page-main" class="site-main--page-main">

            <section class="page-news">
                <div class="gallery-news">
				<?php if( have_rows('gallery_repeater_news') ): ?>

					<?php while( have_rows('gallery_repeater_news') ): the_row(); 

						// vars
						$image = get_sub_field('image_repeater');
						?>

						<img src="<?php echo $image['url']; ?>" />

					<?php endwhile; ?>
				
				<?php endif; ?>

				</div>
            </section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
