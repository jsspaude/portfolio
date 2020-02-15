$(document).ready(function() {
<<<<<<< HEAD
    var topofDiv    = $('.showcase-content-container').offset().top;
    var x           = 1;
    var length      = 0;
    
    $("div[data-row]").each(function() {
        if ($(this).attr('data-row') % 2 == 1 && ($(this).attr('data-row') != 0)){
            $(this).addClass('odd');
        }
    });
=======
    var topofDiv    = $('.showcase-container').offset().top;
>>>>>>> features svgs updated

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
<<<<<<< HEAD
        var container       = $('.showcase-content-container[data-row="1"');
        var posit           = $(container).position();
        var height          = (container.height()) + 60;
        var initNewPosit    = (posit.top*i) + posit.top;
        var newPosit        = (posit.top) + (height*i);

=======
        var posit           = $('.showcase-container').position();
        var initNewPosit    = (posit.top*i) + posit.top;
        var newPosit        = (posit.top*i);
        var height          = $this.height();
        var heightPosit     = newPosit + height;
>>>>>>> features svgs updated

        if(i===0) {
            $this.offset({top:initNewPosit});
        }
        else{
<<<<<<< HEAD
            $this.offset({top:newPosit});
        }

        length++;
    });   

    $(window).scroll(function(){  

        var dashedLine      = $('.showcase-wrapper[data-row' + '=' + (x) +']')
        var height          = dashedLine.offset().top;


        if ($(this).scrollTop() > (height - 70) && (x != length)) {

            $(dashedLine).addClass('active');

            if (x < length) {
                x++
            }
=======
            $this.offset({top:heightPosit});
>>>>>>> features svgs updated
        }
    });
});