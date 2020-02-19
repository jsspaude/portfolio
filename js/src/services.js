$(document).ready(function() {
    var topofDiv    = $('.services-container').offset().top;
    

    $(window).scroll(function() {

            // // calculate the percentage the user has scrolled down the page
            // var scrollPercent = 100 * $(window).scrollTop() / ($(document).height() - $(window).height());

            // $('.fill').css('transform', 'translateX(' + scrollPercent + '%)'  );

            // console.log(scrollPercent);

            var scrollCon       = $('.services-container').offset().top;
            var scrollCurr      = ($(window).scrollTop()) + 50;
            var scrollPercent   = ((scrollCurr) / scrollCon) *100;
            var scrollPos       = scrollPercent;

            if(scrollPos >= 90) {
                $('.svgMask').css('transform', 'translateX(100%)' );
                $('.shapeFill').addClass('active');
            }

            else {
                $('.svgMask').css('transform', 'translateX(' + scrollPos + '%)'  );
                $('.shapeFill').removeClass('active');
            }

            console.log(scrollCurr);
    });

});

    
