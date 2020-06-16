<?php 
	/* Template Name: Chatroom */ 
?>

<?php get_header(); ?>

	<div id="primary--page-main" class="content-area--page-main">
		<main id="main--page-main" class="site-main--page-main">

            <section class="page-chatroom">
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
