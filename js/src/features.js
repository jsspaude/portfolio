$(document).ready(function() {
    var topofDiv    = $('.services-content-container').offset().top;
    var height      = $('.services-content-container').outerHeight();
    var scrolling   = false;
 
    $( window ).scroll( function() {
        scrolling = true;
    });
    
    setInterval( function() {
        
        if ( scrolling ) {
            
            scrolling               = false;
            var scrollCurrent       = $(document).scrollTop() ;
            var offsetContent       = $('.features-content-container').offset().top;

                if((offsetContent-200) < scrollCurrent) {
                     featuresActive();
                }      
        }
    }, 250 );

    $('.dynamicInput').each(function() {
        var elem            = $(this);
     
        // Save current value of element
        elem.data('oldVal', elem.val());
     
        // Look for changes in the value
        elem.bind("propertychange change click keyup input paste", function(event){
           // If value has changed...
            if (elem.data('oldVal') != elem.val()) {
            // Updated stored value
            elem.data('oldVal', elem.val());
                $('.heading').text(elem.val());
            }
        });
    });

    function featuresActive() {
        
        $('.features-content').each(function(i){
            
            setTimeout (function() {
                console.log('test');
                var $this = $(this);
                $this.addClass('active');
            },250 );
        });
    
    }
});