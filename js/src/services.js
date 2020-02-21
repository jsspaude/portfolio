$(document).ready(function() {
    var containerPosit      = $('.services-container').offset().top;        
    var seactionHeading     = $('.section-heading').height();
    var svgMask             = $('[data-svg]');
    var shapeFill           = $('.shapeFill');
    var headingContainer    = $('.services-content > .heading-container');

    $(window).scroll(function() {

        // SCROLL SVGMASKS ON X AXIS USING DIV SCROLL TOP VALUE
        var headerSize          = $('#header').height();
        var heightDiff          = seactionHeading + headerSize + 50 /* CONTENT PADDING (30) + EXTRA */;
        var scrollCurrent       = $(document).scrollTop() + heightDiff;
        var percentArray        = [];
       
        $('.services-content').each(function(i){
            var positContent    = $(this).position().top;
            var svg             = $(this).find('svg');
            var offsetContent   = $(this).offset().top;
            var positDiff       = offsetContent - containerPosit;
            var scrollPercent   = ((scrollCurrent / (positContent)) *100);

            $(scrollPercent).each(function(){
                percentArray.push(this);
            });

            if(offsetContent < scrollCurrent) {
                $(svgMask).css('transform', 'translateX(100%)' );
                $(shapeFill[i]).addClass('active');
                $(svg).addClass('active');
                $(headingContainer[i]).addClass('active');
            }
            else{
                $(shapeFill[i]).removeClass('active');
                $(svg).removeClass('active');
            }
            if(!shapeFill.hasClass('active')){
                $(svgMask).css('transform', 'translateX(' + percentArray[i] + '%)'  );
            }

            
        
            

            console.log(offsetContent);
            console.log(scrollCurrent);
        });
    });
});