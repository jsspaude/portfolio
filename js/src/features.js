$(document).ready(function() {
    var scrolling   = false,
        offsetArray = [],
        offsetDynArray = [];
    const fContent = $('.features-content').offset().top;

    $('.features-content').each(function(i){
        const offsetInit      = $(this).offset().top;
        
        $(offsetInit).each(function(i){
            offsetArray.push(this);
        })
    });
 
    $( window ).scroll( function() {
        scrolling = true;
    });
    
    setInterval( function() {
        
        if ( scrolling ) {
            
            scrolling               = false;
            var scrollCurrent       = $(document).scrollTop();
            var offsetContainer     = $('.features-container').offset().top;
            var scrollPercent       = ((scrollCurrent - offsetContainer)+100)/1000;
            
            $('.features-content').each(function(i){
                const offsetDyn       = $(this).offset().top;
                const offsetDynArray  = jQuery.makeArray(offsetDyn);

                console.log(offsetDynArray);

                // if(
                //     offsetDyn.every(function(value, _, array){
                //         return array[0] === value;
                //     })
                // ){console.log('test')}

                if(offsetDyn > offsetArray[i]) {
                    $(this).addClass('active');
                }
            });

            // if(
            //     offsetDynArray.every(
            //         function(value, _, array){
            //         return array[0] === value;
            //         })
            //     ){
            //         fContent.addClass('active');
            // };

            if(scrollPercent < .2 ) {

                $('#slopeEffect').attr('slope', scrollPercent  );   
                $('#slopeEffectTablet').attr('slope', (scrollPercent -.05)  );   
                $('#slopeEffectMobile').attr('slope', (scrollPercent -.1) ); 
            }

        }
    }, 20 );
});