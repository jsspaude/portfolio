const   offsetArray = [],
        fContent = document.querySelectorAll('[data-js*=fContent');


fContent.forEach((element) => {
    var offset = element.offsetTop;

    offsetArray.push(offset);
});

setInterval( featuresScroll, 20 );
    
function featuresScroll() {
    if ( scrolling ) {
        
        scrolling               = false;
        var scrollCurrent       = $(document).scrollTop();
        var offsetContainer     = $('.features-container').offset().top;
        var scrollPercent       = ((scrollCurrent - offsetContainer)+100)/1000;
        
        fContent.forEach((content, i) => {
            var offset = content.offsetTop;
            
            if(offset > offsetArray[i]) {
                content.classList.add('active');
            }
            
        });


        if(scrollPercent < .2 ) {

            $('#slopeEffect').attr('slope', scrollPercent  );   
            $('#slopeEffectTablet').attr('slope', (scrollPercent -.05)  );   
            $('#slopeEffectMobile').attr('slope', (scrollPercent -.1) ); 
        }

    }
}
