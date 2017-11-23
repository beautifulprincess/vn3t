'use strict';
window.addEventListener('load', function () {
	var carousels = document.querySelectorAll('.carousel');
	for (var i = 0; i < carousels.length; i++) {
		carousel(carousels[i]);
	}
});
function carousel(root) {
	var figure = root.querySelector('figure'),
		images = figure.children,
		n = images.length,
		gap = root.dataset.gap || 0,
		bfc = 'bfc' in root.dataset,
		theta = 2 * Math.PI / n,
		currImage = 0;
	setupCarousel(n, parseFloat(getComputedStyle(images[0]).width));
	window.addEventListener('resize', function () {
		setupCarousel(n, parseFloat(getComputedStyle(images[0]).width));
	});
	setupNavigation();
	function setupCarousel(n, s) {
		var apothem = s / (2 * Math.tan(Math.PI / n));
		figure.style.transformOrigin = '50% 50% ' + -apothem + 'px';
		for (var i = 0; i < n; i++) {
			images[i].style.padding = gap + 'px';
		}
		for (i = 1; i < n; i++) {
			images[i].style.transformOrigin = '50% 50% ' + -apothem + 'px';
			images[i].style.transform = 'rotateY(' + i * theta + 'rad)';
		}
		if (bfc) for (i = 0; i < n; i++) {
			images[i].style.backfaceVisibility = 'hidden';
		}
		rotateCarousel(currImage);
	}
	function setupNavigation() {
		$(".carousel button").click(onClick);
		var tm, tmt;
		function onClick() {
			if ($(this).hasClass('prev')) {
				currImage--;
			} else {
				currImage++;
			}
			rotateCarousel(currImage);
			$('.prob-slider-bg').css({opacity: 0});
			clearTimeout(tm);
			clearTimeout(tmt);
			tmt = setTimeout(chgTxt, 500);
			tm = setTimeout(onClick, 5000);
		}
		function chgTxt()
		{
			$('.prob-slider-bg p').html(problematic_datas[currImage % 3].txt);
			$('.prob-slider-bg').css({opacity: 1});
		}
		tmt = setTimeout(chgTxt, 500);
		tm = setTimeout(onClick, 5000);
	}
	function rotateCarousel(imageIndex) {
		figure.style.transform = 'rotateY(' + imageIndex * -theta + 'rad)';
	}
}
