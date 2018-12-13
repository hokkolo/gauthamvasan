/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {

	// Site title and description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.logo a' ).text( to );
		} );
	} );
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.logo a' ).attr( 'title', to );
		} );
	} );

	// Home Page main heading and description.
	wp.customize( 'bloggerz_theme_header_h1_1', function( value ) {
		value.bind( function( to ) {
			$( '.banner-txt-section h1' ).text( to );
		} );
	} );
	wp.customize( 'bloggerz_theme_header_p_1', function( value ) {
		value.bind( function( to ) {
		$( '.banner-txt-section p' ).text( to );
		} );
	} );

	// Single Post main heading and description.
	wp.customize( 'bloggerz_theme_header_h1_2', function( value ) {
		value.bind( function( to ) {
			$( '.single-banner .banner-txt-section h1' ).text( to );
		} );
	} );
	wp.customize( 'bloggerz_theme_header_p_2', function( value ) {
		value.bind( function( to ) {
		$( '.single-banner .banner-txt-section p span' ).text( to );
		} );
	} );

	// Header text color.
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( to ) {
			// console.log(to);
			if ( 'blank' == to ) {

				$( '.logo a' ).hide();
				$( '.banner-txt-section h1' ).hide();
				$( '.banner-txt-section p' ).hide();
			}
			if ( 'blank' != to ) {

				$( '.logo a, .wp-menu > li > a' ).css( {
					'color': to
				} );
				$( '.logo a' ).show();
				$( '.banner-txt-section h1' ).show();
				$( '.banner-txt-section p' ).show();

			} else {
				$( '.logo a, .wp-menu > li > a' ).css( {
					'color': '#4a88c2'
				} );
			}
		} );
	} );

	wp.customize( 'bloggerz_theme_show_header_image_1', function( value ) {
		value.bind( function( to ) {

			if ( true == to ) {
				$('.banner-section.header-banner').css({'display': 'block'});
			} else {
				$('.banner-section.header-banner').css({'display': 'none'});
			}
		} );
	} );

	wp.customize( 'bloggerz_theme_show_header_image_2', function( value ) {
		value.bind( function( to ) {

			if ( true == to ) {
				$('.banner-section.single-banner').css({'display': 'block'});
			} else {
				$('.banner-section.single-banner').css({'display': 'none'});
			}
		} );
	} );
} )( jQuery );
