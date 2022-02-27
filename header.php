<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bm
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'bm' ); ?></a>

<header id="masthead" class="site-header d-none d-xl-block">
	<div class="d-flex px-3 py-4">
		<?php bm_session_menu(); ?>
	</div>
</header><!-- #masthead -->

<nav id="bm-main-nav" class="navbar navbar-light navbar-expand-xl sticky-top bg-white py-xl-0">
	<div class="container bg-white">
		<button class="navbar-toggler border-0 ps-0 shadow-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#bm-main-menu" aria-controls="bm-main-menu" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<a class="navbar-brand m-0 p-0" href="<?php bloginfo('url')?>">
			<img src="<?php echo get_template_directory_uri(); ?>/static/images/logo.png" alt="BabyMountain Logó">
		</a>

		<div class="offcanvas offcanvas-bottom" tabindex="-1" id="bm-main-menu" aria-labelledby="bm-main-menu-label">
      <button type="button" class="btn-close text-reset position-absolute top-0 end-0 p-3" data-bs-dismiss="offcanvas" aria-label="Close"></button>
			<div class="offcanvas-body">
				<?php bm_header_menu(); ?>
				<?php bm_session_menu_mobile(); ?>
			</div>
		</div>
	</div>
</nav><!-- #site-navigation -->

<div id="page" class="site">
