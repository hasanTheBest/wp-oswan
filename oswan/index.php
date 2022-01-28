<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package oswan
 */
get_header();

get_template_part('template-parts/homepage/slider'); 
get_template_part('template-parts/homepage/overview'); 
get_template_part('template-parts/homepage/banner'); 
get_template_part('template-parts/homepage/products'); 
get_template_part('template-parts/homepage/latest-products'); 
get_template_part('template-parts/homepage/accessories'); 
get_template_part('template-parts/common/testimonial'); 
get_template_part('template-parts/common/blog'); 
get_template_part('template-parts/common/newsletter'); 

get_footer();
