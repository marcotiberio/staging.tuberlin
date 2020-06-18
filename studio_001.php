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

    <!-- Modal Gallery -->
    <div id="modalGallery" class="modal">

        <div class="modal-content">
            <span class="close">&times;</span>
            <div class="gallery_studio">
                <?php 
                $images = get_field('gallery_studio');
                if( $images ): ?>
                    <ul>
                        <?php foreach( $images as $image ): ?>
                            <li>
                                <a href="<?php echo $image['url']; ?>">
                                    <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
                                </a>
                                <p><?php echo $image['caption']; ?></p>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </div>
        </div>

    </div>

    <!-- Modal Info -->
    <div id="modalInfo" class="modal">

        <div class="modal-content">
            <span class="close">&times;</span>            
                <?php the_field('info_studio'); ?>
            <div id="openVideo" style="display: block;"><h1>PREVIEW</h1></div>
        </div>

    </div>

    <!-- Modal Video -->
    <div id="modalVideo" class="modal">

        <div class="modal-content">
            <span class="close">&times;</span>            
            <div class="embed-container">
                <?php the_field('oembed'); ?>
            </div>
        </div>



<?php
get_footer(); ?>