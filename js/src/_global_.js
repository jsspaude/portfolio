// VARS
const 	scrollTop 		= pageYOffset,
		header 			= document.querySelector('[data-js*="header"]'),
		navBar			= document.querySelector('[data-js*="primeNav"]'),
		navButton 		= document.querySelector('[data-js*="menuToggle"]'),
		navLink			= navBar.querySelectorAll('a'),
		mainDiv			= document.querySelector('[data-js*="main"]'),
		sections        = [...document.querySelectorAll('section')],
		headerHeight	= header.getBoundingClientRect().height,
		backToTop		= document.querySelector('[data-js="backToTop"]'),
		h 				= Math.max(document.documentElement.clientHeight, window.innerHeight || 0);

// FUNCS        

const 	gbcrTop 		= x => x.getBoundingClientRect().top,
		heightDiff 		= (x, y) => gbcrTop(x) - gbcrTop(y),
		heightSum 		= (x, y) => gbcrTop(x) + gbcrTop(y),
		viewHeight		= v => (v * h) / 100;
