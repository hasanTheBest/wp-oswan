<?php 
$oswan_latest_offers = oswan_custom_post_query('product', 6, 'product_cat', 'offers'); 

if($oswan_latest_offers->have_posts()){
    return;
}
?>

<div class="latest-product-area pt-205 pb-145 bg-img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/banner/banner-4.jpg)">
    <div class="container-fluid">
        <div class="latest-product-slider owl-carousel">
            <?php while ($oswan_latest_offers->have_posts()) : $oswan_latest_offers->the_post() ?>
                <div class="single-latest-product slider-animated-2">
                    <div class="row">
                        <div class="col-lg-7 col-md-12 col-12">
                            <div class="latest-product-img">
                                <img class="animated" src="<?php the_post_thumbnail_url(get_the_ID(), 'large'); ?>" alt="image">
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-12 col-12">
                            <div class="latest-product-content">
                                <h2 class="animated"><?php the_title(); ?></h2>
                                <p><?php the_excerpt(); ?></p>
                                <div class="latest-price">
                                    <h3 class="animated"><?php _e('NOW AT', 'oswan'); ?> <span><?php echo esc_html(get_post_meta(get_the_ID(), '_sell_price', true)); ?></span></h3>
                                    <span class="animated"><?php _e('35% DISCOUNT', 'oswan'); ?></span>
                                </div>
                                <div class="latext-btn">
                                    <a class="animated" href="<?php the_permalink(); ?>"><?php _e('Select A BIKE', 'oswan'); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile;
            wp_reset_query(); ?>
            <!-- <div class="single-latest-product slider-animated-2">
                <div class="row">
                    <div class="col-lg-7 col-col-12 col-12">
                        <div class="latest-product-img">
                            <img class="animated" src="<?php echo get_template_directory_uri(); ?>/assets/img/banner/banner-3.png" alt="image">
                        </div>
                    </div>
                    <div class="col-lg-5 col-col-12 col-12">
                        <div class="latest-product-content">
                            <h2 class="animated">LATEST OFFER <br>FOR POPULAR BIKES</h2>
                            <p class="animated"><span>OSWAN</span> the most latgest bike store in the wold can serve you latest qulity of motorcycle also you can sell here your motorcycle it quo minus iduod maxie placeat facere possimus, omnis voluptas assumenda est, omnis dolor llendus. Temporibus autem quibusdam </p>
                            <div class="latest-price">
                                <h3 class="animated">NOW AT <span>$1250</span></h3>
                                <span class="animated">35% DISCOUNT</span>
                            </div>
                            <div class="latext-btn">
                                <a class="animated" href="#">SELECT A BIKE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</div>