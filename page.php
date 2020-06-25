<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tu-berlin
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

			get_template_part( 'template-parts/content', 'page' );

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
		
		<!-- Modal Info -->
		<div id="modalInfo" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>            
                <?php the_field('info_studio'); ?>
            <div id="openVideo">
                <span><img src="http://staging-tuberlinifa.kinsta.cloud/wp-content/uploads/2020/06/play-button.png" alt="Play Button"></span>
                <h3>Interview</h3>
            </div>
        </div>
    </div>

    <!-- Modal Video -->
    <div id="modalVideo" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>            
            <?php
            $videostudio = get_field('video_studio');

            if ('' !== strval($videostudio)) {
                echo '<iframe width="100%" height="100%" src="https://player.vimeo.com/video/' . $videostudio . '" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay;"></iframe>';
            }
        ?>
        </div>
    </div>

	</main><!-- #main -->

<?php
get_footer();
