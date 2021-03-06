<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sonatine
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'sonatine' ); ?></a>



		<header id="masthead" class="site-header" role="banner">
			<div class="container">
				<div class="row">

					<div class="col-md-12">
						<?php 
						$display_header = get_header_textcolor();
						if( $display_header != 'blank') : ?>

							<div class="site-branding">
								<?php
								if ( is_front_page() && is_home() ) : ?>
									<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
								<?php else : ?>
									<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
								<?php
								endif;

								$description = get_bloginfo( 'description', 'display' );
								if ( $description || is_customize_preview() ) : ?>
								<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
								<?php
								endif; ?>
							</div><!-- .site-branding -->

						<?php endif; ?>

						<!-- header image -->
						<?php $header_image = get_header_image();
						if ( ! empty( $header_image ) ) { ?>
						<a href="<?php echo esc_url( home_url('/') ); ?>" title="<?php echo esc_attr(get_bloginfo( 'name', 'display' ) ); ?>" rel="home" id="header-image">
							<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" />
						</a>
						<?php } ?>
						<!-- header image -->

					</div>
					<div class="col-md-12">
					
						<nav id="site-navigation" class="main-navigation" role="navigation">
						
							<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<div class="burger">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								</div>
								<span class="menu-burger-label">menu</span>
							</button>


							<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
						</nav>
						<!-- #site-navigation -->
					</div>

				</div>
			</div>
		</header><!-- #masthead -->

		<div id="content" class="site-content">
