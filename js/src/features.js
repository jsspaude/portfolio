$(document).ready(function() {
    var scrolling   = false;
 
    $( window ).scroll( function() {
        scrolling = true;
    });
    
    setInterval( function() {
        
        if ( scrolling ) {
            
            scrolling               = false;
            var scrollCurrent       = $(document).scrollTop();
            var offsetContent       = $('.features-content-container').offset().top;
            var offsetContainer     = $('.features-container').offset().top;
            var scrollPercent       = ((scrollCurrent - offsetContainer)+100)/1000;

            if((offsetContent-200) < scrollCurrent) {
                $('.features-content').each(function(i){
                    featureActive();
                });
            }

            if(scrollPercent < .2 ) {

                $('#slopeEffect').attr('slope', scrollPercent  );   
                $('#slopeEffectTablet').attr('slope', (scrollPercent -.05)  );   
                $('#slopeEffectMobile').attr('slope', (scrollPercent -.1) ); 
            }

            // figure out percent of div scrolled through not percent of div from top
        }
    }, 20 );

    function featureActive() {

        $('.features-content').each(function(i) {
          var featureContent = $(this);
          setTimeout(function() {
            featureContent.addClass('active');
          }, i*1000);
        });
            
    }
});