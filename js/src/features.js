$(document).ready(function() {
    var topofDiv    = $('.services-content-container').offset().top;
    var height      = $('.services-content-container').outerHeight();
    $(window).scroll(function(){    
        if ($(this).scrollTop() > (topofDiv + height - 190)){ 
            $('.features-content-container').addClass('active');
            $('.features-content-container').addClass('in-view');
        }
        else{
            $('.features-content-container').removeClass('active');
        }
    });
});

