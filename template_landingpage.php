<?php 
	/* Template Name: Landing Page */
?>

<?php get_header(); ?>

<section class="background_landing">

    <main>
		<?php
            $videolanding = get_field('video_landing');
            if ('' !== strval($videolanding)) {
                echo '<iframe width="100%" height="100%" src="https://player.vimeo.com/video/' . $videolanding . '" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay;"></iframe>';
            }
        ?>
	</main>

    <div class="button_logo-landing">
		<a href="http://staging-tuberlinifa.kinsta.cloud/ifa">
            <img src="http://staging-tuberlinifa.kinsta.cloud/wp-content/uploads/2020/06/logo.png" alt="TU Berlin IfA Logo">
        </a>
    </div>

</section>


<?php
get_sidebar();
get_footer();