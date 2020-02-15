$(document).ready(function() {
    var topofDiv    = $('.form-container').offset().top;
    var height      = $('.form-container').outerHeight();

    $('.fill').addClass('paused');

    $(window).scroll(function(){    
        if ($(this).scrollTop() > (topofDiv + height - 190)){ 
            $('.fill').removeClass('paused');
            $('.fill').addClass('active');
        }
        else{
            $('.fill').removeClass('active');
            $('.fill').addClass('paused');
        }
    });
});

