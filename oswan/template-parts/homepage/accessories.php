<?php 
$oswan_accessories = oswan_custom_post_query('product', 9, 'product_cat', 'accessories'); 

if(!$oswan_accessories->have_posts()){
    return;
}
?>

<div class="accessories-area pt-152 pb-130">
    <div class="container-fluid">
        <div class="section-title section-fluid text-center mb-60">
            <h2>ACCESSORIES</h2>
            <p><span>OSWAN</span> the most latgest bike store in the wold can serve you latest qulity of motorcycle also you can sell here your motorcycle</p>
        </div>
        <div class="accessories-wrapper">
            <div class="product-accessories-active owl-carousel">

                <?php while ($oswan_accessories->have_posts()) : $oswan_accessories->the_post(); ?>
                    <div class="product-wrapper">
                        <div class="product-img">
                            <a href="<?php the_permalink(); ?>">
                                <img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'medium')); ?>" alt="<?php the_title(); ?>">
                            </a>
                            <div class="product-action">
                                <a class="action-plus-2" title="Add To Cart" href="<?php echo do_shortcode('[add_to_cart_url id="' . get_the_ID() . '"]'); ?>">
                                    <i class=" ti-shopping-cart"></i>
                                </a>
                                <a class="action-cart-2" title="Wishlist" href="#">
                                    <i class=" ti-heart"></i>
                                </a>
                                <a class="quick-view-btn action-reload" title="Quick View" data-product_id="<?php echo esc_attr(get_the_ID()); ?>" href="#">
                                    <i class=" ti-zoom-in"></i>
                                    <?php wp_nonce_field('quickViewModal'); ?>
                                </a>
                            </div>
                            <div class="product-content-wrapper-2">
                                <div class="product-title-price-2 text-center">
                                    <span><?php _e('Price: ', 'oswan');
                                                echo get_woocommerce_currency_symbol();
                                                echo esc_html(get_post_meta(get_the_ID(), '_price', true)) ?></span>
                                    <h4><a href="<? the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile;
                wp_reset_query(); ?>
            </div>
        </div>
    </div>
</div>