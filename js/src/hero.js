const   heroCompRect        = document.querySelector('[data-js*="heroComp"]').getBoundingClientRect(),
        heroFGArray         = [...document.querySelectorAll('[data-svg*="heroFG"]')],
        heroSVG             = document.querySelector('[data-svg*="hero_1"]'),
        heroPathArray       = [...document.querySelectorAll('[data-svg*="heroFG"] [data-svg*="heroPath"]' )];

window.addEventListener('scroll',() => {heroScroll();});

heroFGArray.forEach((content,index) => {
    if(index <= (heroFGArray.length-1)) {
        setTimeout( () => {
            content.classList.add('visible');
        }, index*250);
    }
});

function heroScroll(){
    if(pageYOffset > 0) {
        heroSVG.style.transition = 'all 5s ease';
        heroSVG.style.transform = 'translateY(2000px)';
    }

    else {
        heroSVG.style.transition = 'all 1s ease';
        heroSVG.style.transform = 'translateY(0px)';
    }
};