<?php

// GENERAL THEME HOOKS
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

function bm_wc_wrapper_start() {
    echo '<main id="primary" class="container">';
}
add_action('woocommerce_before_main_content', 'bm_wc_wrapper_start', 10);

function bm_wc_wrapper_end() {
    echo '</main>';
}
add_action('woocommerce_after_main_content', 'bm_wc_wrapper_end', 10);

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 39 );

// PRODUCT PAGE HOOKS
function bm_product_page_variations_info () {
  global $product;

  if ($product->is_type( 'variable' )) {
    $variations = array();

    foreach ($product->get_available_variations() as $variation) {
      if (
        array_key_exists('attributes', $variation) &&
        array_key_exists('attribute_pa_toltelek', $variation['attributes'])
      ) {
        $variation_slug = $variation['attributes']['attribute_pa_toltelek'];
        $variations[] = get_term_by('slug', $variation_slug, 'pa_toltelek');
      }
    }

    get_template_part( 'template-parts/product_page_variations_info', null, array( 'variations' => $variations ));
  }
}
add_filter( 'woocommerce_after_single_product_summary', 'bm_product_page_variations_info', 1);

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );

function bm_template_single_title ( $args ) {
  the_title( '<h1 class="product_title entry-title h3 text-uppercase">', '</h1>' );
};
add_action( 'woocommerce_single_product_summary', 'bm_template_single_title', 5 );

function bm_dropdown_variation_attribute_options_args ($args) {
  $args['class'] = 'form-select';
  return $args;
};
add_filter('woocommerce_dropdown_variation_attribute_options_args', 'bm_dropdown_variation_attribute_options_args', 10, 1);

function bm_quantity_input_args ( $classes ) {
  $classes[] = 'form-control';
  return $classes;
};
add_filter('woocommerce_quantity_input_classes', 'bm_quantity_input_args', 10, 1);

function bm_form_field_args ( $args ) {
  $text_types = array(
    'text',
    'password',
    'datetime',
    'datetime-local',
    'date',
    'month',
    'time',
    'week',
    'number',
    'email',
    'url',
    'tel',
    'textarea'
  );
  if ( in_array($args['type'], $text_types) ) {
    $args['input_class'][] = 'form-control';
  }
  return $args;
}
add_filter('woocommerce_form_field_args', 'bm_form_field_args');

function bm_shop_loop_item_wrapper_start () {
  echo '<div class="bm-product-loop-image-wrapper">';
}
add_action('woocommerce_before_shop_loop_item_title', 'bm_shop_loop_item_wrapper_start', 9);

function bm_shop_loop_item_wrapper_end () {
  echo '<div class="bm-product-loop-cta">TOVÁBB A TERMÉKRE</div></div>';
}
add_action('woocommerce_before_shop_loop_item_title', 'bm_shop_loop_item_wrapper_end', 11);

function bm_cart_count_fragments( $fragments ) {
  $item_count = WC()->cart->get_cart_contents_count();

  ob_start();
  bm_cart_link('', $item_count);
  $cart_link = ob_get_contents();
  ob_end_clean();

  $fragments['.bm-cart-link'] = $cart_link;
  return $fragments;
}
add_filter( 'woocommerce_add_to_cart_fragments', 'bm_cart_count_fragments', 10, 1 );