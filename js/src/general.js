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
		backToTop.style.bottom = "0px";
	}

	else if((scrollTop === 0) && (screen.width > 450)) {
		header.className = 'header';
		navBar.classList.add('top');
		navButton.classList.remove('open');
		navBar.classList.remove('open');
		navBar.style.top = '0px';
		backToTop.style.bottom = "-500px";
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

navLink.forEach((item) =>{
	item.addEventListener('click', () => {

		if(screen.width < 100 || scrollTop > 0) {
		navButton.classList.remove('open');
		navBar.classList.remove('open');
		
		hasOpen();
		}
	})
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
   

// SMOOTH SCROLL NAV

// Vanilla JavaScript Scroll to Anchor
// @ https://perishablepress.com/vanilla-javascript-scroll-anchor/

(function() {
	scrollTo();
})();

function scrollTo() {
	var links = document.getElementsByTagName('a');
	for (var i = 0; i < links.length; i++) {
		var link = links[i];
		if ((link.href && link.href.indexOf('#') != -1) && ((link.pathname == location.pathname) || ('/' + link.pathname == location.pathname)) && (link.search == location.search)) {
			link.onclick = scrollAnchors;
		}
	}
}

function scrollAnchors(e, respond = null) {
	const distanceToTop = el => Math.floor(el.getBoundingClientRect().top);
	e.preventDefault();
	var targetID = (respond) ? respond.getAttribute('href') : this.getAttribute('href');
	const targetAnchor = document.querySelector(targetID);
	if (!targetAnchor) return;
	const originalTop = distanceToTop(targetAnchor);
	window.scrollBy({ top: originalTop, left: 0, behavior: 'smooth' });
	const checkIfDone = setInterval(function() {
		const atBottom = window.innerHeight + window.pageYOffset >= document.body.offsetHeight - 2;
		if (distanceToTop(targetAnchor) === 0 || atBottom) {
			targetAnchor.tabIndex = '-1';
			targetAnchor.focus();
			window.history.pushState('', '', targetID);
			clearInterval(checkIfDone);
		}
	}, 100);
}