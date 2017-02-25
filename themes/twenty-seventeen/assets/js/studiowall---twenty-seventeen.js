/**
 * Studio Wall - Twenty Seventeen
 * Core
 *
 * Copyright (c) 2017
 * Licensed under the GPL-2.0+ license.
 */

( function( $ ) {
	$(document).ready(function () {

		// TODO Add Comment
		$( '.hamburger' ).click(function() {

			$( '.hamburger' )
				.toggleClass( 'is-active' );

			// Show menu
			if ( $( '.hamburger' ).hasClass( 'is-active' ) ) {

				$( '.overlay' )
					.css( 'height', '100%' );
			} else {

				$( '.overlay' )
					.css( 'height', '0%' );
			}

		});

	});
} )( jQuery );
