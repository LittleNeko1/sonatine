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
function sonatine_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	//$wp_customize->get_setting( 'header_textcolor' )->transport = 'refresh';

	$wp_customize->remove_section( 'colors' );
}
add_action( 'customize_register', 'sonatine_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function sonatine_customize_preview_js() {
	wp_enqueue_script( 'sonatine_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'sonatine_customize_preview_js' );
