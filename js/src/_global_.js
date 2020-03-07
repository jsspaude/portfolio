// VARS
const 	scrollTop 		= pageYOffset,
		header 			= document.querySelector('[data-js*="header"]'),
		navBar			= document.querySelector('[data-js*="primeNav"]'),
		navButton 		= document.querySelector('[data-js*="menuToggle"]'),
		mainDiv			= document.querySelector('[data-js*="main"]'),
		sections        = [...document.querySelectorAll('section')],
		headerHeight	= header.getBoundingClientRect().height,
		h 				= Math.max(document.documentElement.clientHeight, window.innerHeight || 0);
        
// FUNCS        

var gbcrTop 		= x => x.getBoundingClientRect().top;
var heightDiff 		= (x, y) => gbcrTop(x) - gbcrTop(y);
var heightSum 		= (x, y) => gbcrTop(x) + gbcrTop(y);
var viewHeight		= v => (v * h) / 100;
