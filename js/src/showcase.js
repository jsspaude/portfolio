$(document).ready(function() {
    const   topofDiv            = $('.showcase-content-container').offset().top,
            contentContainer    = $('.showcase-content-container'),
            wrapperEnd          = $('.showcase-wrapper').length;
    var     x                   = 1,
            length              = 0,
            scrolling           = false;

    $($('.showcase-wrapper[data-row=' + (wrapperEnd) +']')).addClass('hidden');
    $('.showcase-container').css('min-height', (wrapperEnd*550) + 'px');
    
    $("div[data-row]").each(function() {
        if ($(this).attr('data-row') % 2 == 1 && ($(this).attr('data-row') != 0)){
            $(this).addClass('odd');
        }
    });

    $('.showcase-wrapper').each(function(i){
        const   $this               = $(this).data('row', i),
                containerOffset     = $(contentContainer[i]).offset().top;

        $this.offset({top: (containerOffset)});

        length++;
    });

    

    $( window ).scroll( function() {
        scrolling = true;
    });
    
    setInterval( function() {
        if ( scrolling ) {

            scrolling           = false;
            var dashedLine      = $('.showcase-wrapper[data-row=' + (x) +']')
            var height          = dashedLine.offset().top;
            
            if ($(this).scrollTop() > (topofDiv - 100)){ 
                $('.showcase-container').addClass('active');
            }

            else{
                $('.showcase-container').removeClass('active');
            }
            
            if ($(this).scrollTop() > (height - 100) && (x != length)) {

                $(dashedLine).addClass('active');

                if (x < length) {
                    x++
                }
            }

            if(x == length) {
                
            }
        }
    }, 20 );
});