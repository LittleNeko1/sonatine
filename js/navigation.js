/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables tab
 * support for dropdown menus.
 */
 ( function() {
 	var container, button, menu, links, subMenus, i, len;

 	container = document.getElementById( 'site-navigation' );
 	if ( ! container ) {
 		return;
 	}

 	button = container.getElementsByTagName( 'button' )[0];
 	if ( 'undefined' === typeof button ) {
 		return;
 	}

 	menu = container.getElementsByTagName( 'ul' )[0];

	// Hide menu toggle button if menu is empty and return early.
	if ( 'undefined' === typeof menu ) {
		button.style.display = 'none';
		return;
	}

	menu.setAttribute( 'aria-expanded', 'false' );
	if ( -1 === menu.className.indexOf( 'nav-menu' ) ) {
		menu.className += ' nav-menu';
	}

	button.onclick = function() {
		if ( -1 !== container.className.indexOf( 'toggled' ) ) {

			jQuery(menu).slideUp('fast', function() {
				container.className = container.className.replace( ' toggled', '' );
				button.setAttribute( 'aria-expanded', 'false' );
				menu.setAttribute( 'aria-expanded', 'false' );
			});


		} else {
			container.className += ' toggled';
			jQuery(menu).slideDown('fast', function() {
				button.setAttribute( 'aria-expanded', 'true' );
				menu.setAttribute( 'aria-expanded', 'true' );			
			});
		}

	};

	// Get all the link elements within the menu.
	links    = menu.getElementsByTagName( 'a' );
	subMenus = menu.getElementsByTagName( 'ul' );

	// Set menu items with submenus to aria-haspopup="true".
	for ( i = 0, len = subMenus.length; i < len; i++ ) {
		subMenus[i].parentNode.setAttribute( 'aria-haspopup', 'true' );
	}

	// Each time a menu link is focused or blurred, toggle focus.
	for ( i = 0, len = links.length; i < len; i++ ) {
		links[i].addEventListener( 'focus', toggleFocus, true );
		links[i].addEventListener( 'blur', toggleFocus, true );
	}

	/**
	 * Sets or removes .focus class on an element.
	 */
	 function toggleFocus() {
	 	var self = this;

		// Move up through the ancestors of the current link until we hit .nav-menu.
		while ( -1 === self.className.indexOf( 'nav-menu' ) ) {

			// On li elements toggle the class .focus.
			if ( 'li' === self.tagName.toLowerCase() ) {
				if ( -1 !== self.className.indexOf( 'focus' ) ) {
					self.className = self.className.replace( ' focus', '' );
				} else {
					self.className += ' focus';
				}
			}

			self = self.parentElement;
		}
	}
} )();


(function( $ ) {
	'use strict';

	/**
	 * All of the code for your public-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * $ function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 */
	
	 $(function() {

	 	$(window).on('resize', function(){

	 		if(Modernizr.mq('only all and (min-width: 37.5em)') ) {
	 			
	 			if( $('.main-navigation').hasClass('toggled') )
	 			$('.main-navigation').removeClass('toggled');

	 			$('.nav-menu').css('display', 'block');

	 		}else{

	 			$('.nav-menu').css('display', 'none');
	 			
	 		}

	 	});
	 
	 });
	 
	 /* When the window is loaded: */

	 $( window ).load(function() {
	 
	 });
	 
	 /* ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practise to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
	 */

})( jQuery );
