$(document).ready(function() {
    var topofDiv    = $('.form-container').offset().top;
    var height      = $('.form-container').outerHeight();
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

