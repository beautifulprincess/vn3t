$(document).ready(function(){
	var org_cols = 0;
	var initial_home = function(){
		var hh = $(".home-content").innerHeight();
		var wh = $(window).innerHeight();
		if (hh > wh)
		{
		//	$("section#home").css("height", "auto");
		}
		else
		{
		//	$("section#home").css("height", "100vh");
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

	$(".cp_signature").click(function(){
		var copyText = document.getElementById("signature");
		copyText.select();
		document.execCommand("Copy");
	});
	$(".cp_contract").click(function(){
		var copyText = document.getElementById("contract");
		copyText.select();
		document.execCommand("Copy");
	});
});
$(window).bind("load", function () {
	$('#work-in-progress').fadeOut(100, function(){
	});
});

function submit_contact_frm(){
	var username = $("#username").val();
	var useremail = $("#useremail").val();
	var message = $("#message").val();

	$.ajax({
		url: "sendmail.php",
		data: {username: username, useremail: useremail, message: message},
		type: "post",
		dataType: "json",
		success: function(resp) {
			$("#username").val('');
			$("#useremail").val('');
			$("#message").val('');
			$(".contact-us").removeClass("sent");
		},
		error: function(err) {
			console.log(err);
		}
	});
	$(".contact-us").addClass("sent");

	return false;
}

$(document).ready(function(){
	var cur_scroll_top = 0;

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
