$(document).ready(function() {
    var topofDiv    = $('.services-content-container').offset().top;
    var height      = $('.services-content-container').outerHeight();
    var scrolling   = false;
 
    $( window ).scroll( function() {
        scrolling = true;
    });
    
    setInterval( function() {
    if ( scrolling ) {
        
        scrolling = false;
        
        if ($(this).scrollTop() > (topofDiv + height - 190)){ 
            $('.features-content-container').addClass('active');
            $('.features-content-container').addClass('in-view');
        }
        else{
            $('.features-content-container').removeClass('active');
        }
    }
    }, 250 );

});
