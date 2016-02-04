function expand() {
	$(".nav-dropdown ul li").css("display","block");
	$(".nav-dropdown.dropdown").attr("onclick","hide()");
}

function hide() {
	$(".nav-dropdown ul li").css("display","none");
	$(".nav-dropdown.dropdown").attr("onclick","expand()");
}
