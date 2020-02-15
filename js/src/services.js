$(document).ready(function() {
    var topofDiv    = $('.form-container').offset().top;
    var height      = $('.form-container').outerHeight();

    console.log(topofDiv);
    console.log(height);

    $('.fill').addClass('paused');

    $(window).scroll(function(){    
        if ($(this).scrollTop() > (topofDiv + height)){ 
            $('.fill').removeClass('paused');
            $('.fill').addClass('active');
            console.log('active');
        }
        else{
            $('.fill').removeClass('active');
            $('.fill').addClass('paused');
        }
    });

    $(window).on('scroll', function() {
        console.log( $(this).scrollTop() );
    });
});

