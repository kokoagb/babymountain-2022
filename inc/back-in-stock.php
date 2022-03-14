<?php

function bm_back_in_stock_dequeue()
{
  wp_dequeue_style('cwginstock_frontend_css');
  wp_dequeue_style('cwginstock_bootstrap');
  wp_dequeue_script('cwginstock_js');
  wp_dequeue_script('sweetalert2');
  wp_dequeue_script('cwginstock_popup');

  if (is_product_category() || is_404() || is_search()) {
    wp_enqueue_script('cwginstock_js');
    wp_enqueue_script('sweetalert2');
    wp_enqueue_script('cwginstock_popup');
  }

  if (is_product()) {
    wp_enqueue_script('cwginstock_js');
  }
}
add_action('wp_enqueue_scripts', 'bm_back_in_stock_dequeue', 10000);
