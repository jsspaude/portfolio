const   offsetArray     = [],
        featureContainer = document.querySelector('[data-js*="featureContainer"]'),
        featureContent  = document.querySelectorAll('[data-js*="featureContent"]'),
        slopeEffect = document.querySelectorAll('[data-js*="slopeEffect"]');


// CREATE INITIAL STATE ARRAY

featureContent.forEach((element) => {
    var offset = element.offsetTop;

    offsetArray.push(offset);
});

// WATCH FOR OFFSET CHANGE
    
window.addEventListener('scroll', featureScroll );
window.addEventListener('scroll', slopeScroll );

function featureScroll(){
    featureContent.forEach((content, i) => {
        var offset = content.offsetTop;
        
        if(offset > offsetArray[i]) {
            content.classList.add('active');
        }
    });
}

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
