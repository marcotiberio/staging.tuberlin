<?php 
	/* Template Name: Landing Page */
?>

<?php get_header(); ?>

<section class="background_landing">

    <?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
	?>

    <div class="button_logo-landing">
		<a href="http://staging-tuberlinifa.kinsta.cloud/ifa">
            <img src="http://staging-tuberlinifa.kinsta.cloud/wp-content/uploads/2020/06/logo.png" alt="TU Berlin IfA Logo">
        </a>
    </div>

</section>


<?php
get_sidebar();
get_footer();