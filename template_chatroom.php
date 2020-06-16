<?php 
	/* Template Name: Chatroom */ 
?>

<?php get_header(); ?>

	<div id="primary--page-main" class="content-area--page-main">
		<main id="main--page-main" class="site-main--page-main">

        <section class="page-chatroom">
            <div class="instagram-post_container">
                <?php the_field('instagram_post'); ?>
            </div>
            <div class="instagram-post_container">
                <?php the_field('instagram_post'); ?>
            </div>
            <div class="instagram-post_container">
                <?php the_field('instagram_post'); ?>
            </div>
        </section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
