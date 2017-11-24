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
	var closg_bio_dlg = function(){
		$("#biodialog").animate({top: -800}, 400, 'swing', function(){
			$("#biodialog_bg").hide();
			$("body").css( { overflow: 'auto'} );
		});
	};
	$("#biodialog_bg, .biodlg-close-btn").click(closg_bio_dlg);
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
			$("#username").val('');
			$("#useremail").val('');
			$("#message").val('');
		},
		error: function(err) {
			console.log(err);
		}
	});

	return false;
}
function show_bio(mType, mNo)
{
	if (event.target.tagName == "A" || event.target.tagName == "I")
		return;
	var wh = $(window).innerHeight();
	$("#biodialog img").attr("src", "/images/member/" + mType + "/" + bios[mType][mNo].photo);
	$("#biodialog .name").html(bios[mType][mNo].name);
	$("#biodialog .role").html(bios[mType][mNo].title.replace(/<br>/, ' '));
	$("#biodialog .detail").html(bios[mType][mNo].detail);
	var socials = "";
	for(var elem_key in bios[mType][mNo].socials)
	{
		socials += "<a href='" + bios[mType][mNo].socials[elem_key] + "' target='_blank'><i class='fa fa-" + elem_key + "'></i></a>";
	}
	$("#biodialog .socials").html(socials);
	$("#biodialog_bg").show();
	$("body").css( { overflow: 'hidden'} );
	$("#biodialog").animate({top: (wh - 600) / 2}, 400, 'swing', function(){
	});
}
