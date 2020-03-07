// HEADER INITIAL

if ((scrollTop > 100) || (screen.width < 450)) {
	header.className = 'header-small';
	navBar.classList.remove('top');
}

else {
	header.className = 'header';
	navBar.classList.add('top');
}

//HEADER CHANGE

window.onscroll = function() {
	var 	scrollTop 	= pageYOffset;

	if ((scrollTop > 100) || (screen.width < 450) ){
		navBar.style.top = headerHeight;
		header.className = 'header-small';
		navBar.classList.remove('top');
	}

	else if((scrollTop === 0) && (screen.width > 450)) {
		header.className = 'header';
		navBar.classList.add('top');
		navButton.classList.remove('open');
		navBar.classList.remove('open');
		navBar.style.top = '0px';
	}
};

// BURGER MENU

navButton.addEventListener('click', () => {
	navBar.classList.toggle('open');
	navButton.classList.toggle('open');

	hasOpen();
});

mainDiv.addEventListener('click', () => {

	if(screen.width < 100 || scrollTop > 0) {
	navButton.classList.remove('open');
	navBar.classList.remove('open');
	
	hasOpen();
	}
});


function hasOpen(){

	var isOpen = navBar.classList.contains('open')

	if(isOpen) {
		navBar.style.top = `${headerHeight}px`;
	}
	else{
		navBar.style.top = '-50px';
	}
};

// navLink.click(function() {
// 	navBar.removeClass('open');
// 	navOverlay.addClass('display-none');
// });

 
   

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