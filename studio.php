<?php
/*
 * Template Name: Studio
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
        <div class="header">
            <div class="top-left"></div>
            <div class="top-right">Two</div>
        </div>
        <div class="central">
            <img id="main-photo" src="http://staging-tuberlinifa.kinsta.cloud/wp-content/uploads/2020/06/studio_main_photo.png" alt="">
            <div id="post-intro">
                <h3>TEMPO-EXILMUSEUM AM ANHALTER BAHNHOF</h3>
                <h4>Master Seminar</h4>
                <p>Am Anhalter Bahnhof sollen 4 bis 6 Container, die bis vor Kurzem als Teil der Tempohome 
                    Anlage für Geflüchtete in Berlin genutzt wurden, in eine temporäre Installation umgebaut 
                    werden. Initiiert wurde das Projekt von der Stiftung Exilmuseum Berlin, die damit auf Ort und 
                    Inhalt des geplanten Neubauvorhabens Exilmuseum aufmerksam machen möchte. In enger 
                    Kooperation mit dem Fachgebiet Habitat Unit wollen wir in dem Seminar EXIL die Grundlagen 
                    für die geplante Installation schaffen. Hierzu wollen wir uns sowohl den technisch-
                    konstruktiven, als auch inhaltlich programmatischen Teilaspekten der geplanten 
                    Containerinstallation widmen. Die Ergebnisse des Seminars sollen dann direkt in die 
                    anschließende Realisierungsphase des Projekts im Sommer 2020 einfließen.
                    Die ursprüngliche Intention des Seminars war es, diese Untersuchung hands-on an einem der 
                    Container in den Werkstätten des IfA in der Ackerstraße durchzuführen. Da dieses Vorgehen 
                    aktuell situationsbedingt nicht mehr wie geplant stattfinden kann, werden wir nun, solange es 
                    zu keiner Aufhebung der Beschränkungen kommt, auf ein online Format ausweichen.</p>
            </div>
        </div>
        <div class="footer">
            <div class="bottom-left">Three</div>
            <div class="bottom-right">Four</div>
        </div>
    </section>


<?php
get_footer(); ?>