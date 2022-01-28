<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package oswan
 */

?>

<footer>
	<div class="footer-top pt-210 pb-98 theme-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-12">
					<div class="footer-widget mb-30">
						<div class="footer-logo">
							<?php
							if (has_custom_logo()) {
								the_custom_logo();
							} else {
								$url =  esc_url(home_url('/'));
								$site_title = get_bloginfo('name');
								echo sprintf('<h1 class="site-title"><a href="%s" rel="home">%s</a></h1>', $url, $site_title);
							}
							?>
						</div>
						<?php
						if (is_active_sidebar('footer-support')) {
							dynamic_sidebar('footer-support');
						}
						?>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<div class="footer-widget mb-30 pl-60">
						<div class="footer-widget-title">
							<h3>QUICK LINK</h3>
						</div>
						<div class="quick-links">
							<?php
							wp_nav_menu(array(
								'theme_location' => 'menu-2',
								'menu_id'        => 'footer-menu',
							));
							?>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<div class="footer-widget mb-30">
						<div class="footer-widget-title">
							<h3>LATEST TWEET</h3>
						</div>
						<div class="food-widget-content pr-30">
							<div class="single-tweet">
								<p><a href="#">@Smith,</a> the most latgest bike store in the wold can serve you
									10 min ago</p>
							</div>
							<div class="single-tweet">
								<p><a href="#">@Smith,</a> the most latgest bike store in the wold can serve you
									10 min ago</p>
							</div>
							<div class="single-tweet">
								<p><a href="#">@Smith,</a> the most latgest bike store in the wold can serve you
									10 min ago</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<?php
					if (is_active_sidebar('footer-contact-info')) {
						dynamic_sidebar('footer-contact-info');
					}
					?>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-bottom ptb-35 black-bg">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-12">
					<div class="copyright">
						<p>

							<a href="<?php echo esc_url(__('https://wordpress.org/', 'oswan')); ?> ">
								<?php
								/* translators: %s: CMS name, i.e. WordPress. */
								printf(esc_html__('Proudly powered by %s', 'oswan'), 'WordPress');
								?>
							</a>
							<span class="sep"> | </span>
							<?php
							/* translators: 1: Theme name, 2: Theme author. */
							printf(esc_html__('Theme: %1$s by %2$s.', 'oswan'), 'oswan', '<a href="http://mahmudmeet.ooowebhostapp.com">Mahmudul Hasan</a>');
							?>
						</p>
					</div>
				</div>
				<div class="col-md-4 col-12">
					<div class="footer-payment-method">
						<a href="#"><img alt="" src="<php echo get_template_directory_uri(); ?>/assets/img/icon-img/payment.png"></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
</div>

<?php wp_footer(); ?>
</body>

</html>