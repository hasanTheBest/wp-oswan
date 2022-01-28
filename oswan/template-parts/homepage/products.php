<?php
$oswan_products = oswan_custom_post_query('product', 8, 'product_cat', 'action-figures');

if (!$oswan_products->have_posts()) {
	return;
}
set_query_var('oswan_products', $oswan_products);
set_query_var('oswan_product_cat_name', 'new-bike');
?>

<div class="product-area pb-190">
	<div class="container">
		<div class="section-title text-center mb-50">
			<h2>CHOOSE YOUR BIKE</h2>
			<p><span>OSWAN</span> the most latgest bike store in the wold can serve you latest qulity of motorcycle also you can sell here your motorcycle</p>
		</div>
		<div class="product-tab-list text-center mb-80 nav product-menu-mrg" role="tablist">
			<a class="active" href="#home1" data-toggle="tab">
				<h4><?php _e('NEW BIKES', 'oswan'); ?> </h4>
			</a>
			<a href="#home2" data-toggle="tab" data-category="used-bike">
				<h4> <?php _e('Used BIKES', 'oswan'); ?> </h4>
			</a>
		</div>
		<div class="tab-content jump">
			<?php get_template_part('template-parts/loop/loop', 'ajax'); ?>
		</div>
	</div>
</div>