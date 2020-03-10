const   servicesSection     = sections[sections.indexOf(document.querySelector('[data-js="servComp"]'))],
        servConContainer    = servicesSection.querySelector('[data-js="contentContainer"]'),
        servContent         = [...servicesSection.querySelectorAll('[data-js="content"]')],
        servConPosit        = servContent.map(element => gbcrTop(element)+scrollTop),
        svgRoot             = [...document.querySelectorAll('[data-svg="services"]')];

window.addEventListener('scroll',() => { serviceScroll();});

function serviceScroll() {

    servContent.forEach((content,index) => {
        const   contentTop      = gbcrTop(content),
                svgGroup        = svgRoot[index].querySelector('g'),
                servHeightDiff  = heightDiff(servicesSection, servConContainer),
                activate        = contentTop - (headerHeight - servHeightDiff) -100,
                scrollScale     = 1-((contentTop+servHeightDiff)/servConPosit[index]);

        if(activate <= 0) {
            content.classList.add('active');
        }  

        else {
            content.classList.remove('active');
            content.classList.remove('inactive');
        }

        if(content.classList.contains('active') && index > 0) {
            servContent[index-1].classList.add('inactive');
        }

        if(scrollScale <= 1 && screen.width > 1200) {
            svgGroup.setAttribute('transform', 'scale('+scrollScale+')');
        }
    });
};