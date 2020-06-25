<?php
/*
 * Template Name: Program
 * Template Post Type: post
 */

get_header();
?>

	<main id="primary" class="site-main">

		<div id="logoStudio">
			<?php 
				$image = get_field('logo_studio');
				if( !empty( $image ) ): ?>
					<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
			<?php endif; ?>
		</div>

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content-program', get_post_type() );


		endwhile; // End of the loop.
		?>
		<div class="footer">
            <div class="bottom-left">
                <a onclick="goBack()">
                    <img src="http://staging-tuberlinifa.kinsta.cloud/wp-content/uploads/2020/06/MARC-T-STAIR.png" alt="">
                </a>
            </div>
            <div class="bottom-right">
                <img id="openInfo" src="http://staging-tuberlinifa.kinsta.cloud/wp-content/uploads/2020/06/info-icon.png" alt="Icon Info">
            </div>
        </div>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
