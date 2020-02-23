$(document).ready(function() {

    const   drawing        = $('.drawing[data-svg]');
    const   drawingEnd     = $(drawing).length;
    var     lengthArray    = [];
    var     i              = 0;
    var     $this          = $(drawing).get(i);

    $(drawing).each(function(i){
        var $length = $(drawing).get(i).getTotalLength(); 
        
        lengthArray.push($length);

        // $(this).addClass('test');
    });

    
});