<section class="cwginstock-subscribe-form text-start <?php esc_html_e($variation_class); ?>">
  <div class="mb-3">
    <?php
    $form_title = esc_html__('Email when stock available', 'back-in-stock-notifier-for-woocommerce');
    esc_html_e(isset($get_option['form_title']) && '' != $get_option['form_title'] ? $instock_api->sanitize_text_field($get_option['form_title']) : $form_title);
    ?>
  </div>
  <div class="cwginstock-panel-body">
    <?php if ($name_field_visibility) : ?>
      <input type="text" class="cwgstock_name form-control mb-3" name="cwgstock_name" placeholder="<?php esc_html_e($instock_api->sanitize_text_field($name_placeholder)); ?>" value="<?php esc_html_e($subscriber_name); ?>" />
    <?php endif; ?>
    <input type="email" class="cwgstock_email form-control" name="cwgstock_email" placeholder="<?php esc_html_e($instock_api->sanitize_text_field($placeholder)); ?>" value="<?php esc_html_e($email); ?>" />
    <?php if ($phone_field_visibility) : ?>
      <input type="tel" class="cwgstock_phone" name="cwgstock_phone" />
    <?php endif; ?>
    <?php do_action('cwg_instock_after_email_field', $product_id, $variation_id); ?>
    <input type="hidden" class="cwg-phone-number" name="cwg-phone-number" value="" />
    <input type="hidden" class="cwg-phone-number-meta" name="cwg-phone-number-meta" value="" />
    <input type="hidden" class="cwg-product-id" name="cwg-product-id" value="<?php echo intval($product_id); ?>" />
    <input type="hidden" class="cwg-variation-id" name="cwg-variation-id" value="<?php echo intval($variation_id); ?>" />
    <input type="hidden" class="cwg-security" name="cwg-security" value="<?php esc_html_e($security); ?>" />
    <?php $additional_class_name = isset($get_option['btn_class']) && '' != $get_option['btn_class'] ? str_replace(',', ' ', $get_option['btn_class']) : ''; ?>
    <input type="submit" name="cwgstock_submit" class="cwgstock_button btn btn-primary <?php esc_html_e($additional_class_name); ?>" <?php echo do_shortcode(apply_filters('cwgstock_submit_attr', '', $product_id, $variation_id)); ?> value="<?php esc_html_e($instock_api->sanitize_text_field($button_label)); ?>" />
    <div class="cwgstock_output"></div>
    <?php do_action('cwginstock_after_submit_button', $product_id, $variation_id); ?>
  </div>
</section>