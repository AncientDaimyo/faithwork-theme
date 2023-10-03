<?php
/**
 * faithwork-theme Theme Customizer
 *
 * @package faithwork-theme
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function faithwork_theme_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

		
	$wp_customize->add_section('test_section' , array(
		'title'    => 'Test Section',
		'priority' => 99,
	  ));
  
	  $wp_customize->add_setting('test_img', array(
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'esc_url_raw',
		'default' => '',
	));

	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'test_img', array(
		'label'    => 'Image',
		'section'  => 'test_section',
		'settings' => 'test_img',
	)));

	$wp_customize->add_section('marquee' , array(
		'title'    => 'Marquee',
		'priority' => 99,
	  ));
  
	  $wp_customize->add_setting('marquee_text', array(
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'esc_url_raw',
		'default' => '',
	));

	$wp_customize->add_control( 
		new WP_Customize_Control(
			$wp_customize, 'marquee_text', array(
			'label'    => 'marquee text',
			'section'  => 'marquee',
			'type'	   => 'text'
			)
		)
	);

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'faithwork_theme_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'faithwork_theme_customize_partial_blogdescription',
			)
		);

		
	}
}
add_action( 'customize_register', 'faithwork_theme_customize_register' );



/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function faithwork_theme_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function faithwork_theme_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function faithwork_theme_customize_preview_js() {
	wp_enqueue_script( 'faithwork-theme-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'faithwork_theme_customize_preview_js' );
