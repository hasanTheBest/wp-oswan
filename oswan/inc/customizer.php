<?php
/**
 * oswan Theme Customizer
 *
 * @package oswan
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function oswan_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'oswan_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'oswan_customize_partial_blogdescription',
		) );
	}
}
add_action( 'customize_register', 'oswan_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function oswan_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function oswan_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function oswan_customize_preview_js() {
	wp_enqueue_script( 'oswan-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'oswan_customize_preview_js' );

/**
 * Kirki Customizer Options
 */
if(! class_exists('Kirki')){
	return;
}
$oswan_config_id = 'oswan_customizer_config';

Kirki::add_config($oswan_config_id, array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
));

// Adding Panel
Kirki::add_panel('panel_home_page', array(
	'priority'    => 10,
	'title'       => esc_html__('Home Page Sections', 'oswan'),
	'description' => esc_html__('My panel description', 'oswan'),
));

// Slider Section
Kirki::add_section('section_slider', array(
	'title'          => esc_html__('Slider', 'oswan'),
	'description'    => esc_html__('You can add/remove title or subtitle of slider section from here', 'oswan'),
	'panel'          => 'panel_home_page',
	'priority'       => 10,
));

// Slider Controls
Kirki::add_field($oswan_config_id, array(
	'type'     => 'text',
	'settings' => 'slider_title',
	'label'    => esc_html__('Slider Title', 'oswan'),
	'section'  => 'section_slider',
	'default'  => esc_html__('This is a default value', 'oswan'),
	'priority' => 10,
));

// About/Brief Description Section
Kirki::add_section('section_short_desc', array(
	'title'          => esc_html__('About Oswan', 'oswan'),
	'description'    => esc_html__('You can add/remove title or subtitle of About section from here', 'oswan'),
	'panel'          => 'panel_home_page',
	'priority'       => 15,
));

// About/Brief Description Controls
Kirki::add_field($oswan_config_id, array(
	'type'     => 'text',
	'settings' => 'short_desc_title',
	'label'    => esc_html__('About Title', 'oswan'),
	'section'  => 'section_short_desc',
	'default'  => esc_html__('This is a default value', 'oswan'),
	'priority' => 15,
));
// About/Brief Description Controls 2
Kirki::add_field($oswan_config_id, array(
	'type'     => 'textarea',
	'settings' => 'short_desc_text',
	'label'    => esc_html__('About Description', 'oswan'),
	'section'  => 'section_short_desc',
	'default'  => esc_html__('This is a default value', 'oswan'),
	'priority' => 20,
));
// About/Brief Description Controls 3
Kirki::add_field($oswan_config_id, array(
	'type'     => 'text',
	'settings' => 'short_desc_query',
	'label'    => esc_html__('Have any Query', 'oswan'),
	'section'  => 'section_short_desc',
	'default'  => esc_html__('This is a default value', 'oswan'),
	'priority' => 25,
));
// About/Brief Description Controls 4
Kirki::add_field($oswan_config_id, array(
	'type'     => 'text',
	'settings' => 'short_desc_number',
	'label'    => esc_html__('Contact Number', 'oswan'),
	'section'  => 'section_short_desc',
	'default'  => esc_html__('This is a default value', 'oswan'),
	'priority' => 30,
));
// About/Brief Description Controls 5
Kirki::add_field($oswan_config_id, array(
	'type'     => 'upload',
	'settings' => 'short_desc_image',
	'label'    => esc_html__('Upload Image', 'oswan'),
	'section'  => 'section_short_desc',
	'priority' => 35,
	'transport' => 'auto',
	'output' => array(
		array(
			'element' => 'img[src]',
			'property' => 'j',
		)
	)
));
