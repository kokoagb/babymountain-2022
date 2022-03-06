<a href="<?php echo wc_get_cart_url(); ?>" class="bm-cart-link <?php echo $args['class']; ?>">
  <img src="<?php echo get_template_directory_uri(); ?>/static/images/cart.png" alt="Kosár" loading="lazy" class="bm-cart-link-icon" />
  <?php if ($args['item_count'] > 0): ?>
    <span class="bm-cart-link-count"><?php echo $args['item_count']; ?></span>
  <?php endif; ?>
</a>
