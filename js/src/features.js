const   featConOffs         = [],
        featConContainer    = document.querySelector('[data-js*="featConContainer"]'),
        featConArray        = [...document.querySelectorAll('[data-js*="featureContent"]')],
        slopeEffect         = document.querySelectorAll('[data-js*="slopeEffect"]');

// SCROLL LISTENERS

// window.addEventListener('scroll', featureScroll );
window.addEventListener('scroll', () => {   slopeScroll(); 
                                            featureScroll(); });

// CREATE INITIAL STATE ARRAY

featConArray.forEach((element) => {
    featConOffs.push(element.offsetTop);
});

// ACTIVATE ON SCROLL

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

// SVG SLOPE MODIFIER

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
