$(document).ready(function(){
Highcharts.chart('pie-container', {
    chart: {
        type: 'pie',
        options3d: {
            enabled: true,
            alpha: 75,
            beta: 0
        },
		backgroundColor: null,
    },
	navigation: {
		buttonOptions:{
			enabled: false
		}
	},
	credits:{
		enabled: false,
	},
    title: {
        text: ''
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            depth: 85,
            dataLabels: {
                enabled: true,
                format: '{point.name}',
				style: {
					fontSize: "24px",
				}
            },
			slicedOffset: 50,
			point: {
				events:{
					click: function() {},
                    mouseOver: function(t) {
						this.slice(!0, !0, !0);
                    },
                    mouseOut: function() {
						this.slice(!1, !0, !0);
					}
				}
			}
        },
    },
    series: [{
        type: 'pie',
        data: [
            ["7%", 7],
            ["14%", 14],
            ["7%", 7],
            ["72%", 72],
        ]
    }],
	colors: ['#333399', '#3366ff', '#6699cc', '#000080'],
});
});
