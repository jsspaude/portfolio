$(document).ready(function() {

    const drawing       = $('.foreground');
    const heroSVG       = $('#van-skyline');   
    const drawingEnd    = $(drawing).length;
    const windowWidth   = $(window).width();
    var scrolling       = false;

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
            var scrollCurrent  = $(document).scrollTop();

            $(heroSVG).css('transform', 'translateY(' + (scrollCurrent * 3) + 'px)');
        }
    }, 10 );
    
});