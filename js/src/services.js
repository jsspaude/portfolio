$(document).ready(function() {
    var servicesContainer   = $('.services-container').position().top;
    var contentContainer    = $('.services-content-container').position().top;
    var svgMask             = $('[data-svg]');
    var shapeFill           = $('.shapeFill');

    $(window).scroll(function() {

        // SCROLL SVGMASKS ON X AXIS USING DIV SCROLL TOP VALUE
        var scrollCurrent       = ($(document).scrollTop());
        var heightDiff          = (contentContainer - servicesContainer) + 80;
        var percentArray        = [];
       
        $('.services-content').each(function(i){
            var positContent    = ($(this).position().top) - heightDiff;
            var scrollPercent   = ((scrollCurrent) / positContent) *100;

            if(positContent < scrollCurrent) {
                $(svgMask).css('transform', 'translateX(100%)' );
                $(shapeFill[i]).addClass('active');
            }
            else{
                $(shapeFill[i]).removeClass('active');
            }

            $(scrollPercent).each(function(){
                percentArray.push(this);
            });
        
            $(svgMask[i]).css('transform', 'translateX(' + percentArray[i] + '%)'  );
        });
    });
});