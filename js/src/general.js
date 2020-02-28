$(document).ready(function() {

	const 	header 		= $('#primary-navigation'),
			navButton 	= $('#menu-toggle'),
			navLink 	= $('.menu-item > a'),
			navOverlay 	= $('#mobile-overlay-toggle'),
			$window 	= $(window),
			$header 	= $('#header');
	var 	scrolling   = false;


	// BURGER MENU

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

	// HEADER CHANGE
 
    $( window ).scroll( function() {
        scrolling = true;
    });
    
    setInterval( function() {
		if ( scrolling ) {
			
			scrolling = false;
			if ($(window).scrollTop() > 100){
				$('header').addClass('header-small');
				$('header').removeClass('.header');
			}
			else if($(window.top == 0) && ($window.width() > 1000)) {
				$('header').addClass('.header');
				$('header').removeClass('header-small');
			}
		}
	}, 50 );
   
	function resize() {
   
		if ($window.width() < 1000) {
			return $header.addClass('header-small');
		}
		else if ($window.width() > 1000) {
			return $header.removeClass('header-small');
		}
	}
	
	$window.resize(resize).trigger('resize');

	// SMOOTH SCROLL NAV

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

