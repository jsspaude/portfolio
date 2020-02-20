$(document).ready(function() {
    var topofDiv    = $('.services-container').offset().top;
    

    $(window).scroll(function() {

            // // calculate the percentage the user has scrolled down the page
            // var scrollPercent = 100 * $(window).scrollTop() / ($(document).height() - $(window).height());

            // $('.fill').css('transform', 'translateX(' + scrollPercent + '%)'  );

            // console.log(scrollPercent);

            var scrollContainer         = $('.services-container').position().top;
            var scrollContent           = $('.services-content').position().top;
            var scrollCurrent           = ($(window).scrollTop());
            var scrollPercent           = ((scrollCurrent) / scrollContent) *100;
            var scrollPosition          = scrollPercent;
            var container               = $('.shapeFill');

            $(container).each(function(i){
                if(scrollPosition >= 90) {
                    $('.svgMask').css('transform', 'translateX(100%)' );
                    $(this).addClass('active');
                }
            });

            if(scrollPosition < 90) {
                $('.svgMask').css('transform', 'translateX(' + scrollPosition + '%)'  );
                $('.shapeFill').removeClass('active');
            }

            console.log(scrollContainer);
            console.log(scrollContent);
            console.log(scrollCurrent);
    });

});

    
