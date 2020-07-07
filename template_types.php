<?php 
	/* Template Name: Types */
?>

<?php get_header(); ?>


<div class="intro-types" id="boxTypes">
        <div id="titleTypes">
            <h1>TYPES</h1>
        </div>
        <div id="infoTypes">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore 
            et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
            aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum 
            dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui 
            officia deserunt mollit anim id est laborum.</p>
        </div>
    </div>


<section id="moviesTypes">

    <?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

		endwhile; // End of the loop.
	?>

</section>


<?php
get_sidebar();
get_footer();