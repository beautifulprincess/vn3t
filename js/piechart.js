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
						$(this.dataLabel).stop(!0, !0);
						this.slice(!0, !0, !0);
						var tx = 0, ty = 0;
						if (this.slicedTranslation)
						{
							tx = this.slicedTranslation.translateX;
							ty = this.slicedTranslation.translateY;
						}
						if (this.dataLabel.org_translateX == undefined)
							this.dataLabel.org_translateX = this.dataLabel.translateX;
						if (this.dataLabel.org_translateY == undefined)
							this.dataLabel.org_translateY = this.dataLabel.translateY;

						var e = { translateX: tx, translateY: ty };
						var n = { translateX: this.dataLabel.org_translateX + tx, translateY: this.dataLabel.org_translateY + ty };
						
                        this.dataLabel.animate(n);
						this.connector.animate(e);
                    },
                    mouseOut: function() {
						$(this.dataLabel).stop(!0, !0);
						this.slice(!1, !0, !0);
                        var e = { translateX: this.dataLabel.org_translateX, translateY: this.dataLabel.org_translateY };
                        var t = {
                            translateX: 0,
                            translateY: 0
                        };
						this.dataLabel.animate(e);
						this.connector.animate(t);
					}
				}
			}
        },
    },
    series: [{
        type: 'pie',
        data: [
            ["5.8%", 5.8],
            ["11.6%", 11.6],
            ["5.8%", 5.8],
            ["76.8%", 76.8],
        ]
    }],
	colors: ['#333399', '#3366ff', '#0099cc', '#000080'],
});
});
