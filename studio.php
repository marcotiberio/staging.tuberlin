<?php
/*
 * Template Name: Studio
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
            <img src="http://staging-tuberlinifa.kinsta.cloud/wp-content/uploads/2020/06/info-icon.png" alt="">
        </div>
        <div class="header">
            <div class="top-left"></div>
            <div class="top-right">
                <img src="http://staging-tuberlinifa.kinsta.cloud/wp-content/uploads/2020/06/nbl-icon.png" alt="">
            </div>
        </div>
        <div class="central">
            <?php 
                $image = get_field('main_photo_studio');
                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
            <?php the_field('intro_studio'); ?>
        </div>
        <div class="footer">
            <div class="bottom-left">
                <img src="http://staging-tuberlinifa.kinsta.cloud/wp-content/uploads/2020/06/MARC-T-STAIR.png" alt="">
            </div>
            <div class="bottom-right">
                <img src="http://staging-tuberlinifa.kinsta.cloud/wp-content/uploads/2020/06/gallery-icon.png" alt="">
            </div>
        </div>
    </section>


<?php
get_footer(); ?>