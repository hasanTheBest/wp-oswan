<div class="slider-area">
    <div class="slider-active owl-carousel">
        <?php
        $fp_args = array(
            'post_type' => 'product',
            'tax_query' => array(
                array(
                    'taxonomy' => 'product_visibility',
                    'field'    => 'name',
                    'terms'    => 'featured',
                    'operator' => 'IN'
                ),
            ),
            'posts_per_page' => 6
        );
        $oswan_featured_products = new WP_Query($fp_args); ?>
   
        <?php //echo do_shortcode('[featured_products columns="1" class="featured-products"]');
        
        if ($oswan_featured_products->have_posts()) :
            while ($oswan_featured_products->have_posts()) : $oswan_featured_products->the_post();
                ?>
                <div class="single-slider slider-1" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>)">
                    <div class="container">
                        <div class="slider-content slider-animated-1">
                            <div class="slider-img text-center">
                                <img class="animated" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium_large') ?>" alt="<?php the_title(); ?>">
                            </div>
                            <div class="slider-text-img">
                                <h6 class="animated"><?php _e('BOOK YOUR BIKE INSTANTLY AND ENJOY DISCOUNT', 'oswan'); ?></h6>
                                <img class="animated" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium') ?>" alt="<?php the_title(); ?>">
                            </div>
                            <h2 class="animated"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></h2>
                        </div>
                    </div>
                </div>
            <?php
            endwhile;
            wp_reset_query();
        endif
        ?>


        <!-- 
        <div class="single-slider slider-1" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/slider/slider-bg.jpg)">
            <div class="container">
                <div class="slider-content slider-animated-1">
                    <div class="slider-img text-center">
                        <img class="animated" src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/bike-2.png" alt="slider images">
                    </div>
                    <div class="slider-text-img">
                        <h6 class="animated">BOOK YOUR BIKE INSTANTLY AND ENJOY DISCOUNT</h6>
                        <img class="animated" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-img/bike.png" alt="slider images">
                    </div>
                    <h2 class="animated">MOTORCYCLE</h2>
                </div>
            </div>
        </div>
        <div class="single-slider slider-1" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/slider/slider-bg.jpg)">
            <div class="container">
                <div class="slider-content slider-animated-1">
                    <div class="slider-img text-center">
                        <img class="animated" src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/bike-1.png" alt="slider images">
                    </div>
                    <div class="slider-text-img">
                        <h6 class="animated">BOOK YOUR BIKE INSTANTLY AND ENJOY DISCOUNT</h6>
                        <img class="animated" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-img/bike.png" alt="slider images">
                    </div>
                    <h2 class="animated">MOTORCYCLE</h2>
                </div>
            </div>
        </div> 
        -->
    </div>
    
            <?php 
            if(is_active_sidebar('social-media-1')){
                dynamic_sidebar('social-media-1');
            }
            ?>
            <!-- <li class="facebook"><a href="#"><i class="icofont icofont-social-facebook"></i></a></li>
            <li class="twitter"><a href="#"><i class="icofont icofont-social-twitter"></i></a></li>
            <li class="pinterest"><a href="#"><i class="icofont icofont-social-pinterest"></i></a></li> -->
       
    <div class="language-currency-wrapper">
        <div class="language-currency">
            <div class="language">
                <select class="select-header orderby">
                    <option value="">ENG</option>
                    <option value="">BANGLA </option>
                    <option value="">HINDI</option>
                </select>
            </div>
            <div class="currency">
                <select class="select-header orderby">
                    <option value="">$USD</option>
                    <option value="">US </option>
                    <option value="">EURO</option>
                </select>
            </div>
        </div>
    </div>
</div>