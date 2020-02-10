$(document).ready(function() {

    var topofDiv        = $('.features-content-container').offset().top;
    var height          = $('.features-content-container').outerHeight();
    var abtStringType   = $('.special-heading');
    var specialChar     = $('.specialChar');
    var abtCharActive   = specialCharActive();
        
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
          }, i*100);
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

            console.log(abtStr);
        });
    }

});

