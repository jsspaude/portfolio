const   servicesSection     = sections[sections.indexOf(document.querySelector('[data-js="servComp"]'))],
        servConContainer    = servicesSection.querySelectorAll('[data-js="contentContainer"]'),
        servContent         = [...servicesSection.querySelectorAll('[data-js="content"]')],
        servConPosit        = servContent.map(element => element.getBoundingClientRect().top+scrollTop),
        svgRoot             = [...document.querySelectorAll('[data-svg="services"]')];

window.addEventListener('scroll',() => { serviceScroll();});

function serviceScroll() {

    servContent.forEach((content,index) => {
        const   contentTop      = content.getBoundingClientRect().top,
                scrollScale     = 1-(contentTop/servConPosit[index]),
                svgGroup        = svgRoot[index].querySelector('g');

        if(contentTop - headerHeight - 20 <= 0) {
            content.classList.add('active');
        }  

        else {
            content.classList.remove('active');
        }

        if(scrollScale <= 1) {
            svgGroup.setAttribute('transform', 'scale('+scrollScale+')');
        }
    });
};