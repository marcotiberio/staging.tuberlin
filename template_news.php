<?php 
	/* Template Name: News */ 
?>

<?php get_header(); ?>

	<div id="primary--page-main" class="content-area--page-main">
		<main id="main--page-main" class="site-main--page-main">

            <section class="page-news">
                <div class="gallery-news">
				<?php 
				$images = get_field('gallery_news');
				if( $images ): ?>
					<div id="slider" class="flexslider">
						<ul class="slides">
							<?php foreach( $images as $image ): ?>
								<li>
									<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
									<p><?php echo esc_html($image['caption']); ?></p>
								</li>
							<?php endforeach; ?>
						</ul>
					</div>
					<div id="carousel" class="flexslider">
						<ul class="slides">
							<?php foreach( $images as $image ): ?>
								<li>
									<img src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" alt="Thumbnail of <?php echo esc_url($image['alt']); ?>" />
								</li>
							<?php endforeach; ?>
						</ul>
					</div>
				<?php endif; ?>
				</div>
            </section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
