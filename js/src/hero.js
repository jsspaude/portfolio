$(document).ready(function() {

    const   drawing       = $('.foreground'),
            heroSVG       = $('#van-skyline'),  
            drawingEnd    = $(drawing).length;
    var     scrolling       = false;

    $(drawing).each(function(i){

        if(i <= drawingEnd) {

            setTimeout(function() {

                    $(drawing[i]).children().attr('filter' , 'url(#dropshadow)');
                    $(drawing[i]).children().addClass('visible');
            }, i*250);
        }
    });
 
    $( window ).scroll( function() {
        scrolling = true;
    });
    
    setInterval( function() {
        if ( scrolling ) {
            scrolling = false;

            const scrollCurrent  = $(document).scrollTop();

            if(scrollCurrent > 0) {

                $(heroSVG).addClass('active');
            }
            else {
                $(heroSVG).removeClass('active');
            }
        }
    }, 10 );    
});