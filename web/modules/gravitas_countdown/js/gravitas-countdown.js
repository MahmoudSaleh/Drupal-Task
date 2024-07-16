(function($) {
	"use strict";
	$(document).ready(function() {
		$('.gravitas-countdown').each(function(i, obj) {
			var $this = $(obj);
			var date = $this.attr('data-date');

			var launchDay = new Date(date);
			var second = 1000;
			var minute = second * 60;
			var hour = minute * 60;
			var day = hour * 24;

			var countDown = launchDay.getTime();

			var counter = setInterval(function () {
				var now = new Date().getTime();
				var daysInnerText, hoursInnerText, minutesInnerText, secondsInnerText;
				var distance = countDown - now;
				if(distance < 0) {
					distance = 0;
					daysInnerText = 0;
					hoursInnerText = 0;
					minutesInnerText = 0;
					secondsInnerText = 0;
				} else {
					daysInnerText = Math.floor(distance / (day));
					hoursInnerText = Math.floor((distance % (day)) / (hour));
					minutesInnerText = Math.floor((distance % (hour)) / (minute));
					secondsInnerText = Math.floor((distance % (minute)) / second);
				}

				$this.find(".days").html(daysInnerText);
				$this.find(".hours").html(hoursInnerText);
				$this.find(".minutes").html(minutesInnerText);
				$this.find(".seconds").html(secondsInnerText);
			}, 0);
		});
	});
})(jQuery);


