<?php 
	/* Template Name: Landing Page */
?>

<?php get_header(); ?>

<section class="background_landing">

    <?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

		endwhile; // End of the loop.
	?>

    <div class="button_logo-landing">
		<a href="http://tuberlinifa.kinsta.cloud/">
            <img src="http://staging-tuberlinifa.kinsta.cloud/wp-content/uploads/2020/06/logo.png" alt="TU Berlin IfA Logo">
        </a>
    </div>

</section>


<?php
get_sidebar();
get_footer();