(function($) {
	$(document).ready( function() {
	    $('#feature-slider a').click(function(e) {
	        $('.featured-post').css({
	            opacity: 0,
	            visibility: 'hidden'
	        });
	        $(this.hash).css({
	            opacity: 1,
	            visibility: 'visible'
	        });
	        $('#feature-slider a').removeClass('active');
	        $(this).addClass('active');
	        e.preventDefault();
	    });
	});

	// This function's code adapted from: http://pastebin.com/s6JEthVi, from http://wordpress.org/support/topic/theme-twenty-eleven-auto-slide
	var current = 1;
	function autoAdvance() {
		if( current==-1 )
			return false;
		$('#feature-slider a').eq(current%$('#feature-slider a').length).trigger('click',[true]);
		current++;
	}
	// The number of seconds that the slider will auto-advance:
	var changeEvery = 7;
	var itvl = setInterval( function() { autoAdvance() }, changeEvery*1000 );
})(jQuery);