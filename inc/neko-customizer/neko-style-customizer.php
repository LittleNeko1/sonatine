<?php 

if( !function_exists('sonatine_dynamic_css') ){

	function sonatine_dynamic_css(){

		/* Init */
		$sonatine_dynamic_css = '';
		/* / Init */

		/* Kirki options */

			// site color
			$bg_color            = get_theme_mod( 'bg_color', 'rgba(255,255,255,1)' );
			$content_bg_color    = get_theme_mod( 'content_bg_color', 'rgba(255,255,255,1)'  );
			$neutral_color       = get_theme_mod( 'neutral_color', 'rgba(255,255,255,1)' );
			$text_color          = get_theme_mod( 'text_color', 'rgba(255,255,255,1)' );
			$accent_color        = get_theme_mod( 'accent_color', 'rgba(255,255,255,1)' );
			$accent_color_hover  = get_theme_mod( 'accent_color_hover', 'rgba(255,255,255,1)' );
			
			// button color
			$btn_bg_color        = get_theme_mod( 'btn_bg_color', 'rgba(255,255,255,1)' );
			$btn_txt_color       = get_theme_mod( 'btn_txt_color', 'rgba(255,255,255,1)'  );
			$btn_bg_color_hover  = get_theme_mod( 'btn_bg_color_hover', 'rgba(255,255,255,1)' );
			$btn_txt_color_hover = get_theme_mod( 'btn_txt_color_hover', 'rgba(255,255,255,1)' );

			// user custom css
			$user_custom_css     = get_theme_mod( 'custom_css', '' );

		/* / Kirki options */



		$sonatine_dynamic_css .= $user_custom_css;

		return $sonatine_dynamic_css;

	}


	if ( !function_exists( 'sonatine_add_dynamic_css' ) ){

		function sonatine_add_dynamic_css() {
			echo '
			<!--option styles-->
			<style type="text/css" media="all" title="sonatine-dynamic-css">'.sonatine_dynamic_css().'</style>
			<!--option styles-->
			';

		}
		add_action( 'wp_head', 'sonatine_add_dynamic_css' );
	}

}