<?php

Kirki::add_config( 'sonatine', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );


/* Skin */
require get_template_directory() . '/inc/neko-customizer/kirki-option/_skin.php';

/* Custom Css */
require get_template_directory() . '/inc/neko-customizer/kirki-option/_custom-css.php';

/* 404 */
require get_template_directory() . '/inc/neko-customizer/kirki-option/_404.php';
