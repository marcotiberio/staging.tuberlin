<?php 
	/* Template Name: Parent */ 
    
    
get_header();  ?>

	<main id="primary" class="site-main">

		<div id="logoStudio">
            <a href="<?php the_field('page_link'); ?>">
                <?php 
                    $image = get_field('logo_studio');
                    if( !empty( $image ) ): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
            </a>
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
                <span><img src="http://staging-tuberlinifa.kinsta.cloud/wp-content/uploads/2020/07/play-video.png" alt="Play Button"></span>
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

    <div class="site-main_mobile"> <!-- #main mobile -->

        <div class="floor-pad_mobile">
            <a href="http://staging-tuberlinifa.kinsta.cloud/"><img src="http://staging-tuberlinifa.kinsta.cloud/wp-content/uploads/2020/07/floorpad-mobile.png" alt="floorpad mobile"></a>
        </div>
        
        <div class="logo-studio_mobile">
            <?php 
                $image = get_field('logo_studio');
                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
        </div>

        <div class="cover-mobile" style="background-image: url(<?php the_field('cover_mobile'); ?>);
                                        background-position: center;fix
                                        background-repeat: no-repeat;
                                        background-size: cover;"></div>
        

        <div class="studio-list-mobile">
            <?php the_field('studio-list_mobile'); ?>
        </div>

        <div class="gallery-mobile">
            <?php 
            $images = get_field('gallery_mobile');
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

        <div class="intro-mobile">
            <?php the_field('intro_mobile'); ?>
        </div>

        <div class="info-mobile">
            <?php the_field('info_studio'); ?>
        </div>
        

    </div> <!-- #main mobile -->

<?php
get_footer();
