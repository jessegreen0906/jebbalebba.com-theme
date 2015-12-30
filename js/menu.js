	function showMenu() {
		$("#menu-container").css("transition", "opacity 2s");
		$("#menu-container").css("display", "block");
		$("#menu-container").css("opacity", "1");
		
		$("#menu-container nav li a > .menu-text").each(
			function() {
				checkWidth($(this));
			}
		);
	}
	
	function hideMenu() {
		$("#menu-container").css("display", "none");
	}
	
	function checkWidth(menuItem) {
		$("body").append("<span id='temp-span' style='display:none;'></span>");
		var menuItemText = menuItem.html();
		$("#temp-span").html(menuItemText);
		$("#temp-span").css("font-family", menuItem.css("font-family"));
		$("#temp-span").css("font-size", menuItem.css("font-size"));
		
		var maxWidth = menuItem.parent().width() -  menuItem.parent().height();
		var textWidth = $("#temp-span").width();
		var ratio = maxWidth/textWidth;
		
		if(ratio > 1)
		{
			
		}
		else if(ratio >= 0.5){
			var defaultSize = menuItem.css("font-size");
			menuItem.css("font-size", parseInt(defaultSize)*ratio);
		}
		else {
			var defaultSize = menuItem.css("font-size");
			menuItem.css("font-size", parseInt(defaultSize)*0.5);
			menuItem.css("overflow", "hidden");
			menuItem.css("text-overflow", "ellipsis");
		}
		
		$("#temp-span").remove();
	}

