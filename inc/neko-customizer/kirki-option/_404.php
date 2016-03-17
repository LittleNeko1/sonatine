<?php 

Kirki::add_field( 'sonatine', array(
	'type'        => 'dropdown-pages',
	'settings'    => '404_error_page',
	'label'       => esc_html__( 'List of pages', 'sonatine' ),
	'section'     => 'error_404',
	'default'     => '',
	'priority'    => 1,
	'transport'		=> 'postMessage'
) );


Kirki::add_section( 'error_404', array(
    'title'          => esc_html__( '404 Error Page', 'sonatine' ),
    'description'    => esc_html__( 'Select a page that will be used as your 404 page', 'sonatine' ),
    'panel'          => '', // Not typically needed.
    'priority'       => 83,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );