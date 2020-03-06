const   featConContainer    = document.querySelector('[data-js*="featConContainer"]'),
        featConArray        = [...document.querySelectorAll('[data-js*="featureContent"]')],
        featConOffs         = featConArray.map(element => element.getBoundingClientRect().top),
        slopeEffect         = document.querySelectorAll('[data-js*="slopeEffect"]');

window.addEventListener('scroll', () => {   slopeScroll(); 
                                            featureScroll(); });

function featureScroll(){
    const   isEqual       = (input) => {  
                            const offsetEnd = featConArray[featConArray.length-1].offsetTop;
                            return input.every(element => element.offsetTop === offsetEnd);
                            };
    const   isTrue        = isEqual(featConArray);

    if(isTrue) {
        featConArray[featConArray.length-1].classList.add('active');
    }

    featConArray.forEach((content, index) => {
        if((content.offsetTop > featConOffs[index])){
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
