<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package tu-berlin
 */

get_header();
?>

	<main id="primary" class="site-main">

		<div class="embed-container">
			<?php the_field('video'); ?>
		</div>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
