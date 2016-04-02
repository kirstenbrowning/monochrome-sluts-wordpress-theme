$(document).ready(function(){
	
	$('.nav-icon').on('click', function(event){
		event.preventDefault();
		$('nav ul').slideToggle();
	});

	$(window).on('resize', function(){
		if ( $(window).width() < 800 ) {
			$('nav ul').hide();
			$('.site-logo').hide();
			$('.nav-icon').show();
			$('.mobile-logo').show();			
		} else {
			$('nav ul').show();
			$('.site-logo').show();
			$('.nav-icon').hide();
			$('.mobile-logo').hide();
		}
	});

});