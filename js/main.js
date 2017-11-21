$(document).ready(function(){
	var initial_home = function(){
		var hh = $(".home-content").innerHeight();
		var wh = $(window).innerHeight();
		if (hh > wh)
		{
			$("section#home").css("height", "auto");
		}
		else
		{
			$("section#home").css("height", "100vh");
		}

		var wc = $("#roadmap_graph").innerWidth();
		var rc = "";
		if (wc > 600)
		{
			$("#roadmap_graph").addClass("default-roadmap");
			$("#roadmap_graph").removeClass("mobile-roadmap");
			var ew = wc - 150;
			var fl = false;
			var cols = 3;
			if (wc < 900) cols = 2;
			var opened_row = false;
			for (var i = 0; i < roadmap_datas.length; i++){
				if (i % cols === 0)
				{
					fl = !fl;
					rc += "<div class='roadmap-row row-float-" + (fl ? "left" : "right") + "'>";
					opened_row = true;
				}
				rc += "<div class='roadmap-col roadmap-col-" + i.toString() + " float-" + (fl ? "left" : "right") + " width-" + (Math.floor(100 / cols)) + "'>";
				rc += "<div class='roadmap-date'" + (showed_roadmap ? " style='opacity: 1;'" : '') + ">" + roadmap_datas[i].date + "</div>";
				rc += "<div class='roadmap-content'" + (showed_roadmap ? " style='opacity: 1; left: 0;'" : '') + ">" + roadmap_datas[i].content + "</div>";
				rc += "</div>";
				if (i % cols === cols - 1)
				{
					rc += "</div>";
					opened_row = false;
				}
			}
			if (opened_row)
				rc += "</div>";
		} else {
			$("#roadmap_graph").addClass("mobile-roadmap");
			$("#roadmap_graph").removeClass("default-roadmap");
			for (var i = 0; i < roadmap_datas.length; i++){
				rc += "<div class='roadmap-col roadmap-col-" + i.toString() + "'>";
				rc += "<div class='roadmap-date'" + (showed_roadmap ? " style='opacity: 1;'" : '') + ">" + roadmap_datas[i].date + "</div>";
				rc += "<div class='roadmap-content'" + (showed_roadmap ? " style='opacity: 1; left:0;'" : '') + ">" + roadmap_datas[i].content + "</div>";
				rc += "</div>";
			}
		}
		$("#roadmap_graph").html(rc);
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
			console.log(resp);
		},
		error: function(err) {
			console.log(err);
		}
	});

	return false;
}
