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

 $is_landing = strpos(get_page_template_slug(), 'landing') !== false;

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

<?php if ( !$is_landing ): ?>
<header id="masthead" class="site-header d-none d-xl-block">
	<div class="d-flex align-items-center px-3 pt-4 pb-5">
		<div class="site-header-social-icons d-inline-flex gap-2">
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

		<a class="navbar-brand m-0 p-0" href="<?php bloginfo('url')?>">
			<img src="<?php echo get_template_directory_uri(); ?>/static/images/logo.png" alt="BabyMountain Logó" loading="lazy" />
		</a>

		<?php bm_cart_link('d-xl-none'); ?>

		<div class="offcanvas offcanvas-bottom" tabindex="-1" id="bm-main-menu" aria-labelledby="bm-main-menu-label">
      <button type="button" class="btn-close text-reset position-absolute top-0 end-0 p-3 d-block d-xl-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
			<div class="offcanvas-body">
				<?php bm_header_menu(); ?>
				<?php bm_session_menu_mobile(); ?>
			</div>
		</div>
	</div>
</nav><!-- #site-navigation -->


<img src="<?php echo get_template_directory_uri(); ?>/static/images/ret.png" alt="Rét" loading="lazy" class="header-herbs mb-5" />
<?php endif; ?>
