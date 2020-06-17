<?php
/*
 * Template Name: Studio - Floor 1
 * Template Post Type: post, page, product
 */
  
 get_header();  ?>

<div class="wrap">
    
    <div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content-custom', get_post_type() );

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->
    
    <!-- CUSTOM POST LAYOUT -->
    <!-- CUSTOM POST LAYOUT -->
    <!-- CUSTOM POST LAYOUT -->

    <section class="post-main">
        <div id="info-button">
            <img id="openInfo" src="http://staging-tuberlinifa.kinsta.cloud/wp-content/uploads/2020/06/info-icon.png" alt="">
        </div>
        <div class="header">
            <div class="top-left"></div>
            <div class="top-right">
                <img src="http://staging-tuberlinifa.kinsta.cloud/wp-content/uploads/2020/06/nbl-icon.png" alt="">
            </div>
        </div>
        <div class="central-hidden">
            <div id="post-intro">
                <?php the_field('intro_studio'); ?>
            </div>
        </div>
        <div class="central" 
                style="background-image: url(<?php the_field('main_photo_studio'); ?>);
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center;">
            <div id="post-info">
                <?php the_field('info_studio'); ?>
            </div>
        </div>
        <div class="footer">
            <div class="bottom-left">
                <img src="http://staging-tuberlinifa.kinsta.cloud/wp-content/uploads/2020/06/MARC-T-STAIR.png" alt="">
            </div>
            <div class="bottom-right">
                <img id="openGallery" src="http://staging-tuberlinifa.kinsta.cloud/wp-content/uploads/2020/06/gallery-icon.png" alt="">
            </div>
        </div>
    </section>

    <!-- Modal Galley -->
    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <p>Some text in the Modal..</p>
        </div>

    </div>

    <!-- Modal Galley -->
    <div id="modalInfo" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <p>Modal Info</p>
        </div>

    </div>


<?php
get_footer(); ?>