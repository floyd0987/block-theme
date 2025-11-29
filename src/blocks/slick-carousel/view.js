/**
 * Use this file for JavaScript code that you want to run in the front-end
 * on posts/pages that contain this block.
 *
 * When this file is defined as the value of the `viewScript` property
 * in `block.json` it will be enqueued on the front end of the site.
 *
 * Example:
 *
 * ```js
 * {
 *   "viewScript": "file:./view.js"
 * }
 * ```
 *
 * If you're not making any changes to this file because your project doesn't need any
 * JavaScript running in the front-end, then you should delete this file and remove
 * the `viewScript` property from `block.json`.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-metadata/#view-script
 */

// Import Slick Carousel styles
// import 'slick-carousel/slick/slick.css';
// import 'slick-carousel/slick/slick-theme.css';

// Import Slick Carousel JS
import 'slick-carousel';

/* eslint-disable no-console */
// console.log( 'Hello World! (from slick-carousel-slick-carousel block)' );
/* eslint-enable no-console */

function mfnSliderContent( $ ) {
	var pager = function ( el, i ) {
		return '<a>' + i + '</a>';
	};

	var slider = $( '.carousel.center' );
	var count = 3;
	var centerMode = true;
	const rtl = false;
	const autoplay = false;
	const autoplaySpeed = 5000;

	if ( slider.closest( '.content_slider' ).hasClass( 'carousel' ) ) {
		count = slickAutoResponsive( slider );

		$( window ).bind( 'debouncedresize', function () {
			slider.slick(
				'slickSetOption',
				'slidesToShow',
				slickAutoResponsive( slider ),
				false
			);
			slider.slick(
				'slickSetOption',
				'slidesToScroll',
				slickAutoResponsive( slider ),
				true
			);
		} );
	}

	slider.slick( {
		cssEase: 'cubic-bezier(.4,0,.2,1)',
		dots: true,
		infinite: true,
		touchThreshold: 10,
		speed: 300,

		centerMode: centerMode,
		centerPadding: '10%',


		prevArrow:
			'<a class="button button_js slider_prev" href="#"><span class="button_icon"><svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path d="M11 1L5 8l6 7" stroke="currentColor" fill="none" /></svg></span></a>',
		nextArrow:
			'<a class="button button_js slider_next" href="#"><span class="button_icon"><svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path d="M5 1l6 7-6 7" stroke="currentColor" fill="none" /></svg></span></a>',

		adaptiveHeight: true,
		appendDots: slider.siblings( '.slider_pager' ),
		customPaging: pager,

		rtl: rtl ? true : false,
		autoplay: autoplay,
		autoplaySpeed: autoplaySpeed,

		slidesToShow: count,
		slidesToScroll: count,

		responsive: [
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: count >= 3 ? 3 : count,
					slidesToScroll: count >= 3 ? 3 : count,
				},
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: count >= 2 ? 2 : count,
					slidesToScroll: count >= 2 ? 2 : count,
					// centerPadding: '10%',
				},
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2,
					centerPadding: '0',
					dots: true,
					arrows: false,
				},
			},
		],
	} );
}

jQuery( document ).ready( function ( $ ) {
	mfnSliderContent( $ );
} );
