<?php
$oswan_standard_blog_post = new WP_Query(array(
    'post_type' => 'post',
    'posts_per_page' => 1
));
?>

<div class="blog-area pt-150 pb-110">
    <div class="container">
        <div class="section-title text-center mb-60">
            <h2>BLOG POST</h2>
            <p><span>OSWAN</span> the most latgest bike store in the wold can serve you latest qulity of motorcycle also you can sell here your motorcycle</p>
        </div>
        <div class="row">
            <?php while ($oswan_standard_blog_post->have_posts()) : $oswan_standard_blog_post->the_post(); ?>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-hm-wrapper mb-40">
                        <div class="blog-img">
                            <a href="<?php the_permalink(); ?>"><img src="<?php echo esc_url(get_the_post_thumbnail_url( get_the_ID(), 'thumbnail' )); ?>" alt="<?php echo esc_attr(get_the_title()); ?>"></a>
                            <div class="blog-date">
                                <h4> <?php echo esc_html(get_the_date('F j, Y')); ?> </h4>
                            </div>
                            <div class="blog-hm-social">
                                <?php echo oswan_share_on_social_media(get_the_ID()); ?>
                            </div>
                        </div>
                        <div class="blog-hm-content">
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h3>
                            <?php the_excerpt(); ?>
                        </div>
                    </div>
                </div>
            <?php endwhile;
            wp_reset_query(); ?>

            
        </div>
    </div>
</div>