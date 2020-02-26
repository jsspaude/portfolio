$(document).ready(function() {
    var svgMask             = $('.svgMask[data-svg]');
    var scrolling           = false;
 
    $( window ).scroll( function() {
        scrolling = true;
    });
    
    setInterval( function() {
        if ( scrolling ) {
            scrolling = false;

            // SCROLL SVGMASKS ON X AXIS USING DIV SCROLL TOP VALUE
            var scrollCurrent       = $(document).scrollTop() ;
            var percentArray        = [];
            
            $('.services-content').each(function(i){
                var offsetContent   = $(this).offset().top;
                var scrollPercent   = ((scrollCurrent / (offsetContent - 200)) *100);

                $(scrollPercent).each(function(){
                    percentArray.push(this);
                });

                if((offsetContent-300) < scrollCurrent) {
                    $(this).addClass('active');
                    $(svgMask).css('transform', 'translateX(100%)' );
                }

                if(!$(this).hasClass('active')){
                    $(svgMask[i]).css('transform', 'translateX(' + percentArray[i] + '%)'  );
                }       
            });
        }
    }, 20 );
});