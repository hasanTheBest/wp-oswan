<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package oswan
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function oswan_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'oswan_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function oswan_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'oswan_pingback_header' );

/**
 * Functions for custom query.
 */
function oswan_custom_post_query($post_type = 'product', $posts_per_page = 3, $taxonomy = null, $terms = null)
{
	$args = array(
		'tax_query' => array(
			array(
				'field' => 'slug',
			)
		)
	);
	$args['post_type'] = $post_type;
	$args['posts_per_page'] = $posts_per_page;
	$args['tax_query'][0]['taxonomy'] = $taxonomy;
	$args['tax_query'][0]['terms'] = $terms;

	$query = new WP_Query($args);
	return $query;
}
