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

				$( '.menu-container' )
					.removeClass( 'not-visible' )
					.addClass( 'visible' );

				$( 'body' ).css( 'overflow', 'hidden' );
			} else {

				// Remove the class 'visible' and add the class 'not-visible' class to the menu container.
				$( '.menu-container' )
					.removeClass( 'visible' )
					.addClass( 'not-visible' );

				$( 'body' ).css( 'overflow', 'auto' );
			}

		} );

		/**
		 * On hover display menu, display the various menu.
		 *
		 * @since 0.1.0
		 * @uses  toggleClass(), hasClass(), addClass(), removeClass()
		 */
		$( 'header .menu-container .static-menu ul li a' ).on( 'mouseenter', function() {
			var id = $( this ).data( 'id' );

			if ( id === 'company' ) {
				$( '.company' )
					.removeClass( 'not-visible' )
					.addClass( 'visible' );

				$( '.projects' )
					.removeClass( 'visible' )
					.addClass( 'not-visible' );
			} else if ( id === 'projects' ) {
				$( '.projects' )
					.removeClass( 'not-visible' )
					.addClass( 'visible' );

				$( '.company' )
					.removeClass( 'visible' )
					.addClass( 'not-visible' );
			} else {
				$( '.company' )
					.removeClass( 'visible' )
					.addClass( 'not-visible' );

				$( '.projects' )
					.removeClass( 'visible' )
					.addClass( 'not-visible' );
			}
		} );

		/**
		 * On hover display menu, display the other menu.
		 *
		 * @since 0.1.0
		 * @uses  toggleClass(), hasClass(), addClass(), removeClass()
		 */
		$( '.wall-details .menu-container .static-menu ul li a' ).on( 'click', function() {
			var id = $( this ).data( 'id' );

			$( '.wall-details .dynamic-menu > div:not( .' + id + ' )' )
				.removeClass( 'visible' )
				.addClass( 'not-visible' );

			$( '.' + id )
				.removeClass( 'not-visible' )
				.addClass( 'visible' );
		} );

		/**
		 * On hover display menu, display the other menu.
		 *
		 * @since 0.1.0
		 * @uses  toggleClass(), hasClass(), addClass(), removeClass()
		 */
		$( '.news .menu-container .static-menu ul li a[data-id]' ).on( 'mouseenter', function() {
			var id = $( this ).data( 'id' );

			$( '.news .dynamic-menu div:not( .' + id + ' )' )
				.parents( 'div.category-container' )
				.removeClass( 'visible' )
				.addClass( 'not-visible' );

			$( '.news .dynamic-menu .' + id )
				.parents( 'div.category-container' )
				.removeClass( 'not-visible' )
				.addClass( 'visible' );
		} );

		/**
		 * On scroll of the doors template, add class visible if scroll from top is above 800px and less than 1400 from bottom of document.
		 *
		 * @since 0.1.0
		 * @uses  scrollTop(), height(), addClass(), removeClass()
		 */
		$( window ).scroll( function() {
			if ( $( window ).scrollTop() >= 800 && $( window ).scrollTop() < ( $( document ).height() - 1400 ) ) {
				$( '.arrow.top' ).addClass( 'visible' );
			} else {
				$( '.arrow.top' ).removeClass( 'visible' );
			}
		});

		// Slick carousel controller
		$( '.carousel' ).slick({
			slidesToShow  : 1,
			autoplay      : true,
			autoplaySpeed : 3000,
			speed         : 600,
			prevArrow     : $( 'i.ion-ios-arrow-left' ),
			nextArrow     : $( 'i.ion-ios-arrow-right' )
		});

	});
} )( jQuery );
