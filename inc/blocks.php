<?php

function bm_blocks_init()
{
	// Bootstrap blocks
	register_block_type(__DIR__ . '/../build/blocks/container');
	register_block_type(__DIR__ . '/../build/blocks/row');
	register_block_type(__DIR__ . '/../build/blocks/col');

	// BabyMountain blocks
	register_block_type(__DIR__ . '/../build/blocks/button');
	register_block_type(__DIR__ . '/../build/blocks/carousel');
	// register_block_type( __DIR__ . '/../build/blocks/newsletter-signup' );
	register_block_type(__DIR__ . '/../build/blocks/testimonials');
	register_block_type(__DIR__ . '/../build/blocks/products');
	register_block_type(__DIR__ . '/../build/blocks/product-categories');
}
add_action('init', 'bm_blocks_init');

function bm_blocks_frontend_scripts()
{
	if (has_block('bm-blocks/carousel') || has_block('bm-blocks/testimonials')) {
		wp_enqueue_script(
			'bm-blocks-swiper',
			get_template_directory_uri() . '/build/assets/swiper/index.js'
		);
		wp_enqueue_style(
			'bm-blocks-swiper',
			get_template_directory_uri() . '/build/assets/swiper/index.css'
		);
	}
	// if ( has_block( 'bm-blocks/newsletter-signup' ) ) {
	// 	wp_enqueue_script(
	// 		'bm-blocks-newsletter-signup-validation',
	//     get_template_directory_uri() . '/build/assets/newsletter-signup-validation/index.js'
	// 	);
	// }
	if (has_block('bm-blocks/herbs')) {
		wp_enqueue_script(
			'bm-blocks-herbs',
			get_template_directory_uri() . '/build/assets/herbs/index.js'
		);
		wp_enqueue_style(
			'bm-blocks-herbs',
			get_template_directory_uri() . '/build/assets/herbs/public.css'
		);
	}
}
add_action('wp_enqueue_scripts', 'bm_blocks_frontend_scripts');

function bm_block_editor_assets()
{
	wp_enqueue_style(
		'bm-block-editor-css',
		get_template_directory_uri() . '/build/assets/main/index.css'
	);
}

add_action('enqueue_block_editor_assets', 'bm_block_editor_assets');

function bm_block_category($categories)
{
	$category_slugs = wp_list_pluck($categories, 'slug');
	$categories = in_array('babymountain', $category_slugs, true) ? $categories : array_merge(
		array(
			array(
				'slug'  => 'babymountain',
				'title' => 'BabyMountain',
				'icon'  => null,
			),
		),
		$categories,
	);
	$categories = in_array('bootstrap', $category_slugs, true) ? $categories : array_merge(
		array(
			array(
				'slug'  => 'bootstrap',
				'title' => 'Bootstrap',
				'icon'  => null,
			),
		),
		$categories,
	);
	return $categories;
}
add_filter('block_categories_all', 'bm_block_category');

function bm_dynamic_block_products($args)
{
	$args = wp_parse_args($args, array('className' => ''));
	$map_fn = function ($product) {
		return array(
			'id' => $product->get_id(),
			'name' => $product->get_name(),
			'permalink' => $product->get_permalink(),
			'image_url' => get_the_post_thumbnail_url($product->get_id(), 'woocommerce_thumbnail'),
			'price' => $product->get_price()
		);
	};
	$products = wc_get_products(array(
		'status' => 'publish',
		'limit' => -1,
		'visibility' => 'visible'
	));
	$mapped_products = array_map($map_fn, $products);
	$markup = '<div class="wp-block-bm-blocks-products ' . $args['className'] . '">' .
		'<div class="swiper">' .
		'<div class="swiper-wrapper"></div>' .
		'</div>' .
		'<div class="wp-block-bm-blocks-products-swiper-button-next swiper-button-next"></div>' .
		'<div class="wp-block-bm-blocks-products-swiper-button-prev swiper-button-prev"></div>' .
		'</div>' .
		'<script>window.bmProducts = ' . json_encode($mapped_products) . '</script>';
	return $markup;
}

function bm_dynamic_block_product_categories($args)
{
	$args = wp_parse_args($args, array('className' => ''));
	$mapped_categories = array();
	$categories = get_categories(array(
		'taxonomy' => 'product_cat',
	));

	foreach ($categories as $category) {
		$image_url = wp_get_attachment_url(get_term_meta($category->term_id, 'thumbnail_id', true));
		if ($image_url) {
			$mapped_categories[] = array(
				'name' => $category->name,
				'permalink' => get_category_link($category),
				'image_url' => wp_get_attachment_url(get_term_meta($category->term_id, 'thumbnail_id', true))
			);
		}
	}

	$markup = '<div class="wp-block-bm-blocks-product-categories ' . $args['className'] . '">' .
		'<div class="swiper">' .
		'<div class="swiper-wrapper"></div>' .
		'</div>' .
		'<div class="wp-block-bm-blocks-product-categories-swiper-button-next swiper-button-next"></div>' .
		'<div class="wp-block-bm-blocks-product-categories-swiper-button-prev swiper-button-prev"></div>' .
		'</div>' .
		'<script>window.bmCategories = ' . json_encode($mapped_categories) . '</script>';
	return $markup;
}

// Workaround for assets loaded by block.json
add_filter('plugins_url', function ($url, $path, $plugin) {
	if (strpos($url, get_template_directory()) !== false) {
		$url = str_replace('wp-content/plugins' . ABSPATH, '', $url);
	}
	return $url;
}, 10, 3);

// function lakewood_print_scripts_styles() {
// 	if( is_admin() ) {
// 			// Print Scripts
// 			global $wp_scripts;
// 			foreach( $wp_scripts->queue as $handle ) :
// 				 echo '<div style="margin: 5px 3%; border: 1px solid #eee; padding: 20px;">Script <br />';
// 				 echo "Handle: " . $handle . '<br />';
// 				 echo "URL: " . $wp_scripts->registered[$handle]->src;
// 				 echo '</div>';
// 			endforeach;

// 			// Print Styles
// 			global $wp_styles;
// 			foreach( $wp_styles->queue as $handle ) :
// 				 echo '<div style="margin: 5px 3%; border: 1px solid #eee; padding: 20px; background-color: #e0e0e0;">Style <br />';
// 				 echo "Handle: " . $handle . '<br />';
// 				 echo "URL: " . $wp_styles->registered[$handle]->src;
// 				 echo '</div>';
// 			endforeach;

// 			die();
// 	}
// }
// add_action( 'wp_print_scripts', 'lakewood_print_scripts_styles', 101 );

// function activate_gutenberg_product( $can_edit, $post_type ) {
// 	if ( $post_type == 'product' ) {
// 		$can_edit = true;
// 	}
// 	return $can_edit;
// }
// add_filter( 'use_block_editor_for_post_type', 'activate_gutenberg_product', 10, 2 );

// function enable_taxonomy_rest( $args ) {
// 	$args['show_in_rest'] = true;
// 	return $args;
// }
// add_filter( 'woocommerce_taxonomy_args_product_cat', 'enable_taxonomy_rest' );
// add_filter( 'woocommerce_taxonomy_args_product_tag', 'enable_taxonomy_rest' );
