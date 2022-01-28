<?php
function oswan_widgets_init()
{
  // default sidebar
  register_sidebar(array(
    'name'          => esc_html__('Sidebar', 'oswan'),
    'id'            => 'sidebar-1',
    'description'   => esc_html__('Add widgets here.', 'oswan'),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ));
  
  // For showing social median icon on slider section
  register_sidebar(array(
    'name'          => esc_html__('Social Media Icon', 'oswan'),
    'id'            => 'social-media-1',
    'description'   => esc_html__('Add widgets here.', 'oswan'),
    'before_widget' => '<div class="slider-social">',
    'after_widget'  => '</div>',
    'before_title'  => '',
    'after_title'   => '',
  ));

  // Email Subscription Form
  register_sidebar(array(
    'name'          => esc_html__('Email Subscription Form', 'oswan'),
    'id'            => 'email-subscription',
    'description'   => esc_html__('Add email subscription code here.', 'oswan'),
    'before_widget' => '<div class="newsletter-wrapper text-center">',
    'after_widget'  => '</div>',
    'before_title'  => '<div class="newsletter-title"><h3>',
    'after_title'   => '</h3></div>',
  ));

  // Footer Support
  register_sidebar(array(
    'name'          => esc_html__('Footer Support', 'oswan'),
    'id'            => 'footer-support',
    'description'   => esc_html__('Add footer support section code here', 'oswan'),
    'before_widget' => '<div class="footer-widget mb-30">',
    'after_widget'  => '</div>',
    'before_title'  => '',
    'after_title'   => '',
  ));

  // Footer Contact Information
   register_sidebar(array(
    'name'          => esc_html__('Contact Information', 'oswan'),
    'id'            => 'footer-contact-info',
    'description'   => esc_html__('Footer contact information code here', 'oswan'),
    'before_widget' => '<div class="footer-widget mb-30">',
    'after_widget'  => '</div>',
    'before_title'  => '<div class="footer-widget-title"><h3>',
    'after_title'   => '</h3></div>',
  ));
}
add_action('widgets_init', 'oswan_widgets_init');