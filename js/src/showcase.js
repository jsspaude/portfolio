    const   showcaseSection         = sections[sections.indexOf(document.querySelector('[data-js="showcase"]'))],
            showcaseWrapper         = [...showcaseSection.querySelectorAll('[data-js="wrapper"]')],
            showcaseConContainer    = [...showcaseSection.querySelectorAll('[data-js="contentContainer"]')],
            showcaseTop             = $('.showcase-content-container').offset().top,
            contentContainer        = $('.showcase-content-container'),
            wrapperEnd              = $('.showcase-wrapper').length;
    var     x                       = 1,
            length                  = 0;

    showcaseWrapper[showcaseWrapper.length-1].classList.add('hidden');
    showcaseSection.style.minHeight = showcaseWrapper.length * 550 + "px";
    featConArray.map(element => gbcrTop(element) + scrollTop)

    showcaseWrapper.forEach((content, index) => {
        const containerOffset = showcaseConContainer.map(element => gbcrTop(element)+scrollTop);
        content.style.top = containerOffset[index] + 'px';
        if((index % 2 === 0) || index === 0) {
            showcaseConContainer[index].classList.add('even');
            content.classList.add('even');
        }

        window.addEventListener('scroll', () => {
            if((gbcrTop(content)-viewHeight(20) <= 0) && (index != showcaseWrapper.length)) {
                content.classList.add('active');
            }
        });
    });

 