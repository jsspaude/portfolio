$(document).ready(function() {
    var containerPosit      = $('.services-container').offset().top;        
    var seactionHeading     = $('.section-heading').height();
    var svgMask             = $('[data-svg]');

    $(window).scroll(function() {

        // SCROLL SVGMASKS ON X AXIS USING DIV SCROLL TOP VALUE
        var headerSize          = $('#header').height();
        var scrollCurrent       = $(document).scrollTop() ;
        var percentArray        = [];
        console.log(scrollCurrent);
        $('.services-content').each(function(i){
            var positContent    = $(this).position().top;
            var offsetContent   = $(this).offset().top;
            var positDiff       = offsetContent - containerPosit;
            var scrollPercent   = ((scrollCurrent / (offsetContent - 150)) *100);

            console.log(offsetContent);

            $(scrollPercent).each(function(){
                percentArray.push(this);
            });

            if((offsetContent-150) < scrollCurrent) {
                $(this).addClass('active');
                $(svgMask).css('transform', 'translateX(100%)' );
            }

            if(!$(this).hasClass('active')){
                $(svgMask[i]).css('transform', 'translateX(' + percentArray[i] + '%)'  );
                console.log('test');
            }
        });
    });
});