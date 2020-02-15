$(document).ready(function() {
    var topofDiv    = $('.showcase-container').offset().top;

    $(window).scroll(function(){    
        if ($(this).scrollTop() > (topofDiv - 100)){ 
            $('.showcase-container').addClass('active');
        }
        else{
            $('.showcase-container').removeClass('active');
        }
    });

    $('.showcase-wrapper').each(function(i){

        var $this           = $(this).data('row', i);
        var posit           = $('.showcase-container').position();
        var initNewPosit    = (posit.top*i) + posit.top;
        var newPosit        = (posit.top*i);
        var height          = $this.height();
        var heightPosit     = newPosit + height;

        if(i===0) {
            $this.offset({top:initNewPosit});
        }
        else{
            $this.offset({top:heightPosit});
        }
    });
});