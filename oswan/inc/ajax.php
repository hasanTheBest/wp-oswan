<?php

/**
 * Quickview Modal
 */
function oswan_ajax_quickViewModal()
{
  if (check_ajax_referer('quickViewModal', 'reqValidity')) {
    $_pi = $_GET['productId'];
    $_pi = (int) $_pi;
    $_product = wc_get_product($_pi);
    $html = '<!-- Modal Quick View ' . $_pi . ' -->';

    $html .= '<div class="modal fade" id="modal-quickview-' . esc_attr($_pi) . '" data-modal_id= "' . esc_attr($_pi) . '" tabindex="-1" role="dialog" aria-hidden="true">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="icofont icofont-close" aria-hidden="true"></span>
                </button>
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
						<div class="modal-body">';


    $html .= '<div class="qwick-view-left">
					<div class="quick-view-learg-img">
						<div class="quick-view-tab-content tab-content">';

    if ($_product->get_image_id()) {
      $image_url = get_the_post_thumbnail_url($_pi, 'large');
    }
    $html .= '<div class="tab-pane active show fade" id="modal1" role="tabpanel">
								<img src="' . $image_url  . '" alt="">
							</div>';

    $gallery_item = '';
    if (is_array($_product->get_gallery_image_ids())) {
      foreach ($_product->get_gallery_image_ids() as $gid) {
        $image_src =  wp_get_attachment_image_src($gid, 'large');
        $gallery_item .= '<div class="tab-pane fade" id="modal' . $gid . '" role="tabpanel">
											<img src="' . $image_src[0] . '" alt="">
										</div>';
      }
    };

    $html .= $gallery_item . '</div></div><div class="quick-view-list nav" role="tablist">';

    $gallery_item_nav = '';
    if (is_array($_product->get_gallery_image_ids())) {
      foreach ($_product->get_gallery_image_ids() as $gid) {
        $image_nav_src =  wp_get_attachment_image_src($gid, 'thumbnail');
        $gallery_item_nav .= '<a class="" href="#modal' . $gid . '" data-toggle="tab" role="tab">
								<img src="' . $image_nav_src[0] . '" alt="">
							</a>';
      }
    };
    $html .= $gallery_item_nav . '</div></div>';

    $currency_symbol = get_woocommerce_currency_symbol($args['currency']);

    $html .= '<div class="qwick-view-right">
					<div class="qwick-view-content">
						<h3>' . $_product->get_name() . '</h3>
						<div class="price">
							<span class="new">' .  $currency_symbol . $_product->get_price() . '</span>
							<span class="old">' .  $currency_symbol . $_product->get_regular_price() . '</span>
						</div>';
    $html .=   '<div class="rating-number">
							<div class="quick-view-rating">
								<i class="fa fa-star reting-color"></i>
								<i class="fa fa-star reting-color"></i>
								<i class="fa fa-star reting-color"></i>
								<i class="fa fa-star reting-color"></i>
								<i class="fa fa-star reting-color"></i>
							</div>
						</div>';
    $html .=   '<p>' . $_product->get_short_description() . '</p>
						<div class="quick-view-select">
							<div class="select-option-part">
								<label>Size*</label>
								<select class="select">
									<option value="">- Please Select -</option>
									<option value="">900</option>
									<option value="">700</option>
								</select>
							</div>
							<div class="select-option-part">
								<label>Color*</label>
								<select class="select">
									<option value="">- Please Select -</option>
									<option value="">orange</option>
									<option value="">pink</option>
									<option value="">yellow</option>
								</select>
							</div>
						</div>';
    $html .=     '<div class="quickview-plus-minus">
							<div class="cart-plus-minus">
								<div class="dec qtybutton">-</div>
								<input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
								<div class="inc qtybutton">+</div>
							</div>
							<div class="quickview-btn-cart">
								<a class="btn-style" href="' . home_url('/?add_to_cart=') . $_pi . '">add to cart</a>
							</div>
							<div class="quickview-btn-wishlist">
								' . do_shortcode('[yith_wcwi_add_to_wishlist]') . '
								<a class="btn-hover" href="#"><i class="icofont icofont-heart-alt"></i></a>
							</div>
						</div>
					</div>
				</div>';


    $html .= '</div>
                </div>
            </div> 
        </div>';

    echo $html;


    die();
  }
}
add_action('wp_ajax_quickViewModal', 'oswan_ajax_quickViewModal');
add_action('wp_ajax_nopriv_quickViewModal', 'oswan_ajax_quickViewModal');

/**
 * Used Bike
 */
function oswan_usedBike()
{
  $category = $_GET['category'];
  $oswan_used_bike = oswan_custom_post_query('product', 8, 'product_cat', $category );
  
  set_query_var('oswan_used_bike', $oswan_used_bike);
  $html = '';

  $html .= get_template_part('template-parts/loop/loop', 'ajax');
  echo $html;
  
  die();
}
add_action('wp_ajax_usedBike', 'oswan_usedBike');
add_action('wp_ajax_nopriv_usedBike', 'oswan_usedBike');
