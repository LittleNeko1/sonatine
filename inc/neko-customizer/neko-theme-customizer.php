<?php 

/**
 * redirect on 404
 */
if( !function_exists('sonatine_redirect_404') ){

	function sonatine_redirect_404() {

		global $wp_query;

		$page_404_id = get_theme_mod( '404_error_page', '' );

		if ($wp_query->is_404) {

			$page_title = get_the_title( $page_404_id );

			if(get_page($page_404_id)){

				$redirect_404_url = esc_url(get_permalink(get_page($page_404_id))); 
				wp_redirect( $redirect_404_url );

			}else{

				return;

			}

			exit();	
		}

	}

	add_action( 'template_redirect', 'sonatine_redirect_404');

}