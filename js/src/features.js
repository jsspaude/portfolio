const   featuresSection     = sections[sections.indexOf(document.querySelector('[data-js="features"]'))],
        featConContainer    = featuresSection.querySelector('[data-js="contentContainer"]'),
        featConArray        = [...featuresSection.querySelectorAll('[data-js="content"]')],
        featConOffs         = featConArray.map(element => gbcrTop(element) + scrollTop),
        featMarker          = (gbcrTop(featConContainer)+pageYOffset) - headerHeight - (viewHeight(25)),
        slopeEffect         = document.querySelectorAll('[data-js*="slopeEffect"]');

window.addEventListener('scroll', () => {   slopeScroll(); 
                                            featureScroll(); });

function featureScroll(){
    const   isEqual         = (input) => {  
                                const offsetEnd = featConArray[featConArray.length-1].offsetTop;
                                return input.every(element => element.offsetTop === offsetEnd);
                                },
            isTrue          = isEqual(featConArray);
            scrollTop 	    = pageYOffset;

    if(isTrue) {
        featConArray[featConArray.length-1].classList.add('active');
    }

    featConArray.forEach((content, index) => {
        const   contentPosit    = featConArray.map(content => scrollTop + headerHeight + (heightDiff(featuresSection,content)));

        if((contentPosit[index] >= featMarker) || (content.offsetTop > featConOffs[index])){
            content.classList.add('active');
        }
    });  
}

function slopeScroll(){
    const   scrollTop 	    = pageYOffset,
            offsetContainer = featConContainer.offsetTop,         
            scrollPercent   = ((scrollTop - offsetContainer)+100)/1000;

    slopeEffect.forEach((item, index) => {
        if(scrollPercent < .2 ) {
            const modifier = index * .05;

            item.setAttribute('slope', (scrollPercent - modifier));
        }
    });
}
