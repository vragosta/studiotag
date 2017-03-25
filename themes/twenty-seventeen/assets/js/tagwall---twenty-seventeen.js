/**
 * Tag Wall - Twenty Seventeen
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
		 * @uses  toggleClass(), hasClass(), removeClass(), addClass()
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

			// Make sure the second list element within menu container is not displayed by default.
			$( '.menu-container ul:last-child' )
				.removeClass( 'visible' );
		});

		/**
		 * On hover display menu, display the other menu.
		 *
		 * @since 0.1.0
		 * @uses  toggleClass(), hasClass(), addClass(), removeClass()
		 */
		$( '.menu-container ul:first-child li a' ).on( 'mouseenter', function() {

			// Define local variables.
			var id = $( this ).data( 'id' );

			if ( id == 'company' ) {

				// Add class 'visible' to the menu
				$( '.menu-container ul:last-child' )
					.addClass( 'visible' );
			} else {

				// Remove calss 'visible' from the menu.
				$( '.menu-container ul:last-child' )
					.removeClass( 'visible' );
			}
		});

		/**
		 * TODO
		 *
		 * @since 0.1.0
		 * @uses  TODO
		 */
		$( '.wall-details .details-menu h1' ).on( 'mouseenter', function() {
			var id = $( this ).data( 'menu' );

			if ( $( window ).width() > 768 ) {
				$( '.wall-details .details-menu .menu' ).removeClass( 'dim' );
				$( '.wall-details .details-menu .menu:not(.' + id + ')' ).addClass( 'dim' );
				// if ( id == 'one' ) {
					// $( '.wall-details .details-menu .menu' ).removeClass( 'dim' );
					// $( '.wall-details .details-menu .menu:not(.' + id + ')' ).addClass( 'dim' );
				// } else if ( id == 'two' ) {
				// 	$( '.wall-details .details-menu .menu' ).removeClass( 'dim' );
				// 	$( '.wall-details .details-menu .menu:not(.' + id + ')' ).addClass( 'dim' );
				// } else if ( id == 'three' ) {
				// 	$( '.wall-details .details-menu .menu' ).removeClass( 'dim' );
				// 	$( '.wall-details .details-menu .menu:not(.' + id + ')' ).addClass( 'dim' );
				// } else if ( id == 'four' ) {
				// 	$( '.wall-details .details-menu .menu' ).removeClass( 'dim' );
				// 	$( '.wall-details .details-menu .menu:not(.' + id + ')' ).addClass( 'dim' );
				// } else if ( id == 'five' ) {
				// 	$( '.wall-details .details-menu .menu' ).removeClass( 'dim' );
				// 	$( '.wall-details .details-menu .menu:not(.' + id + ')' ).addClass( 'dim' );
				// } else if ( id == 'six' ) {
				// 	$( '.wall-details .details-menu .menu' ).removeClass( 'dim' );
				// 	$( '.wall-details .details-menu .menu:not(.' + id + ')' ).addClass( 'dim' );
				// } else if ( id == 'seven' ) {
				// 	$( '.wall-details .details-menu .menu' ).removeClass( 'dim' );
				// 	$( '.wall-details .details-menu .menu:not(.' + id + ')' ).addClass( 'dim' );
				// }
			}
		});

		/**
		 * TODO
		 *
		 * @since 0.1.0
		 * @uses  TODO
		 */
		$( window ).scroll( function() {
			if ( $( window ).scrollTop() >= 800 && $( window ).scrollTop() < ( $( document ).height() - 1400 ) ) {
				$( '.arrow.top' ).addClass( 'visible' );
			} else {
				$( '.arrow.top' ).removeClass( 'visible' );
			}
		});

	});
} )( jQuery );
