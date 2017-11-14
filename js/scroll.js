$(document).ready(function(){
	var cur_scroll_top = 0;

	var scroll_processer = function(){
		var header_height = 90;
		cur_scroll_top = $(window).scrollTop();
		if (cur_scroll_top == 0)
		{
			$("header").addClass('onTop');
		}
		else
		{
			$("header").removeClass('onTop');
		}
		var sections = $("section");
		var cur_section = sections[0];
		for(var i = 0; i < sections.length; i++)
		{
			if (cur_scroll_top > $(sections[i]).offset().top - header_height)
				cur_section = $(sections[i]);
			else
				break;
		}
		var cur_id = $(cur_section).attr("id");
		$(".nav-item.active").removeClass("active");
		$(".nav-item").each(function(i){
			if ($($(this).children()[0]).attr("href") == "#" + cur_id)
			{
				$(this).addClass("active");
			}
		});
	};
	$(window).scroll(scroll_processer);
	scroll_processer();

	$(document).on('click', 'a[href^="#"]', function (event) {
		event.preventDefault();
		let header_height = 60;
		if ($(event.target).attr("href") == "#home")
			header_height = 0;
		$('html, body').animate({
			scrollTop: $($.attr(this, 'href')).offset().top - header_height
		}, 500);
	});
});
