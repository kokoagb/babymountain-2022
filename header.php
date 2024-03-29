<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BabyMoutain
 */

$is_landing = strpos(get_page_template_slug(), 'landing') !== false;

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<link rel="apple-touch-icon" sizes="57x57" href="/favicons/apple-icon-57x57.png?v=2">
	<link rel="apple-touch-icon" sizes="60x60" href="/favicons/apple-icon-60x60.png?v=2">
	<link rel="apple-touch-icon" sizes="72x72" href="/favicons/apple-icon-72x72.png?v=2">
	<link rel="apple-touch-icon" sizes="76x76" href="/favicons/apple-icon-76x76.png?v=2">
	<link rel="apple-touch-icon" sizes="114x114" href="/favicons/apple-icon-114x114.png?v=2">
	<link rel="apple-touch-icon" sizes="120x120" href="/favicons/apple-icon-120x120.png?v=2">
	<link rel="apple-touch-icon" sizes="144x144" href="/favicons/apple-icon-144x144.png?v=2">
	<link rel="apple-touch-icon" sizes="152x152" href="/favicons/apple-icon-152x152.png?v=2">
	<link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-icon-180x180.png?v=2">
	<link rel="icon" type="image/png" sizes="192x192" href="/favicons/android-icon-192x192.png?v=2">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicons/favicon-32x32.png?v=2">
	<link rel="icon" type="image/png" sizes="96x96" href="/favicons/favicon-96x96.png?v=2">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicons/favicon-16x16.png?v=2">
	<link rel="manifest" href="/favicons/manifest.json?v=2">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/favicons/ms-icon-144x144.png?v=2">
	<meta name="theme-color" content="#ffffff">

	<!-- Pinterest -->

	<meta name="p:domain_verify" content="e462f2a7b6124e939abb265fb1298de4" />

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php wp_body_open(); ?>

	<!-- Facebook Page Widget -->
	<div id="fb-root"></div>
	<script>
		(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s);
			js.id = id;
			js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.9&appId=1861475137451218";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>

	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'bm'); ?></a>

	<?php if ($pagename !== 'silent-night' && !$is_landing) : ?>
		<header id="masthead" class="site-header d-none d-xl-block">
			<div class="d-flex align-items-center px-3 pt-4 pb-5">
				<div class="site-social-icons d-inline-flex gap-2">
					<a href="https://www.facebook.com/babymountainhimalaya" target="_blank" class="d-block">
						<?php bm_facebook_icon('site-header-facebook-icon'); ?>
					</a>
					<a href="https://www.instagram.com/babymountain.himalaya" target="_blank" class="d-block">
						<?php bm_insta_icon('site-header-insta-icon'); ?>
					</a>
					<a href="https://hu.pinterest.com/babymhimalaya" target="_blank" class="d-block">
						<?php bm_pinterest_icon('site-header-pinterest-icon'); ?>
					</a>
					<a href="https://www.youtube.com/channel/UClWy9zp6FpebwtkDDzvqlNg" target="_blank" class="d-block">
						<?php bm_youtube_icon('site-header-youtube-icon'); ?>
					</a>
				</div>
				<?php bm_session_menu(); ?>
				<ul class="d-flex align-items-center list-unstyled m-0 ms-3 gap-3">
					<li>
						<form action="<?php echo get_site_url(); ?>" method="get">
							<input type="search" name="s" class="form-control form-control-sm" placeholder="Keresés...">
							<input type="hidden" name="post_type" value="product" />
						</form>
					</li>
					<li>
						<?php bm_cart_link(); ?>
					</li>
				</ul>
			</div>
		</header><!-- #masthead -->

		<nav id="bm-main-nav" class="navbar navbar-light navbar-expand-xl sticky-top py-xl-0">
			<div class="container">
				<button class="navbar-toggler border-0 ps-0 shadow-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#bm-main-menu" aria-controls="bm-main-menu" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<a class="navbar-brand m-0 p-0" href="<?php bloginfo('url') ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/static/images/logo.png" alt="BabyMountain Logó" loading="lazy" />
				</a>

				<span class="d-xl-none">
					<?php bm_cart_link(); ?>
				</span>

				<div class="offcanvas offcanvas-start" tabindex="-1" id="bm-main-menu" aria-labelledby="bm-main-menu-label">
					<button type="button" class="btn-close text-reset position-absolute top-0 end-0 p-3 d-block d-xl-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
					<div class="offcanvas-body">
						<?php bm_header_menu(); ?>
						<?php bm_session_menu_mobile(); ?>
					</div>
				</div>
			</div>
		</nav><!-- #site-navigation -->


		<img src="<?php echo get_template_directory_uri(); ?>/static/images/ret.jpg" alt="Rét" loading="lazy" class="header-herbs mb-5" />

		<?php if (is_front_page()) : ?>
			<div class="bm-novecento-sans h5 mb-5 mt-n4 text-center text-primary text-uppercase px-2">
				Természetes gyógymód Kisbabádnak és az egész Családnak
			</div>
		<?php endif; ?>
	<?php endif; ?>