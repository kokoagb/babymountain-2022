<?php

/**
 * bm functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package BabyMoutain
 */

if (!defined('BM_VERSION')) {
	// Replace the version number of the theme on each release.
	define('BM_VERSION', '1.0.2');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function bm_setup()
{

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support('title-tag');

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support('post-thumbnails');

	register_nav_menus(array(
		'primary' => __('Főmenü', 'bm'),
		'session' => __('Fiókmenü', 'bm'),
		'footer'  => __('Láblécmenü', 'bm')
	));

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	add_theme_support('woocommerce');
	add_theme_support('wc-product-gallery-zoom');
	add_theme_support('wc-product-gallery-lightbox');
	add_theme_support('wc-product-gallery-slider');
}
add_action('after_setup_theme', 'bm_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function bm_content_width()
{
	$GLOBALS['content_width'] = apply_filters('bm_content_width', 640);
}
add_action('after_setup_theme', 'bm_content_width', 0);

/**
 * Enqueue scripts and styles.
 */
function bm_scripts()
{
	global $pagename;

	// Styles
	wp_enqueue_style('bm-style', get_template_directory_uri() . '/build/assets/main/public.css', array(), BM_VERSION);
	wp_style_add_data('bm-style', 'rtl', 'replace');

	// Scripts
	wp_enqueue_script('bm-navigation', get_template_directory_uri() . '/build/assets/main/index.js', array(), BM_VERSION, true);

	if ($pagename === 'silent-night') {
		wp_enqueue_style('bm-swiper', get_template_directory_uri() . '/build/assets/swiper/index.css', array(), BM_VERSION);
		wp_enqueue_script('bm-swiper', get_template_directory_uri() . '/build/assets/swiper/index.js');
		wp_enqueue_script('bm-vue', get_template_directory_uri() . '/static/js/vue.js', array(), BM_VERSION, true);
		wp_enqueue_style('bm-carousel', get_template_directory_uri() . '/build/blocks/carousel/public.css', array(), BM_VERSION);
	}
}
add_action('wp_enqueue_scripts', 'bm_scripts');

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Register custom blocks
 */
require get_template_directory() . '/inc/blocks.php';

/**
 * Bootstrap nav walker
 */
require get_template_directory() . '/inc/bootstrap_nav_walker.php';

/**
 * Navigation
 */
require get_template_directory() . '/inc/navigation.php';

/**
 * Icons
 */
require get_template_directory() . '/inc/icons.php';

/**
 * Woocommerce
 */
require get_template_directory() . '/inc/woocommerce.php';

/**
 * Translations
 */
require get_template_directory() . '/inc/translations.php';

/**
 * Back in stock notifier
 */
require get_template_directory() . '/inc/back-in-stock.php';
