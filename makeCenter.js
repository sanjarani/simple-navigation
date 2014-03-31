$(document).ready(function(e) {
	var winWidth  = $(window).width();
	var winHeight = $(window).height();
	
	var tmpWidth  = winWidth  - 242;
	var tmpHeight = winHeight - 284;
	
	var left = tmpWidth  / 2;
	var top  = tmpHeight / 2;
	
	$('#wrapper').css({'margin-top':top, 'margin-left':left});
	
});
