$(function(){
	var scrtime;
	$(".scroll-dt").hover(function(){
		clearInterval(scrtime);
	
	},function(){
	
	scrtime = setInterval(function(){
		var $ul = $(".scroll-dt ul");
		var liHeight = $ul.find("li:last").height();
		$ul.animate({marginTop : liHeight + 35 + "px"},1000,function(){
		
		$ul.find("li:last").prependTo($ul)
		$ul.find("li:first").hide();
		$ul.css({marginTop:0});
		$ul.find("li:first").fadeIn(1000);
		});
	},4000);
	
	}).trigger("mouseleave");
});