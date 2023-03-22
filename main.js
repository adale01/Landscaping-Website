
$(document).ready(function(){
	document.getElementById("body").onscroll = function myFunction() {  
		var scrolltotop = document.scrollingElement.scrollTop;
		var target = document.getElementById("services_container");
		var xvalue = "center";
		var factor = 0.5;
		var yvalue = scrolltotop * factor;
		target.style.backgroundPosition = xvalue + " " + yvalue + "px";
	}
});

function switch_menu()
{
	var menu = $('#links');
	var menu_burger = $('#menu-burger');
	if(menu.hasClass('show'))
	{
		menu.removeClass('show');
		menu.addClass('hide');
		menu_burger.removeClass('active');
	}
	else
	{
		menu.removeClass('hide');
		menu.addClass('show');
		menu_burger.addClass('active');
	}
}