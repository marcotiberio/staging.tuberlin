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
        <div id="logoStudio">
            <?php 
                $image = get_field('logo_studio');
                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
        </div>
        <div class="central"
                style="background-image: url(<?php the_field('main_photo_studio'); ?>);
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center;">
        </div>
        <div class="central-menu">
            <div class="item1">Lorem</div>
            <div class="item2">Ipsum</div>
            <div class="item3">Dolor</div>
            <div class="item4">Sit Amet</div>
        </div>
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



<?php
get_footer(); ?>