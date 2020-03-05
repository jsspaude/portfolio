
const   svgMaskArray        = [...document.querySelectorAll('[data-svg*="servicesMask"]')],
        svgCircArray        = [...document.querySelectorAll('[data-svg*="servicesCirc"]')],
        servConArray        = [...document.querySelectorAll('[data-js*="servicesContent"]')],
        sectionHeading	    = document.querySelector('[data-js*="servicesHeading"]').getBoundingClientRect().height,
        servConContainer    = document.querySelector('[data-js*="servConContainer"]'),
        servContainer       = document.querySelector('[data-js*="servContainer"]'),
        servRootArray       = [...document.querySelectorAll('[data-svg*="servRoot"]')],
        servGroupArray      = [...document.querySelectorAll('[data-svg*="servGroup"]')];

// SCROLL LISTENERS

window.addEventListener('scroll',() => { serviceScroll();});

function serviceScroll() {
    const   servConTop      = servConArray.map(element => element.getBoundingClientRect().top),
            servConOffs     = servConArray.map(element => element.offsetTop),
            aboveDiff       = headerHeight + sectionHeading + (servConContainer.offsetTop - servContainer.offsetTop);

    // SCROLL SVGMASKS ON X AXIS USING DIV SCROLL TOP VALUE
    servConArray.forEach((content,index) => {
        if(servConTop[index] - aboveDiff <= 0) {
            content.classList.add('active');
        }    
    });
    
    svgMaskArray.forEach((item, index) => {
        const   scrollPercent   = 100-(((servConTop[index]-aboveDiff)/servConOffs[index])*100),
                radiusPercent   = ((scrollPercent)/2);
        if(scrollPercent < 100) {
            item.setAttribute('r', ((radiusPercent) + '%'));
        }
    });

    svgCircArray.forEach((item, index) => {
        const scrollPercent   = 100-(((servConTop[index]-aboveDiff)/servConOffs[index])*100);
        if(scrollPercent < 100) { 
            item.setAttribute('r', ((scrollPercent/2) + '%'));
        }
    });

};
