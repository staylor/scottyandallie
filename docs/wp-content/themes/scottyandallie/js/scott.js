/*globals window, document, $, jQuery */

(function ($) {
	"use strict";

	var current = 0, photos, photoData, img;

	function gallery() {
		window.setTimeout(function () {
			if ( current + 1 === photos.length ) {
				current = 0;
			} else {
				current += 1;
			}

			img.attr( 'src', photos[ current ] );
			gallery();
		}, 5000);
	}

    $(document).ready(function () {
		photoData = $( '#home-gallery-data' );
		if ( photoData.length ) {
			img = $( '#home-gallery img' );
			photos = $.parseJSON( photoData.html() );
			gallery();
		}
    });

}(jQuery));