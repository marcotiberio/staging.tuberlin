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
        <div class="header">
            <div class="top-left"></div>
            <div class="top-right"></div>
        </div>
        <div class="central">
            
        </div>
        <div class="footer">
            <div class="bottom-left"></div>
            <div class="bottom-right"></div>
        </div>
    </section>


<?php
get_footer(); ?>