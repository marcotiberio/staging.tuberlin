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
        <div class="central">
            <div class="central-slider">
				<?php if( have_rows('cover_repeater_studio') ): ?>

					<?php while( have_rows('cover_repeater_studio') ): the_row(); 

						// vars
						$cover = get_sub_field('cover_repeater');
						?>
						
						<img src="<?php echo $cover['url']; ?>" />

					<?php endwhile; ?>
				
				<?php endif; ?>
            </div>

            <div class="central-menu">
                <ul>
                    <?php if( get_field('seminar_label') ): ?>
                        <li class="item" id="openSeminar"><?php the_field('seminar_label'); ?></li>
                    <?php endif; ?>
                    <?php if( get_field('ma-studio_label') ): ?>
                        <li class="item" id="openMAstudio"><?php the_field('mastudio_label'); ?></li>
                    <?php endif; ?>
                    <?php if( get_field('bachelor_label') ): ?>
                        <li class="item" id="openBachelor"><?php the_field('bachelor_label'); ?></li>
                    <?php endif; ?>
                    <?php if( get_field('live-project_label') ): ?>
                        <li class="item" id="openLiveproject"><?php the_field('liveproject_label'); ?></li>
                    <?php endif; ?>
                </ul>
            </div>
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

    <!-- Modal Seminar -->
    <div id="modalSeminar" class="modal">
        <div class="modal-content">
            <span id="closeSeminar"><?php the_field('seminar_code'); ?></span>
            <div class="gallery_studio">
            <?php if( have_rows('seminar-gallery_studio') ): ?>

                <ul>

                <?php while( have_rows('seminar-gallery_studio') ): the_row(); 

                    // vars
                    $image = get_sub_field('image_new');
                    ?>

                    <li>
                        <img id="openInsidemodal" id="imgInsidemodal" src="<?php echo $image['url']; ?>" />
                        
                        <div class="insidemodal">
                            <div class="modal-content">
                                <span id="closeInsidemodal">X</span>
                                <div class="gallery-insidemodal">
                                <?php if( have_rows('slide_repeater') ): ?>

                                    <?php while( have_rows('slide_repeater') ): the_row(); 

                                        // vars
                                        $photo = get_sub_field('slide_image');
                                        ?>

                                        
                                            <img src="<?php echo $photo['url']; ?>" />


                                    <?php endwhile; ?>

                                    <?php endif; ?>

                                </div>
                            </div>
                        </div>
                    </li>
                    

                <?php endwhile; ?>

                </ul>

                <?php endif; ?>
            </div>
        </div>
    </div>

    <!-- Modal MA Studio -->
    <div id="modalMAstudio" class="modal">
        <div class="modal-content">
            <span id="closeMAstudio">&times;</span>
            <div class="gallery_studio">
                <?php 
                $images = get_field('mastudio-gallery_studio');
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

    <!-- Modal Bahelor -->
    <div id="modalBachelor" class="modal">
        <div class="modal-content">
            <span id="closeBachelor">&times;</span>
            <div class="gallery_studio">
                <?php 
                $images = get_field('bachelor-gallery_studio');
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

    <!-- Modal Live Project -->
    <div id="modalLiveproject" class="modal">
        <div class="modal-content">
            <span id="closeLiveproject">&times;</span>
            <div class="gallery_studio">
                <?php 
                $images = get_field('liveproject-gallery_studio');
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
    </div>



<?php
get_footer(); ?>