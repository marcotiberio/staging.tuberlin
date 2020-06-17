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
        <div id="info-button">
            <img id="openModal" src="http://staging-tuberlinifa.kinsta.cloud/wp-content/uploads/2020/06/info-icon.png" alt="">
        </div>
        <div class="header">
            <div class="top-left"></div>
            <div class="top-right">
                <img src="http://staging-tuberlinifa.kinsta.cloud/wp-content/uploads/2020/06/nbl-icon.png" alt="">
            </div>
        </div>
        <div class="central-hidden">
            <div id="post-intro">
                <?php the_field('intro_studio'); ?>
            </div>
        </div>
        <div class="central" 
                style="background-image: url(<?php the_field('main_photo_studio'); ?>);
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center;">
            <div id="post-info">
                <?php the_field('info_studio'); ?>
            </div>
        </div>
        <div class="footer">
            <div class="bottom-left">
                <img src="http://staging-tuberlinifa.kinsta.cloud/wp-content/uploads/2020/06/MARC-T-STAIR.png" alt="">
            </div>
            <div class="bottom-right">
                <img src="http://staging-tuberlinifa.kinsta.cloud/wp-content/uploads/2020/06/gallery-icon.png" alt="">
            </div>
        </div>
    </section>

    <!-- The Modal -->
    <div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
    <span class="close">&times;</span>
    <p>Some text in the Modal..</p>
    </div>

    </div>

    <script>
        // Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("openModal");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
    </script>


<?php
get_footer(); ?>