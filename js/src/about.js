$(document).ready(function() {

    var topofDiv        = $('.features-content-container').offset().top;
    var height          = $('.features-content-container').outerHeight();
    var abtStringType   = $('.special-heading');
<<<<<<< HEAD
<<<<<<< HEAD
    var specialChar     = $('.specialChar');
    var abtCharActive   = specialCharActive();
=======
>>>>>>> fixing
=======
>>>>>>> showcase lines
        
    arrayAbt(abtStringType);
    
    $(window).scroll(function(){    
        if ($(this).scrollTop() > (topofDiv + height - 190)){ 
            $('.about-graphic-container').addClass('active');
            $('.special-heading').addClass('active');
            specialCharActive();
        }
    });

    function specialCharActive() {


        $('.specialChar').each(function(i) {
          var specialChar = $(this);
          setTimeout(function() {
            specialChar.addClass('active');
<<<<<<< HEAD
<<<<<<< HEAD
          }, i*100);
=======
          }, i*150);
>>>>>>> fixing
=======
          }, i*150);
>>>>>>> features svgs updated
        });
            
    }

    function arrayAbt(string) {

        $(string).each(function() {
    
            var abtStr           = $(this).html();
            var abtStrTrm        = abtStr.trim();
            var abtStr           = abtStrTrm.split("");
    
            var abtContents = "";
            for (var i = 0, len = abtStr.length; i < len; i++) {
                abtContents += '<span class="specialChar" data-char="' + i + '">' + abtStr[i] + '</span>';
            }
    
            $(this).html(abtContents);
<<<<<<< HEAD
<<<<<<< HEAD

            console.log(abtStr);
=======
>>>>>>> fixing
=======
>>>>>>> features svgs updated
        });
    }

});

