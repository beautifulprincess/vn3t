$(document).ready(function(){
	var ico_date_y = 2017;
	var ico_date_m = 11;
	var ico_date_d = 1;
	var ico = Date.UTC(ico_date_y, ico_date_m, ico_date_d);
	var delta_seconds = 0;

	var initial_date = function() {
		var now_date = new Date();
		var now = Date.UTC(now_date.getYear() + 1900, now_date.getUTCMonth(), now_date.getUTCDate(), now_date.getUTCHours(), now_date.getUTCMinutes(), now_date.getUTCSeconds());
		delta_seconds = Math.floor((ico - now) / 1000);

		if (delta_seconds <= 0)
			return;

		var delta_days = Math.floor(delta_seconds / 86400);
		delta_seconds -= delta_days * 86400;
		var delta_hours = Math.floor(delta_seconds / 3600);
		delta_seconds -= delta_hours * 3600;
		var delta_minutes = Math.floor(delta_seconds / 60);
		delta_seconds -= delta_minutes * 60;

		delta_days++;
		delta_hours++;
		delta_minutes++;
		delta_seconds++;
		
		if (delta_seconds >= 60)
		{
			delta_seconds = delta_seconds - 60;
			delta_minutes++;
		}
		if (delta_minutes >= 60)
		{
			delta_minutes = delta_minutes - 60;
			delta_hours++;
		}
		if (delta_hours >= 24)
		{
			delta_hours = delta_hours -24;
			delta_days++;
		}

		var str_delta_days = delta_days > 9 ? delta_days.toString() : (delta_days < 0 ? "00" : "0" + delta_days.toString());
		var str_delta_days_next = delta_days > 10 ? (delta_days - 1).toString() : (delta_days <= 0 ? "00" : "0" + (delta_days - 1).toString());
		var str_delta_hours = delta_hours > 9 ? delta_hours.toString() : (delta_days <= 0 && delta_hours == 0 ? "00" : "0" + delta_hours.toString());
		var str_delta_hours_next = delta_hours > 10 ? (delta_hours - 1).toString() : (delta_days <= 0 && delta_hours <= 0 ? "00" : (delta_hours == 0 ? "23" : "0" + (delta_hours - 1).toString()));
		var str_delta_minutes = delta_minutes > 9 ? delta_minutes.toString() : (delta_days <= 0 && delta_hours <= 0 && delta_minutes <= 0 ? "00" : "0" + delta_minutes.toString());
		var str_delta_minutes_next = delta_minutes > 10 ? (delta_minutes - 1).toString() : (delta_days <= 0 && delta_hours <= 0 && delta_minutes <= 0 ? "00" : (delta_minutes == 0 ? "59" : "0" + (delta_minutes - 1).toString()));
		var str_delta_seconds = delta_seconds > 9 ? delta_seconds.toString() : (delta_days <= 0 && delta_hours <= 0 && delta_minutes <= 0 && delta_seconds <= 0 ? "00" : "0" + delta_seconds.toString());
		var str_delta_seconds_next = delta_seconds > 10 ? (delta_seconds - 1).toString() : (delta_days <= 0 && delta_hours <= 0 && delta_minutes <= 0 && delta_seconds <= 0 ? "00" : (delta_seconds == 0 ? "59" : "0" + (delta_seconds - 1).toString()));

		$("#countdown-counter .days .curr").text(str_delta_days);
		$("#countdown-counter .hours .curr").text(str_delta_hours);
		$("#countdown-counter .minutes .curr").text(str_delta_minutes);
		$("#countdown-counter .seconds .curr").text(str_delta_seconds);
		$("#countdown-counter .days .next").text(str_delta_days_next);
		$("#countdown-counter .hours .next").text(str_delta_hours_next);
		$("#countdown-counter .minutes .next").text(str_delta_minutes_next);
		$("#countdown-counter .seconds .next").text(str_delta_seconds_next);
	};
	initial_date();

	var counting_date = function(){
		if (delta_seconds <= 0)
		{
			clearInterval(counting);
			return;
		}

		var cur_second = $("#countdown-counter .seconds .next.top").text();
		var cur_minute = $("#countdown-counter .minutes .next.top").text();
		var cur_hour = $("#countdown-counter .hours .next.top").text();
		var cur_day = $("#countdown-counter .days .next.top").text();

		if (cur_second == "00" && cur_minute == "00" && cur_hour == "00" && cur_day == "00")
		{
			clearInterval(counting);
			return;
		}

		$("#countdown-counter .seconds .curr").text(cur_second);
		var second = parseInt(cur_second);
		second = second > 0 ? second - 1 : 59;
		var str_second = second < 10 ? "0" + second.toString() : second.toString();
		$("#countdown-counter .seconds .next").text(str_second);
		$("#countdown-counter .seconds").removeClass("flip");
		if (second == 59)
		{
			$("#countdown-counter .minutes .curr").text(cur_minute);
			var minute = parseInt(cur_minute);
			minute = minute > 0 ? minute - 1 : 59;
			var str_minute = minute < 10 ? "0" + minute.toString() : minute.toString();
			$("#countdown-counter .minutes .next").text(str_minute);
			$("#countdown-counter .minutes").removeClass("flip");
			if (minute == 59)
			{
				$("#countdown-counter .hours .curr").text(cur_hour);
				var hour = parseInt(cur_hour);
				hour = hour > 0 ? hour - 1 : 23;
				var str_hour = hour < 10 ? "0" + hour.toString() : hour.toString();
				$("#countdown-counter .hours .next").text(str_hour);
				$("#countdown-counter .hours").removeClass("flip");
				if (hour == 23)
				{
					$("#countdown-counter .days .curr").text(cur_day);
					var day = parseInt(cur_day);
					day--;
					var str_day = day < 10 ? "0" + day.toString() : day.toString();
					$("#countdown-counter .days .next").text(str_day);
					$("#countdown-counter .days").removeClass("flip");
				}
			}
		}

		setTimeout(function(){
			$("#countdown-counter .time").addClass("flip");
		}, 100);
	};
	var counting = setInterval(counting_date, 1000);
});
