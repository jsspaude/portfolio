if ($(window).scrollTop() > 100) {
	$('header').removeClass('header');
	$('#primary-navigation').removeClass('top');
}

else {
	$('header').removeClass('header-small');
	$('header').addClass('header');
	
	$('#primary-navigation').addClass('top');
}

$(document).ready(function() {

	const 	navBar 			= $('#primary-navigation'),
			navButton 		= $('#menu-toggle'),
			navLink 		= $('.menu-item > a'),
			navOverlay 		= $('#mobile-overlay-toggle'),
			headerHeight	= $('header').height(),
			$window 		= $(window);
	var 	scrolling   	= false;

	// BURGER MENU

	navButton.click(function() {
		navBar.toggleClass('open');
		navButton.toggleClass('open');
		navOverlay.toggleClass('display-none');

		if($('nav').hasClass('open')) {
			$('nav').css({'top': headerHeight});
		}
		else{
			$('nav').css({'top': '-50px'});
		}
	});

	navOverlay.click(function() {
		navBar.removeClass('open');
		navOverlay.addClass('display-none');
	});

	navLink.click(function() {
		navBar.removeClass('open');
		navOverlay.addClass('display-none');
	});

	// HEADER CHANGE
 
    $( window ).scroll( function() {
        scrolling = true;
    });
    
    setInterval( function() {
		if ( scrolling ) {
			
			scrolling = false;
			if (($(window).scrollTop() > 100) || ($window.width() < 450) ){
				$('nav').css({'top': '-50px'});
				$('header').addClass('header-small');
				$('header').removeClass('header');
				$('#primary-navigation').removeClass('top');
				
			}
			else if($(window.top == 0) && ($window.width() > 450)) {
				$('header').addClass('header');
				$('header').removeClass('header-small');
				$('#primary-navigation').addClass('top');
				$('nav').css({'top': '0'});
				$(navButton).removeClass('open');
				$(navBar).removeClass('open');
			}
		}
	}, 50 );
   

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

