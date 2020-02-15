$(document).ready(function() {

	// Burger Menu

	const 	header 		= 		$('#primary-navigation'),
			navButton 	= 		$('#menu-toggle'),
			navLink 	= 		$('.menu-item > a');
	const	navOverlay 	=		$('#mobile-overlay-toggle');

	navButton.click(function() {
		header.toggleClass('open');
		navButton.toggleClass('open');
		navOverlay.toggleClass('display-none');
	});

	navOverlay.click(function() {
		header.removeClass('open');
		navOverlay.addClass('display-none');
	});

	navLink.click(function() {
		header.removeClass('open');
		navOverlay.addClass('display-none');
	});

	// Header Change

	$(window).scroll(function(){
		if ($(window).scrollTop() > 100){
			$('#header').addClass('header-small');
			// $('#branding>a>h1, #branding>a>div>h4, #branding>a>div>h5').addClass('header-font-small');
			$('#primary-navigation').addClass('primary-navigation-small');
		}
		else if($(window.top == 0)) {
			$('#header').removeClass('header-small');
			// $('#branding>a>h1, #branding>a>div>h4, #branding>a>div>h5').removeClass('header-font-small');
			$('#primary-navigation').removeClass('primary-navigation-small');
			$('.open').removeClass('open');
		}
	});

	// Smooth Scroll Nav

	$("a").on('click', function(event) {

		if (this.hash !== "") {
		  event.preventDefault();
	
		  var hash = this.hash;

		  $('html, body').animate({
			scrollTop: $(hash).offset().top
		  },0, function(){

			window.location.hash = hash;
		  });
		}
	});	
});

