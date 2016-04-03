$(function() {
    		$('#scrollingNav').bind('click', 'ul li a', function(event) {
        $.scrollTo(event.target.hash, 350);
    		});
		});