$(document).ready(function(){
	var org_cols = 0;
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
		var cols = 0;
		if (wc < 600)
			cols = 1;
		else if (wc < 900)
			cols = 2;
		else
			cols = 3;
		if (org_cols != 0 && cols == org_cols)
			return;
		var rc = "";
		if (wc > 600)
		{
			$("#roadmap_graph").addClass("default-roadmap");
			$("#roadmap_graph").removeClass("mobile-roadmap");
			var ew = wc - 150;
			var fl = false;
			var opened_row = false;
			var j = 0;
			for (var i = 0; i < roadmap_datas.length; i++){
				if (i % cols === 0)
				{
					fl = !fl;
					rc += "<div class='roadmap-row row-float-" + (fl ? "left" : "right") + "'><div class='roadmap-row-before roadmap-row-before-" + j + "'></div><div class='roadmap-row-after roadmap-row-after-" + j + "'><div class='roadmap-row-after-circle'></div></div>";
					opened_row = true;
					j++;
				}
				rc += "<div class='roadmap-col roadmap-col-" + i.toString() + " float-" + (fl ? "left" : "right") + " width-" + (Math.floor(100 / cols)) + "'>";
				rc += "<div class='roadmap-col-before'></div>";
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
		org_cols = cols;
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
		var init_ani_txt1 = function(src){
			var dst = "";
			for(var i = 0; i < src.length; i++)
			{
				if (src[i] == " ")
					//dst += " ";
					break;
				else
					dst += String.fromCharCode(parseInt(Math.random() * (127 - 33) + 33));
			}
			return dst;
		};
		var org_ani_txt1 = $("#animate-txt1").text();
		var new_ani_txt1 = init_ani_txt1(org_ani_txt1);
		var miss_cnt = 0;
		var rewrite_ani_txt1 = function(){
			$("#animate-txt1").text(new_ani_txt1);
			if (new_ani_txt1 != org_ani_txt1)
				setTimeout(rewrite_ani_txt1, 50);
			if (org_ani_txt1.substring(0, new_ani_txt1.length) == new_ani_txt1)
				new_ani_txt1 += " " + init_ani_txt1(org_ani_txt1.substring(new_ani_txt1.length + 1, org_ani_txt1.length));
			var tmp_ani_txt1 = "";
			miss_cnt++;

			for(var i = 0; i < new_ani_txt1.length; i++)
			{
				if (new_ani_txt1[i] == org_ani_txt1[i])
					tmp_ani_txt1 += new_ani_txt1[i];
				else
				{
					if (miss_cnt == 5)
					{
						tmp_ani_txt1 += org_ani_txt1[i];
						miss_cnt = 0;
					}
					else
					tmp_ani_txt1 += String.fromCharCode(parseInt(Math.random() * (127 - 33) + 33));
				}
			}
			new_ani_txt1 = tmp_ani_txt1;
		};
		rewrite_ani_txt1();
		var org_ani_txt2 = $("#animate-txt2").text();
		var new_ani_txt2 = "";
		var txt2_len = 0;
		$("#animate-txt2").text('');
		var rewrite_ani_txt2 = function(){
			txt2_len++;
			new_ani_txt2 = org_ani_txt2.substring(0, txt2_len);
			$("#animate-txt2").text(new_ani_txt2 + "_");
			if (new_ani_txt2 == org_ani_txt2)
			{
				$("#animate-txt2").text(new_ani_txt2);
				return;
			}
			setTimeout(rewrite_ani_txt2, 60);
		};
		rewrite_ani_txt2();
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
function show_bio(mType, mNo)
{
	if (event.target.tagName == "A" || event.target.tagName == "I")
		return;
	var wh = $(window).innerHeight();
	$("#biodialog .photo").css("background-image", "url(/images/member/" + mType + "/" + bios[mType][mNo].photo + ")");
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
