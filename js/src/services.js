$(document).ready(function() {
    var containerPosit      = $('.services-container').offset().top;        
    var seactionHeading     = $('.section-heading').height();
    var svgMask             = $('[data-svg]');

    $(window).scroll(function() {

        // SCROLL SVGMASKS ON X AXIS USING DIV SCROLL TOP VALUE
        var headerSize          = $('#header').height();
        var heightDiff          = seactionHeading + headerSize + 50 /* CONTENT PADDING (30) + EXTRA */;
        var scrollCurrent       = $(document).scrollTop() + heightDiff;
        var percentArray        = [];
       
        $('.services-content').each(function(i){
            var positContent    = $(this).position().top;
            var offsetContent   = $(this).offset().top;
            var positDiff       = offsetContent - containerPosit;
            var scrollPercent   = ((scrollCurrent / (positContent)) *100);

            console.log(positContent);
            console.log(scrollCurrent);

            $(scrollPercent).each(function(){
                percentArray.push(this);
            });

            if(offsetContent < scrollCurrent) {
                $(this).addClass('active');
                $(svgMask).css('transform', 'translateX(100%)' );
            }

            if($(this).not('.active')){
                $(svgMask[i]).css('transform', 'translateX(' + percentArray[i] + '%)'  );
            }
        });
    });
});