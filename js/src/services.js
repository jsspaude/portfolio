$(document).ready(function() {
    var topofDiv    = $('.form-container').offset().top;
    var height      = $('.form-container').outerHeight();

    $('.fill').addClass('paused');

    $(window).scroll(function(){    
<<<<<<< HEAD
        if ($(this).scrollTop() > (topofDiv + height - 190)){ 
=======
        if ($(this).scrollTop() > (topofDiv + height)){ 
>>>>>>> fixing
            $('.fill').removeClass('paused');
            $('.fill').addClass('active');
        }
        else{
            $('.fill').removeClass('active');
            $('.fill').addClass('paused');
        }
    });
<<<<<<< HEAD
});

=======

    $(window).scroll(function() {

            // // calculate the percentage the user has scrolled down the page
            // var scrollPercent = 100 * $(window).scrollTop() / ($(document).height() - $(window).height());

            // $('.fill').css('transform', 'translateX(' + scrollPercent + '%)'  );

            // console.log(scrollPercent);

            var scrollCon       = $('.services-container').offset().top;
            var scrollCurr      = $(window).scrollTop();
            var scrollPercent   = ((scrollCurr + 100) / scrollCon) *100;
            var scrollPos       = scrollPercent - 100;

            $('.fill').css('transform', 'translateX(' + scrollPos + '%)'  );
    });

});

    
>>>>>>> fixing
