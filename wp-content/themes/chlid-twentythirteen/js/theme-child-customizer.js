/**
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 * Things like site title and description changes.
 */

( function( $ ) {
    // Site title and description.
    var blink_speed = 1000; // every 1000 == 1 second, adjust to suit
    var count_show = 0;
    var limit_show = 10;
    var t = setInterval(function () {
        //var ele = document.getElementById('myBlinkingDiv');
        var ele = $('.promt');
        //ele.style.visibility = (ele.style.visibility == 'hidden' ? '' : 'hidden');
        /*if(ele.is(":visible"))
        {
                ele.hide();
        }
        else
        {
                ele.show();
        }*/
        if(ele.is(".header-opacity-extreme"))
        {
            if(count_show < limit_show)
                ele.removeClass('header-opacity-extreme');
            
            count_show++
        }
        else
        {
            ele.addClass('header-opacity-extreme');
        }
    }, blink_speed);
    console.log("hello world");
        
    $(".search-field").focusin(function() {
        var width = $(window).width();
        
        if(width > 700)
        {
            $(".header").addClass('header-opacity');
        }
    });
    
    $(".search-field").focusout(function() {
        var width = $(window).width();
        
        if(width > 700)
        {
            $(".header").removeClass('header-opacity');
        }
    });
        
} )( jQuery );

