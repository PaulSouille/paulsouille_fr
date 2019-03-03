
 jQuery(document).ready(function($) {
     $('.js-scrollTo').on('click', function() { 
			var page = $(this).attr('href'); 
			var speed = 750; 
			$('html, body').animate( { scrollTop: $(page).offset().top-60 }, speed ); // Go
			return false;
		});
	});
