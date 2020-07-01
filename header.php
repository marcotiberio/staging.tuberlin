<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tu-berlin
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'tu-berlin' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<div class="custom-logo-link" id="openMenu">
				<img id="openMenu" src="http://staging-tuberlinifa.kinsta.cloud/wp-content/uploads/2020/06/logo.png" alt="Logo">
			</div>
			
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'tu-berlin' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-main',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
		<div class="nav--search" id="navigationSearch">
			<?php get_search_form(); ?>
		</div>
		<!-- <div class="nav--overlay">
			<i class="fas fa-bars" id="open_menuOverlay"></i>
		</div>

		<section id="menuOverlay">
			<main class="menuOverlay--inside">
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-overlay',
					'menu_id'        => 'menu-overlay',
				) );
				?>
			</main>
		</section> -->

	</header><!-- #masthead -->
