<?php
if ('new-bike' == get_query_var('oswan_product_cat_name')) {
  $oswan_products = get_query_var('oswan_products');
  $oswan_tab_pan_id = 'home1';
  $oswan_tab_pan_class = 'tab-pane active';
} else {
  $oswan_products = get_query_var('oswan_used_bike');
  $oswan_tab_pan_id = 'home2';
  $oswan_tab_pan_class = 'tab-pane';
}

$oswan_found_products = $oswan_products->found_posts;
$oswan_i = 0;
?>

<div class="<?php echo esc_attr($oswan_tab_pan_class); ?>" id="<?php echo esc_attr($oswan_tab_pan_id); ?>">
  <div class="product-slider-active owl-carousel">
    <?php while ($oswan_products->have_posts()) : $oswan_products->the_post();
      global $oswan_i;
      $oswan_i++;
      $price = get_post_meta(get_the_ID(), '_price', 'true');
      $bike_attributes = get_post_meta(get_the_ID(), '_product_attributes', true);
      ?>

      <?php if ($oswan_i % 2 === 1) : ?>
        <div class="product-wrapper-bundle">
        <?php endif; ?>
        <div class="product-wrapper">
          <div class="product-img">
            <a href="<?php the_permalink() ?>">
              <img src="<?php the_post_thumbnail_url(get_the_ID(), 'medium_large') ?>" alt="<?php the_title(); ?>">
            </a>
            <?php if (is_array($bike_attributes)) : ?>
              <div class="product-item-dec">
                <ul>
                  <?php
                      foreach ($bike_attributes as $bike_attribute) {
                        $value = esc_html($bike_attribute['value']);
                        printf('<li>%s</li>', $value);
                      }
                      ?>
                </ul>
              </div>
            <?php endif; ?>
            <div class="product-action">
              <a class="action-plus-2" title="Add To Cart" href="<?php echo do_shortcode('[add_to_cart_url id="' . get_the_ID() . '"]'); ?>">
                <i class=" ti-shopping-cart"></i>
              </a>
              <a id="wishlist" class="action-cart-2" title="Wishlist" href="#">
                <i class=" ti-heart"></i>
              </a>
              <a class="quick-view-btn action-reload" title="Quick View" data-product_id="<?php echo esc_attr(get_the_ID()); ?>" href="#">
                <i class=" ti-zoom-in"></i>
                <?php wp_nonce_field('quickViewModal'); ?>
              </a>
            </div>
            <div class="product-content-wrapper">
              <div class="product-title-spreed">
                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                <?php if (!empty($rpm)) : ?>
                  <span><?php echo esc_html($rpm);
                            _e(' RPM', 'oswan') ?></span>
                <?php endif; ?>
              </div>
              <div class="product-price">
                <span><?php echo get_woocommerce_currency_symbol() . ' ' . esc_html($price); ?></span>
              </div>
            </div>
          </div>
        </div>
        <?php if ($oswan_i % 2 === 0 || $oswan_found_products / $oswan_i === 1) : ?>
        </div>
    <?php endif;

    endwhile;
    wp_reset_query(); ?>
  </div>
</div>