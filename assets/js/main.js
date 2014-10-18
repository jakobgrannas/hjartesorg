/**
 * All your javascript goes here
 */

(function() {
	document.onload = init();

	function init () {
		var headerEl = document.querySelector("#site-header"),
			options = {
				offset: 120 // Unpinning offset in pixels
			},
			headroom  = new Headroom(headerEl, options);

		headroom.init();

		$(document).on('click', '.type-heart .rate', rate);
		$( '.type-heart .rate-label').on({
			mouseenter: rateHover,
			mouseleave: rateHover
		});
	}

	function rate() {
		var checkedEl = $(this);
		checkedEl.prevAll().addClass('checked');
		checkedEl.nextAll().removeClass('checked');
	}

	function rateHover () {
		var el = $('#' + $(this).attr('for')),
			checkedEls = $('.type-heart .rate:checked');

		if(checkedEls.length > 0 && el.is(':last-child')) {
			el.nextAll().addClass('hover');
			return false;
		}

		el.toggleClass('hover');
		el.prevAll().toggleClass('hover');
		el.nextAll().removeClass('hover');
	}
})();