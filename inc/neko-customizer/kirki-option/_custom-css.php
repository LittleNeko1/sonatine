<?php

Kirki::add_field( 'sonatine', array(
	'type'     => 'textarea',
	'settings' => 'custom_css',
	'label'    => esc_html__( 'Enter your custom CSS below', 'sonatine' ),
	'section'  => 'custom_css',
	'default'  => '',
	'priority' => 1
) );


Kirki::add_section( 'custom_css', array(
    'title'          => esc_html__( 'Custom CSS', 'sonatine' ),
    'description'    => esc_html__( 'The css code inserted here will override any style', 'sonatine' ),
    'panel'          => '', // Not typically needed.
    'priority'       => 82,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );
