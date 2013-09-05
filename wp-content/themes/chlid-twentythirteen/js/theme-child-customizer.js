/**
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 * Things like site title and description changes.
 */

( function( $ ) {
	// Site title and description.
	var blink_speed = 1000; // every 1000 == 1 second, adjust to suit
	var t = setInterval(function () {
		//var ele = document.getElementById('myBlinkingDiv');
		var ele = $('.promt');
		//ele.style.visibility = (ele.style.visibility == 'hidden' ? '' : 'hidden');
		if(ele.is(":visible"))
		{
			ele.hide();
		}
		else
		{
			ele.show();
		}
	}, blink_speed);
	console.log("hello world");
} )( jQuery );

