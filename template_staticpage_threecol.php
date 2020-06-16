<?php 
	/* Template Name: Static Page - Three Columns */ 
?>

<?php get_header(); ?>

	<div id="primary--page-main" class="content-area--page-main">
		<main id="main--page-main" class="site-main--page-main">

        <section class="page-static-layout_3">
            <div class="column1">
                <?php the_field('column-one_staticpageIII'); ?>
            </div>
            <div class="column2">
                <?php the_field('column-two_staticpageIII'); ?>
            </div>
            <div class="column3">
                <?php the_field('column-three_staticpageIII'); ?>
            </div>
        </section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
