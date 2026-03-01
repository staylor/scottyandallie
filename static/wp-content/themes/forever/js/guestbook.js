jQuery( document ).ready( function( $ ) {
	$(function(){
		$('.guestbook .commentlist').masonry({
			// options
			itemSelector : '.guestbook .commentlist > li.comment',
			gutterWidth : 34
		});
	});
} );