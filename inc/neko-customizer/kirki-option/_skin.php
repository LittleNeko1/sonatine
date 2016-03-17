<?php 

/* SITE COLORS */

Kirki::add_field( 'sonatine', array(
	'type'        => 'color',
	'settings'    => 'bg_color',
	'label'       => esc_html__( 'Background color', 'sonatine' ),
	'section'     => 'site-color',
	'default'     => 'rgba(255,255,255,1)',
	'priority'    => 1,
	'alpha'       => true
) );

Kirki::add_field( 'sonatine', array(
	'type'        => 'color',
	'settings'    => 'content_bg_color',
	'label'       => esc_html__( 'Content background color', 'sonatine' ),
	'section'     => 'site-color',
	'default'     => 'rgba(255,255,255,1)',
	'priority'    => 2,
	'alpha'       => true,
) );


Kirki::add_field( 'sonatine', array(
	'type'        => 'color',
	'settings'    => 'neutral_color',
	'label'       => esc_html__( 'Neutral color', 'sonatine' ),
	'section'     => 'site-color',
	'default'     => 'rgba(255,255,255,1)',
	'priority'    => 3,
	'alpha'       => true,
) );

Kirki::add_field( 'sonatine', array(
	'type'        => 'color',
	'settings'    => 'text_color',
	'label'       => esc_html__( 'Text color', 'sonatine' ),
	'section'     => 'site-color',
	'default'     => 'rgba(255,255,255,1)',
	'priority'    => 4,
	'alpha'       => true,
) );

Kirki::add_field( 'sonatine', array(
	'type'        => 'color',
	'settings'    => 'accent_color',
	'label'       => esc_html__( 'Accent color', 'sonatine' ),
	'section'     => 'site-color',
	'default'     => 'rgba(255,255,255,1)',
	'priority'    => 5,
	'alpha'       => true,
) );

Kirki::add_field( 'sonatine', array(
	'type'        => 'color',
	'settings'    => 'accent_color_hover',
	'label'       => esc_html__( 'Accent hover color', 'sonatine' ),
	'section'     => 'site-color',
	'default'     => 'rgba(255,255,255,1)',
	'priority'    => 6,
	'alpha'       => true,
) );


Kirki::add_section( 'site-color', array(
    'title'          => esc_html__( 'Site Colors', 'sonatine' ),
    'description'    => '',
    'panel'          => 'colors', // Not typically needed.
    'priority'       => 90,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

/* / SITE COLORS */

/* BUTTON COLORS */

Kirki::add_field( 'sonatine', array(
	'type'        => 'color',
	'settings'    => 'btn_bg_color',
	'label'       => esc_html__( 'Button background color', 'sonatine' ),
	'section'     => 'button_color',
	'default'     => 'rgba(255,255,255,1)',
	'priority'    => 1,
	'alpha'       => true,
) );

Kirki::add_field( 'sonatine', array(
	'type'        => 'color',
	'settings'    => 'btn_txt_color',
	'label'       => esc_html__( 'Button text color', 'sonatine' ),
	'section'     => 'button_color',
	'default'     => 'rgba(255,255,255,1)',
	'priority'    => 2,
	'alpha'       => true,
) );

Kirki::add_field( 'sonatine', array(
	'type'        => 'color',
	'settings'    => 'btn_bg_color_hover',
	'label'       => esc_html__( 'Button background Hover Color', 'sonatine' ),
	'section'     => 'button_color',
	'default'     => 'rgba(255,255,255,1)',
	'priority'    => 3,
	'alpha'       => true,
) );


Kirki::add_field( 'sonatine', array(
	'type'        => 'color',
	'settings'    => 'btn_txt_color_hover',
	'label'       => esc_html__( 'Button text hover color', 'sonatine' ),
	'section'     => 'button_color',
	'default'     => 'rgba(255,255,255,1)',
	'priority'    => 4,
	'alpha'       => true,
) );


Kirki::add_section( 'button_color', array(
    'title'          => esc_html__( 'Button Colors', 'sonatine' ),
    'description'    => '',
    'panel'          => 'colors', // Not typically needed.
    'priority'       => 90,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

/* / BUTTON COLORS */


Kirki::add_panel( 'colors', array(
    'priority'    => 81,
    'title'       => esc_html__( 'Colors', 'sonatine' ),
    'description' => esc_html__( 'Adjust the template main color to fit your needs', 'sonatine' ),
) );
