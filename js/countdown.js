$(document).ready(function(){
	var ico_date_y = 2017;
	var ico_date_m = 12;
	var ico_date_d = 1;

	var counting_date = function() {
		var now_date = new Date();
		var now = Date.UTC(now_date.getYear() + 1900, now_date.getUTCMonth() + 1, now_date.getUTCDate(), now_date.getUTCHours(), now_date.getUTCMinutes(), now_date.getUTCSeconds());
		var ico = Date.UTC(ico_date_y, ico_date_m, ico_date_d);
		var delta_seconds = Math.floor((ico - now) / 1000);
		var delta_days = Math.floor(delta_seconds / 86400);
		delta_seconds -= delta_days * 86400;
		var delta_hours = Math.floor(delta_seconds / 3600);
		delta_seconds -= delta_hours * 3600;
		var delta_minutes = Math.floor(delta_seconds / 60);
		delta_seconds -= delta_minutes * 60;

		$(".countdown-days").text(delta_days);
		$(".countdown-hours").text(delta_hours);
		$(".countdown-minutes").text(delta_minutes);
		$(".countdown-seconds").text(delta_seconds);
	};
	setInterval(counting_date, 1000);
});
