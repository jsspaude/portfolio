const   offsetArray         = [],
        featureContainer    = document.querySelector('[data-js*="featureContainer"]'),
        featureContent      = document.querySelectorAll('[data-js*="featureContent"]'),
        featureArray        = Array.from(featureContent),
        slopeEffect         = document.querySelectorAll('[data-js*="slopeEffect"]');
var     flag                = false;

window.addEventListener('scroll', featureScroll );
window.addEventListener('scroll', slopeScroll );

// CREATE INITIAL STATE ARRAY

featureContent.forEach((element) => {
    const offset    = element.offsetTop;

    offsetArray.push(offset);
});

// ACTIVATE ON SCROLL

function featureScroll(){
    const   isEqual       = (input) => {  
                            const offsetEnd = featureArray[featureArray.length-1].offsetTop;
                            return input.every(element => element.offsetTop === offsetEnd);
                            };
    const   isTrue        = isEqual(featureArray);

    featureArray.forEach((content, index) => {
        const offset  = content.offsetTop;

        if((offset > offsetArray[index])){
            content.classList.add('active');
        }
    });  

    if(isTrue) {
        featureArray[featureArray.length-1].classList.add('active');
    }
}

// SVG SLOPE MODIFIER

function slopeScroll(){
    const   scrollTop 	    = pageYOffset,
            offsetContainer = featureContainer.offsetTop,         
            scrollPercent   = ((scrollTop - offsetContainer)+100)/1000;

    slopeEffect.forEach((item, index) => {
        if(scrollPercent < .2 ) {
            const modifier = index * .05;

            item.setAttribute('slope', (scrollPercent - modifier));
        }
    });
}
