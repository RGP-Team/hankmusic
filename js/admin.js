$(document).ready(function(){
	$("#menu-toggle").click(function(e){
		e.preventDefault();
		$("#wrapper").toggleClass("toggled");
	});

	$(".dropdown-menu a").click(function(e){
		e.preventDefault();
		e.stopPropagation();
		
		location.href = $(this).attr("href");
		return false;
	});
	
	var menu = $("input#menu").val();
	var sub_menu = $("input#sub_menu").val();
	
	if (typeof(menu) !== "undefined" && menu.length > 0 )
	{
		$("a#"+menu).trigger("click");
		if ( sub_menu.length > 0 ) $("a#"+sub_menu).addClass("active");
	}
});