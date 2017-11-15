$(document).ready(function(){
	var initial_home = function(){
		var hh = $(".home-content").innerHeight();
		var wh = $(window).height();
		if (hh > wh)
		{
			$("section#home").css("height", "auto");
		}
		else
		{
			$("section#home").css("height", "100vh");
		}
	};
	initial_home();
	$(window).resize(initial_home);

	$(".faq-question").click(function(){
		var qid = $(this).attr("for");
		if ($(this).hasClass("opened"))
		{
			$(this).removeClass("opened");
			$(".answer" + qid).removeClass("opened");
		}
		else
		{
			$(".opened").removeClass("opened");
			$(this).addClass("opened");
			$(".answer" + qid).addClass("opened");
		}
	});
});
$(window).bind("load", function () {
	$('#work-in-progress').fadeOut(100);
});
