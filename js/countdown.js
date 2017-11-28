$(document).ready(function(){
	var ico_date_y = 2018;
	var ico_date_m = 0;
	var ico_date_d = 1;
	var ico = Date.UTC(ico_date_y, ico_date_m, ico_date_d);

	var counting_date = function() {
		var delta_seconds = 0;
		var now_date = new Date();
		var now = Date.UTC(now_date.getYear() + 1900, now_date.getUTCMonth(), now_date.getUTCDate(), now_date.getUTCHours(), now_date.getUTCMinutes(), now_date.getUTCSeconds());
		delta_seconds = Math.floor((ico - now) / 1000);

		if (delta_seconds < 0)
		{
			clearInterval(counting);
			return;
		}

		var delta_days = Math.floor(delta_seconds / 86400);
		delta_seconds -= delta_days * 86400;
		var delta_hours = Math.floor(delta_seconds / 3600);
		delta_seconds -= delta_hours * 3600;
		var delta_minutes = Math.floor(delta_seconds / 60);
		delta_seconds -= delta_minutes * 60;
		
		var can_1 = document.getElementById('countdown1');
		var ctx_1 = can_1.getContext('2d');
		ctx_1.clearRect(0, 0, 220, 220);
		var end_angle_1 = delta_days / 100 * 2 * Math.PI - Math.PI / 2;
		ctx_1.strokeStyle="#FFFFFF";
		ctx_1.beginPath()
		ctx_1.lineWidth=20;
		ctx_1.arc(110, 110, 100, -Math.PI/2, end_angle_1, false);
		ctx_1.stroke();
		var can_2 = document.getElementById('countdown2');
		var ctx_2 = can_2.getContext('2d');
		ctx_2.clearRect(0, 0, 220, 220);
		var end_angle_2 = delta_hours / 24 * 2 * Math.PI - Math.PI / 2;
		ctx_2.strokeStyle="#FFFFFF";
		ctx_2.beginPath()
		ctx_2.lineWidth=20;
		ctx_2.arc(110, 110, 100, -Math.PI/2, end_angle_2, false);
		ctx_2.stroke();
		var can_3 = document.getElementById('countdown3');
		var ctx_3 = can_3.getContext('2d');
		ctx_3.clearRect(0, 0, 220, 220);
		var end_angle_3 = delta_minutes / 60 * 2 * Math.PI - Math.PI / 2;
		ctx_3.strokeStyle="#FFFFFF";
		ctx_3.beginPath()
		ctx_3.lineWidth=20;
		ctx_3.arc(110, 110, 100, -Math.PI/2, end_angle_3, false);
		ctx_3.stroke();
		var can_4 = document.getElementById('countdown4');
		var ctx_4 = can_4.getContext('2d');
		ctx_4.clearRect(0, 0, 220, 220);
		var end_angle_4 = delta_seconds / 60 * 2 * Math.PI - Math.PI / 2;
		ctx_4.strokeStyle="#FFFFFF";
		ctx_4.beginPath()
		ctx_4.lineWidth=20;
		ctx_4.arc(110, 110, 100, -Math.PI/2, end_angle_4, false);
		ctx_4.stroke();
		
		$(".days-val").text(delta_days.toString());
		$(".hours-val").text(delta_hours.toString());
		$(".minutes-val").text(delta_minutes.toString());
		$(".seconds-val").text(delta_seconds.toString());
	};
	var counting = setInterval(counting_date, 1000);
});
