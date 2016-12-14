jQuery(document).ready(function()
{
	$window 		= jQuery(window); 
	$aniElements	= jQuery('.animation-triggered');

	triggerAnimations ( $window.scrollTop(), $window.height() );

	$window.scroll(function () 
	{    
		triggerAnimations ( $window.scrollTop(), $window.height() );
	});
});

function triggerAnimations ( scrollTop, winHeight ) 
{
	var winBottom = scrollTop + winHeight;

	jQuery.each($aniElements, function(index,value) 
	{
		var $elem = jQuery(this);
		var animation = $elem.attr('data-animation');
		var elemTop = $elem.offset().top;
		var elemBottom = (elemTop + $elem.outerHeight());

		//check to see if this current container is within viewport
		if ((elemBottom >= scrollTop) && (elemTop <= winBottom)) 
		{
			$elem.addClass(animation).css('opacity','1');
		} 
		else 
		{
			$elem.removeClass(animation).css('opacity','0');;
		}
	});
}
