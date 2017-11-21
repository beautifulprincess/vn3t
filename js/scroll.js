var showed_roadmap = false;
$(document).ready(function(){
	var cur_scroll_top = 0;

	var show_roadmap = function(){
		showed_roadmap = true;

		for(var i = 0; i < roadmap_datas.length; i++)
			setTimeout(function(i){
				$("#roadmap_graph .roadmap-col-" + i + " .roadmap-date").css({opacity: 1});
				$("#roadmap_graph .roadmap-col-" + i + " .roadmap-content").css({left: 0, opacity: 1});
			}, 200 * i, i);
	};

	var scroll_processer = function(){
		var header_height = 90;
		cur_scroll_top = $(window).scrollTop();
		if (cur_scroll_top == 0)
		{
			$("header").addClass('onTop');
			$("#top-logo-ani").addClass('onTop');
		}
		else
		{
			$("header").removeClass('onTop');
			$("#top-logo-ani").removeClass('onTop');
		}
		var sections = $("section");
		var cur_section = sections[0];
		for(var i = 0; i < sections.length; i++)
		{
			if (cur_scroll_top > $(sections[i]).offset().top - header_height - 300)
			{
				if ($(sections[i]).attr('id') == undefined)
					continue;
				cur_section = $(sections[i]);
			}
			else
				break;
		}
		var cur_id = $(cur_section).attr("id");
		$(".nav-item.active").removeClass("active");
		$(".nav-item").each(function(i){
			if ($($(this).children()[0]).attr("href") == "#" + cur_id)
				$(this).addClass("active");
		});
		var wh = $(window).innerHeight();
		if (showed_roadmap == false && cur_scroll_top > $("#roadmap").offset().top - wh)
			setTimeout(show_roadmap, 100);
	};
	$(window).scroll(scroll_processer);
	scroll_processer();

	$(document).on('click', 'a[href^="#"]', function (event) {
		event.preventDefault();
		let header_height = 60;
		if ($(event.target).attr("href") == "#")
			$(event.target).attr("href", "#home");
		if ($(event.target).attr("href") == "#home")
			header_height = 0;
		$('html, body').animate({
			scrollTop: $($.attr(this, 'href')).offset().top - header_height
		}, 500);
	});
});
