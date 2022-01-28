<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package oswan
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
	<div class="wrapper">
		<!-- header start -->
		<header>
			<div class="header-area transparent-bar ptb-55">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-4">
							<div class="logo-small-device">
								<?php
								the_custom_logo();
								if (is_front_page() && is_home()) :
									?>
									<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
								<?php
							else :
								?>
									<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
								<?php
							endif;
							$oswan_description = get_bloginfo('description', 'display');
							if ($oswan_description || is_customize_preview()) :
								?>
									<p class="site-description"><?php echo $oswan_description; /* WPCS: xss ok. */ ?></p>
								<?php endif; ?>
							</div>
						</div>
						<div class="col-lg-8 col-md-8 col-8">
							<div class="header-contact-menu-wrapper pl-45">
								<div class="header-contact">
									<p>WANT TO TALK WITH US +01254 265 987</p>
								</div>
								<div class="menu-wrapper text-center">
									<button class="menu-toggle">
										<img class="s-open" alt="" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-img/menu.png">
										<img class="s-close" alt="" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-img/menu-close.png">
									</button>
									<div class="main-menu">
										<nav>
											<?php
											wp_nav_menu(array(
												'theme_location' => 'menu-1',
												'menu_id'        => 'primary-menu',
											));
											?>
										</nav>
									</div>
								</div>
							</div>
							<div class="header-cart cart-small-device">
								<button class="icon-cart">
									<i class="ti-shopping-cart"></i>
									<span class="count-style">02</span>
									<span class="count-price-add">$295.95</span>
								</button>
								<div class="shopping-cart-content">
									<ul>
										<li class="single-shopping-cart">
											<div class="shopping-cart-img">
												<a href="#"><img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/img/cart/cart-1.jpg"></a>
											</div>
											<div class="shopping-cart-title">
												<h3><a href="#">Gloriori GSX 250 R </a></h3>
												<span>Price: $275</span>
												<span>Qty: 01</span>
											</div>
											<div class="shopping-cart-delete">
												<a href="#"><i class="icofont icofont-ui-delete"></i></a>
											</div>
										</li>
										<li class="single-shopping-cart">
											<div class="shopping-cart-img">
												<a href="#"><img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/img/cart/cart-2.jpg"></a>
											</div>
											<div class="shopping-cart-title">
												<h3><a href="#">Demonissi Gori</a></h3>
												<span>Price: $275</span>
												<span class="qty">Qty: 01</span>
											</div>
											<div class="shopping-cart-delete">
												<a href="#"><i class="icofont icofont-ui-delete"></i></a>
											</div>
										</li>
										<li class="single-shopping-cart">
											<div class="shopping-cart-img">
												<a href="#"><img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/img/cart/cart-3.jpg"></a>
											</div>
											<div class="shopping-cart-title">
												<h3><a href="#">Demonissi Gori</a></h3>
												<span>Price: $275</span>
												<span class="qty">Qty: 01</span>
											</div>
											<div class="shopping-cart-delete">
												<a href="#"><i class="icofont icofont-ui-delete"></i></a>
											</div>
										</li>
									</ul>
									<div class="shopping-cart-total">
										<h4>total: <span>$550.00</span></h4>
									</div>
									<div class="shopping-cart-btn">
										<a class="btn-style cr-btn" href="#">checkout</a>
									</div>
								</div>
							</div>
						</div>
						<div class="mobile-menu-area col-12">
							<div class="mobile-menu">
								<nav id="mobile-menu-active">
									<?php
									wp_nav_menu(array(
										'theme_location' => 'menu-1',
										'menu_id'        => 'primary-menu',
									));
									?>
								</nav>
							</div>
						</div>
					</div>
				</div>
				<div class="header-cart-wrapper">
					<div class="header-cart">
						<button class="icon-cart">
							<i class="ti-shopping-cart"></i>
							<span class="count-style">02</span>
							<span class="count-price-add">$295.95</span>
						</button>
						<div class="shopping-cart-content">
							<ul>
								<li class="single-shopping-cart">
									<div class="shopping-cart-img">
										<a href="#"><img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/img/cart/cart-1.jpg"></a>
									</div>
									<div class="shopping-cart-title">
										<h3><a href="#">Gloriori GSX 250 R </a></h3>
										<span>Price: $275</span>
										<span>Qty: 01</span>
									</div>
									<div class="shopping-cart-delete">
										<a href="#"><i class="icofont icofont-ui-delete"></i></a>
									</div>
								</li>
								<li class="single-shopping-cart">
									<div class="shopping-cart-img">
										<a href="#"><img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/img/cart/cart-2.jpg"></a>
									</div>
									<div class="shopping-cart-title">
										<h3><a href="#">Demonissi Gori</a></h3>
										<span>Price: $275</span>
										<span class="qty">Qty: 01</span>
									</div>
									<div class="shopping-cart-delete">
										<a href="#"><i class="icofont icofont-ui-delete"></i></a>
									</div>
								</li>
								<li class="single-shopping-cart">
									<div class="shopping-cart-img">
										<a href="#"><img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/img/cart/cart-3.jpg"></a>
									</div>
									<div class="shopping-cart-title">
										<h3><a href="#">Demonissi Gori</a></h3>
										<span>Price: $275</span>
										<span class="qty">Qty: 01</span>
									</div>
									<div class="shopping-cart-delete">
										<a href="#"><i class="icofont icofont-ui-delete"></i></a>
									</div>
								</li>
							</ul>
							<div class="shopping-cart-total">
								<h4>total: <span>$550.00</span></h4>
							</div>
							<div class="shopping-cart-btn">
								<a class="btn-style cr-btn" href="#">checkout</a>
							</div>
						</div>
					</div>
				</div>
			</div> 
		</header>