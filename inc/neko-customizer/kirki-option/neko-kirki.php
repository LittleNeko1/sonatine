<?php

Kirki::add_config( 'sonatine', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );

/* kirk I18n */
require get_template_directory() . '/inc/neko-customizer/kirki-option/_kirki-i18n.php';

/* Skin */
require get_template_directory() . '/inc/neko-customizer/kirki-option/_skin.php';

/* Custom Css */
require get_template_directory() . '/inc/neko-customizer/kirki-option/_custom-css.php';

/* 404 */
require get_template_directory() . '/inc/neko-customizer/kirki-option/_404.php';





