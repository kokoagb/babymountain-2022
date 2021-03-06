<?php

// GENERAL THEME HOOKS
remove_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action('woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
remove_action('woocommerce_no_products_found', 'wc_no_products_found');

function bm_wc_wrapper_start()
{
  echo '<main id="primary" class="container">';
}
add_action('woocommerce_before_main_content', 'bm_wc_wrapper_start', 10);

function bm_wc_wrapper_end()
{
  echo '</main>';
}
add_action('woocommerce_after_main_content', 'bm_wc_wrapper_end', 10);

remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);
add_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 39);

// PRODUCT PAGE HOOKS
function bm_product_page_variations_info()
{
  global $product;

  if ($product->is_type('variable')) {
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

    get_template_part('template-parts/product_page_variations_info', null, array('variations' => $variations));
  }
}
add_filter('woocommerce_after_single_product_summary', 'bm_product_page_variations_info', 1);

remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_title', 5);

function bm_template_single_title($args)
{
  the_title('<h1 class="product_title entry-title h3 text-uppercase">', '</h1>');
};
add_action('woocommerce_single_product_summary', 'bm_template_single_title', 5);

function bm_dropdown_variation_attribute_options_args($args)
{
  $args['class'] = 'form-select';
  return $args;
};
add_filter('woocommerce_dropdown_variation_attribute_options_args', 'bm_dropdown_variation_attribute_options_args', 10, 1);

function bm_quantity_input_args($classes)
{
  $classes[] = 'form-control';
  return $classes;
};
add_filter('woocommerce_quantity_input_classes', 'bm_quantity_input_args', 10, 1);

function bm_form_field_args($args)
{
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
  if (in_array($args['type'], $text_types)) {
    $args['input_class'][] = 'form-control';
  }
  return $args;
}
add_filter('woocommerce_form_field_args', 'bm_form_field_args');

function bm_shop_loop_item_wrapper_start()
{
  echo '<div class="bm-product-loop-image-wrapper">';
}
add_action('woocommerce_before_shop_loop_item_title', 'bm_shop_loop_item_wrapper_start', 9);

function bm_shop_loop_item_wrapper_end()
{
  echo '<div class="bm-product-loop-cta">TOV??BB A TERM??KRE</div></div>';
}
add_action('woocommerce_before_shop_loop_item_title', 'bm_shop_loop_item_wrapper_end', 11);

function bm_cart_count_fragments($fragments)
{
  $item_count = WC()->cart->get_cart_contents_count();

  ob_start();
  bm_cart_link('', $item_count);
  $cart_link = ob_get_contents();
  ob_end_clean();

  $fragments['.bm-cart-link'] = $cart_link;
  return $fragments;
}
add_filter('woocommerce_add_to_cart_fragments', 'bm_cart_count_fragments', 10, 1);

function bm_wc_pagination($args)
{
  $args['prev_text'] = '<';
  $args['next_text'] = '>';
  return $args;
}
add_filter('woocommerce_pagination_args',   'bm_wc_pagination');

function bm_shipping_labels($label, $method)
{
  if (strstr($label, 'Szem??lyes ??tv??tel')) {
    $label .= ' <small>(9462 V??lcsej, F?? utca 37. c??m alatt, el??zetes egyeztet??s ut??n)</small>';
  }

  return $label;
}
add_filter('woocommerce_cart_shipping_method_full_label', 'bm_shipping_labels', 10, 2);

function bm_cart_disclaimer()
{
  echo '<p class="text-justify mb-3">K??rj??k, fusd ??t m??g egyszer figyelmesen a megrendelni k??v??nt term??kek list??j??t, a hozz??juk tartoz?? k??peket, darabsz??mot ??s egy??b le??r??sokat, majd t??ltsd ki a megrendel??shez kapcsol??d?? ??rlapot. Megrendel??sedet m??g ebben a f??zisban m??dos??thatod.</p>';
}
add_action('woocommerce_before_cart', 'bm_cart_disclaimer', 10, 0);

function bm_thankyou_bacs($order_number)
{
  echo '<p>K??r??nk, a <strong>rendel??ssz??mot (' . $order_number . ') ??s a nevedet</strong>&nbsp;az ??tutal??s/befizet??s <strong>???Megjegyz??s???</strong> rovat??ban <strong>t??ntesd fel!</strong></p>' .
    '<p>A kisz??ll??t??s csak az ut??n lehets??ges, miut??n a teljes v??tel??r ??sszege meg??rkezett a kedvezm??nyezett banksz??mlasz??m??ra.</p>';
}
add_action('woocommerce_thankyou_bacs', 'bm_thankyou_bacs', 100, 1);

function bm_exclude_product_categories($q)
{

  $tax_query = (array) $q->get('tax_query');

  $tax_query[] = array(
    'taxonomy' => 'product_cat',
    'field' => 'slug',
    'terms' => array('winter-spirit'),
    'operator' => 'NOT IN'
  );


  $q->set('tax_query', $tax_query);
}
add_action('woocommerce_product_query', 'bm_exclude_product_categories');

function bm_product_stock()
{
  global $product;

  $availability = $product->get_availability();

  if ($product->is_in_stock()) {
    // echo '<div class="stock in-stock mt-2"><small>' . esc_attr($availability['availability']) . '</small></div>';
  } else {
    echo '<div class="stock out-of-stock"><small class="d-block product-coming-soon">Hamarosan ??jra a polcokon</small></div>';
  }
}
add_action('woocommerce_after_shop_loop_item', 'bm_product_stock', 10);
remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart');

function bm_loop_add_to_cart_args($args, $product)
{
  if (!$product->is_in_stock()) {
    $args['class'] .= ' d-none';
  }
  return $args;
}
add_filter('woocommerce_loop_add_to_cart_args', 'bm_loop_add_to_cart_args', 10, 2);

function bm_no_products_found()
{
  echo do_shortcode('<p>Sajnos a keres??s nem hozott eredm??nyt, de itt l??thatod legn??pszer??bb term??keinket:</p>[products limit="4" columns="4" orderby="popularity" ]');
}
add_action('woocommerce_no_products_found', 'bm_no_products_found');

function bm_review_order_before_submit()
{
  get_template_part('template-parts/checkout_privacy');
}
add_action('woocommerce_review_order_before_submit', 'bm_review_order_before_submit');

function bm_checkout_process()
{
  if (!$_POST['privacy']) {
    wc_add_notice('Az adatkezel??s elfogad??sa k??telez??.', 'error');
  }
}
add_action('woocommerce_checkout_process', 'bm_checkout_process');

function bm_email_before($order, $sent_to_admin, $plain_text, $email)
{
  set_query_var('order', $order);
  set_query_var('sent_to_admin', $sent_to_admin);
  set_query_var('plain_text', $plain_text);
  set_query_var('email', $email);
  get_template_part('template-parts/email_before');
};
add_action('woocommerce_email_before_order_table', 'bm_email_before', 10, 4);

function bm_woocommerce_email_styles($css)
{
  $css .= ".woocommerce-bacs-bank-details { display: none; }";
  $css .= "#body_content_inner { text-align: justify !important; }";
  $css .= "address.address { border: none !important; padding: 0 !important; font-style: normal !important; }";
  return $css;
}
add_filter('woocommerce_email_styles', 'bm_woocommerce_email_styles');

function bm_email_after($email)
{
  get_template_part('template-parts/email_after');
};
add_action('woocommerce_email_footer', 'bm_email_after', 10, 1);

function bm_register_form()
{
  get_template_part('template-parts/register_privacy');
}
add_action('woocommerce_register_form', 'bm_register_form', 100);

function bm_register_post($username, $email, $validation_errors)
{
  if (!isset($_POST['privacy'])) {
    $validation_errors->add('register_privacy_error', 'K??rlek, fogadd el az adatkezel??si szab??lyzatot');
  }
  return $validation_errors;
}

add_action('woocommerce_register_post', 'bm_register_post', 10, 3);

function bm_get_subcategory_terms($terms, $taxonomies, $args)
{
  if (in_array('product_cat', $taxonomies) && is_shop()) {
    return array_filter($terms, function ($term) {
      return !in_array($term->slug, ['uj_termek', 'slager_termek', 'papirzsakok']);
    });
  }

  return $terms;
}

add_filter('get_terms', 'bm_get_subcategory_terms', 10, 3);

function bm_payment_reminder_icon()
{
  echo '<style>
    a.button.wc-action-button.wc-action-button-woopar.woopar:after {
        content: "\f531";
    }
  </style>';
}

add_action('admin_head', 'bm_payment_reminder_icon');

function bm_add_admin_order_custom_actions_button($actions, $order)
{
  if (($order->get_payment_method() === 'borgun' || $order->get_payment_method() === 'Bankk??rty??s fizet??s') && $order->has_status(array('on-hold', 'pending', 'cancelled'))) {
    $action_slug = 'email_invoice';

    $actions[$action_slug] = array(
      'url'    => wp_nonce_url(
        admin_url('admin-ajax.php?action=change_order_status&order_id=' . $order->get_id()),
        'change-order-status'
      ),
      'name'   => 'Fizet??si m??d ??t??ll??t??sa',
      'action' => $action_slug,
    );
  }
  return $actions;
}

add_filter('woocommerce_admin_order_actions', 'bm_add_admin_order_custom_actions_button', 10, 2);

function bm_change_order_status()
{
  if (current_user_can('edit_shop_orders') && check_admin_referer('change-order-status') && isset($_GET['order_id']) && get_post_type(absint(wp_unslash($_GET['order_id']))) === 'shop_order') {
    $order_id = absint(wp_unslash($_GET['order_id']));
    $order = wc_get_order($order_id);
    $order->set_payment_method('bacs');
    $order->set_payment_method_title('Banki ??tutal??s');
    $order->save();
    $message = "K??rty??s fizet??sed nem siker??lt, rendel??sed \"visszamondva\" st??tuszt kapott. Hogy rendel??sed ne vesszen el, a S??hegyecsk??ket kifizetheted banki ??tutal??ssal is, melyhez az utal??si adatok:\n\nN??v: BabyMountain Kft.\nSz??mlasz??m: 11737083-24683180\nSz??mlavezt?? bank: OTP Bank\nIBAN: HU13117370832468318000000000\nBIC/Swift: OTPVHUHB";
    $order->add_order_note($message, 1);
    if (wp_safe_redirect(wp_get_referer() ? wp_get_referer() : admin_url('edit.php?post_type=shop_order'))) {
      exit();
    }
  }
}

add_action('wp_ajax_change_order_status', 'bm_change_order_status');

function bm_add_custom_order_status_actions_button_css()
{
  $action_slug = 'email_invoice';
  echo '<style>.wc-action-button-' . $action_slug . '::after { font-family: woocommerce !important; content: "\e014" !important; }</style>';
}

add_action('admin_head', 'bm_add_custom_order_status_actions_button_css');


function bm_remove_additional_info_tab($tabs)
{
  unset($tabs['additional_information']);
  return $tabs;
}
add_filter('woocommerce_product_tabs', 'bm_remove_additional_info_tab', 98);
