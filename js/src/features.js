$(document).ready(function() {
    var topofDiv    = $('.hero-container').offset().top;
    var height      = $('.hero-container').outerHeight();
    $(window).scroll(function(){    
        if ($(this).scrollTop() > (topofDiv + height - 100)){ 
            $('.features-content-container').addClass('active');
            $('.features-content-container').addClass('in-view');
        }
        else{
            $('.features-content-container').removeClass('active');
        }
    });
});

