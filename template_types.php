<?php 
	/* Template Name: Types */
?>

<?php get_header(); ?>


<div class="intro-types" id="boxTypes">
    <div class="info-type">
        <div id="titleTypes">
            <h1>Types</h1>
        </div>
        <div id="arrowsTypes">
            <h1>
            <span id="arrowOne"> > </span>
            <span id="arrowTwo"> > </span>
            <span id="arrowThree"> > </span>
            </h1>
        </div>
        <div></div>
    </div>
    <div id="knowledgeTypesMobile">
        <h1>of Knowledge Production</h1>
    </div>
    <div id="infoTypes">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore 
        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
        aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum 
        dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui 
        officia deserunt mollit anim id est laborum.</p>
    </div>
    <div id="knowledgeTypes">
        <h1>of Knowledge Production</h1>
    </div>
</div>

<div class="intro-types" id="boxTypesMobile">
    <div class="info-type">
        <div id="rowOne">
            <div id="titleTypesMobile">
                <h1>Types</h1>
            </div>
            <div id="arrowsTypesMobile">
                <h1> > > > </h1>
            </div>
        </div>
        <div id="rowTwo">
            <div id="knowledgeTypesMobile">
                <h1>of Knowledge Production</h1>
            </div>
            <div id="infoTypesMobile">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore 
                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
                aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum 
                dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui 
                officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
    </div>
</div>

<div style="display: none;">

    <?php if( have_rows('preview_movie') ): ?>

        <?php while( have_rows('preview_movie') ): the_row(); 

            // vars
            $cover = get_sub_field('cover_image');
            $title = get_sub_field('title');
            ?>

            
            <img src="<?php echo $cover['url']; ?>" />
            <a href="<?php echo $title['url']; ?>" target="_blank" rel="noopener noreferrer"></a>

        <?php endwhile; ?>

    <?php endif; ?>

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