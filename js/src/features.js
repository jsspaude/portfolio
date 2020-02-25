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

            if((offsetContent-200) < scrollCurrent) {
                $('.features-content').each(function(i){
                    featureActive();
                    scrolling = false;
                });
            }      
        }
        console.log(scrolling);
    }, 250 );

    function featureActive() {

        $('.features-content').each(function(i) {
          var featureContent = $(this);
          setTimeout(function() {
            featureContent.addClass('active');
          }, i*1000);
        });
            
    }
});