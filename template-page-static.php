<?php 
	/* Template Name: Page Static */ 
?>

<?php get_header(); ?>

	<div id="primary--page-main" class="content-area--page-main">
		<main id="main--page-main" class="site-main--page-main">

        <section class="page-static-layout">
            <div class="page-left">
                <div class="column1">
                    <?php the_field('column-one_staticpage'); ?>
                    <!-- <h3>Kontakt:</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> -->
                </div>
                <div class="column2">
                    <?php the_field('column-two_staticpage'); ?>
                    <!-- <h3>Standort:</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure 
                        dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt 
                        mollit anim id est laborum.</p> -->
                </div>
            </div>
            <div class="page-right">
                    <?php 
                        $image = get_field('image_staticpage');
                        $size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)
                        if( $image ) {
                            echo wp_get_attachment_image( $image, $size );
                        } ?>
                    <?php endif; ?>
                <!-- <img src="http://staging-tuberlinifa.kinsta.cloud/wp-content/uploads/2020/06/plan.png" alt="University Plan"> -->
            </div>
        </section>
        <div class="impressum">
            <h3>Impressum</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure 
                dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt 
                mollit anim id est laborum.</p>
        </div>
        
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
