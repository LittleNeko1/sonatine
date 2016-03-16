<?php
/**
 * Sonatine Theme Customizer.
 *
 * @package Sonatine
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
if( !function_exists('sonatine_customize_register') ){

	function sonatine_customize_register( $wp_customize ) {

		/* Remove unwanted section */
		$wp_customize->remove_section( 'colors' );

		/* Modify default field behavior */
		$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
		$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
		//$wp_customize->get_setting( 'header_textcolor' )->transport = 'refresh';

	}
	add_action( 'customize_register', 'sonatine_customize_register' );
	
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
if( !function_exists('sonatine_customize_preview_js') ){

	function sonatine_customize_preview_js() {
		wp_enqueue_script( 'sonatine_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
	}

	add_action( 'customize_preview_init', 'sonatine_customize_preview_js' );

}

if( !function_exists('sonatine_kirki_configuration_styling') ){
	
	function sonatine_kirki_configuration_styling( $config ) {

		$config['logo_image']   = get_template_directory_uri().'/inc/assets/img/neko-logo.png';
		$config['description']  = esc_attr__( 'A Little Neko freebie delight.', 'sonatine' );
		$config['color_accent'] = '#00bcd4';
		$config['color_back']   = '#455a64';
		$config['width']        = '400px';

		return $config;

	}
	add_filter( 'kirki/config', 'sonatine_kirki_configuration_styling' );

}
