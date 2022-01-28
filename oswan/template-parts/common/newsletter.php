<div class="newsletter-area">
    <div class="container">
        <div class="newsletter-wrapper-all theme-bg-2">
            <div class="row">
                <div class="col-lg-5 col-12 col-md-12">
                    <div class="newsletter-img bg-img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/banner/newsletter-bg.png)">
                        <img alt="image" src="<?php echo get_template_directory_uri(); ?>/assets/img/team/newsletter-img.png">
                    </div>
                </div>
                <div class="col-lg-7 col-12 col-md-12">
                    <?php

                    if (is_active_sidebar('email-subscription')) {
                        dynamic_sidebar('email-subscription');
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>