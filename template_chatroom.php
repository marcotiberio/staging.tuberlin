<?php 
	/* Template Name: Chatroom */ 
?>

<?php get_header(); ?>

	<div id="primary--page-main" class="content-area--page-main">
		<main id="main--page-main" class="site-main--page-main">

            <?php
                while ( have_posts() ) :
                    the_post();

                    get_template_part( 'template-parts/content', 'page' );

                endwhile; // End of the loop.
            ?>

            <section class="page-chatroom" style="display: none;">
                <div class="instagram-post_container">
                    <?php $instagram_url = get_field( 'instagram_post', false, false ); ?>
                    <img src="<?php echo $instagram_url; ?>media/?size=l" />
                </div>
                <div class="instagram-post_container">
                    <?php $instagram_url = get_field( 'instagram_post', false, false ); ?>
                    <img src="<?php echo $instagram_url; ?>media/?size=l" />
                </div>
                <div class="instagram-post_container">
                    <?php $instagram_url = get_field( 'instagram_post', false, false ); ?>
                    <img src="<?php echo $instagram_url; ?>media/?size=l" />
                </div>
                <div class="instagram-post_container">
                    <?php $instagram_url = get_field( 'instagram_post', false, false ); ?>
                    <img src="<?php echo $instagram_url; ?>media/?size=l" />
                </div>
                <div class="instagram-post_container">
                    <?php $instagram_url = get_field( 'instagram_post', false, false ); ?>
                    <img src="<?php echo $instagram_url; ?>media/?size=l" />
                </div>
                <div class="instagram-post_container">
                    <?php $instagram_url = get_field( 'instagram_post', false, false ); ?>
                    <img src="<?php echo $instagram_url; ?>media/?size=l" />
                </div>
                <div class="instagram-post_container">
                    <?php $instagram_url = get_field( 'instagram_post', false, false ); ?>
                    <img src="<?php echo $instagram_url; ?>media/?size=l" />
                </div>
                <div class="instagram-post_container">
                    <?php $instagram_url = get_field( 'instagram_post', false, false ); ?>
                    <img src="<?php echo $instagram_url; ?>media/?size=l" />
                </div>
                <div class="instagram-post_container">
                    <?php $instagram_url = get_field( 'instagram_post', false, false ); ?>
                    <img src="<?php echo $instagram_url; ?>media/?size=l" />
                </div>
            </section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
