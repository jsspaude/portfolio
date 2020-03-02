var 	scrolling 		= false;
const 	scrollTop 		= pageYOffset,
		header 			= document.querySelector('header'),
		nav				= document.querySelector('nav'),
		navBar			= document.getElementById('primary-navigation'),
		navButton 		= document.querySelector('#menu-toggle'),
		headerHeight	= header.getBoundingClientRect();

if ((scrollTop > 100) || (screen.width < 450)) {
	header.className = 'header-small';
	navBar.classList.remove('top');
}

else {
	header.className = 'header';
	navBar.classList.add('top');
}

window.onscroll = function() {
	var scrollTop = pageYOffset;

	if ((scrollTop > 100) || (screen.width < 450) ){
		nav.style.top = headerHeight;
		header.className = 'header-small';
		navBar.classList.remove('top');
	}

	else if((scrollTop === 0) && (screen.width > 450)) {
		header.className = 'header';
		navBar.classList.add('top');
		navButton.classList.remove('open');
		navBar.classList.remove('open');
	}
};



// $(document).ready(function() {

// 	const 	navBar 			= $('#primary-navigation'),
// 			navButton 		= $('#menu-toggle'),
// 			navLink 		= $('.menu-item > a'),
// 			navOverlay 		= $('#mobile-overlay-toggle'),
// 			$window 		= $(window);
// 	var		headerHeight	= $('header').outerHeight(),
// 		 	scrolling   	= false;

// 	// BURGER MENU

// 	navButton.click(function() {
// 		navBar.toggleClass('open');
// 		navButton.toggleClass('open');
// 		navOverlay.toggleClass('display-none');

// 		if($('nav').hasClass('open')) {
// 			$('nav').css({'top': headerHeight});
// 		}
// 		else{
// 			$('nav').css({'top': '-50px'});
// 		}
// 	});

// 	navOverlay.click(function() {
// 		navBar.removeClass('open');
// 		navOverlay.addClass('display-none');
// 	});

// 	navLink.click(function() {
// 		navBar.removeClass('open');
// 		navOverlay.addClass('display-none');
// 	});

// 	// HEADER CHANGE
 
//     // $( window ).scroll( function() {
//     //     scrolling = true;
//     // });
    
//     // setInterval( function() {
// 	// 	if ( scrolling ) {

// 	// 		headerHeight	= $('header').outerHeight();
// 	// 		scrolling 		= false;

// 	// 		if (($(window).scrollTop() > 100) || ($window.width() < 450) ){
// 	// 			$('nav').css({'top': "'" + headerHeight + "'"});
// 	// 			$('header').addClass('header-small');
// 	// 			$('header').removeClass('header');
// 	// 			$('#primary-navigation').removeClass('top')
// 	// 		}

// 	// 		else if($(window.top == 0) && ($window.width() > 450)) {
// 	// 			$('header').addClass('header');
// 	// 			$('header').removeClass('header-small');
// 	// 			$('#primary-navigation').addClass('top');
// 	// 			$('nav').css({'top': '0'});
// 	// 			$(navButton).removeClass('open');
// 	// 			$(navBar).removeClass('open');
// 	// 		}
// 	// 	}
// 	// }, 50 );
   

// 	// SMOOTH SCROLL NAV

// 	$("a").on('click', function(event) {

// 		if (this.hash !== "") {
// 		  event.preventDefault();
	
// 		  var hash = this.hash;

// 		  $('html, body').animate({
// 			scrollTop: $(hash).offset().top
// 		  },0, function(){

// 			window.location.hash = hash;
// 		  });
// 		}
// 	});	
// });

