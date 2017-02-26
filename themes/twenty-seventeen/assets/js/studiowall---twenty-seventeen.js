/**
 * Studio Wall - Twenty Seventeen
 * Core
 *
 * Copyright (c) 2017
 * Licensed under the GPL-2.0+ license.
 */

( function( $ ) {
	$( document ).ready(function() {

		/**
		 * When the hamburger button is clicked, toggle display of the menu.
		 *
		 * @since 0.1.0
		 * @uses  toggleClass(), hasClass()
		 */
		$( '.header-navigation-front-page .hamburger' ).on( 'click', function() {

			// Toggle hamburger button appearance.
			$( '.hamburger' )
				.toggleClass( 'is-active' );

			if ( $( this ).hasClass( 'is-active' ) ) {

				// Remove the class 'not-visible' and add the class 'visible' class to the menu container.
				$( '.menu-container' )
					.removeClass( 'not-visible' )
					.addClass( 'visible' );
			} else {

				// Remove the class 'visible' and add the class 'not-visible' class to the menu container.
				$( '.menu-container' )
					.removeClass( 'visible' )
					.addClass( 'not-visible' );
			}
		});

	});
} )( jQuery );
