
const   svgMaskArray        = [...document.querySelectorAll('[data-svg*="servicesMask"]')],
        svgCircArray        = [...document.querySelectorAll('[data-svg*="servicesCirc"]')],
        servConArray        = [...document.querySelectorAll('[data-js*="servicesContent"]')];

window.addEventListener('scroll',() => { serviceScroll();});

function serviceScroll() {
    const   servConTop      = servConArray.map(element => element.getBoundingClientRect().top),
            servConOffs     = servConArray.map(element => element.offsetTop);


    servConArray.forEach((content,index) => {
        const   scrollPercent   = 100-(((servConTop[index]-headerHeight)/servConOffs[index])*100),
                radiusPercent   = ((scrollPercent)/2);
        
        if(servConTop[index] - headerHeight - 20 <= 0) {
            content.classList.add('active');
        }  
        
        if(servConTop[index]-headerHeight > 0) {
            svgMaskArray[index].setAttribute('r', ((radiusPercent) + '%'));
            svgCircArray[index].setAttribute('r', ((scrollPercent/2) + '%'));
        }
    });
};
