/**
 * All your javascript goes here
 */

(function() {
	document.onload = init();

	function init () {
		registerEventListeners();
		initHeadroom();
	}

	function registerEventListeners() {
		$(document).on('click', '.type-heart .rate', rate);
		$( '.type-heart .rate-label').on({
			mouseenter: rateHover,
			mouseleave: rateHover
		});

		$(document).on('ipSubmitResponse', displaySuccessMessage);
	}

	function initHeadroom() {
		var headerEl = document.querySelector("#site-header"),
			options = {
				offset: 80 // Unpinning offset in pixels
			},
			headroom  = new Headroom(headerEl, options);

		headroom.init();
	}

	function rate() {
		var checkedEl = $(this);
		checkedEl.prevAll().addClass('js-checked');
		checkedEl.nextAll().removeClass('js-checked');
	}

	function rateHover () {
		var el = $('#' + $(this).attr('for')),
			checkedEls = $('.type-heart .rate:checked');

		if(checkedEls.length > 0 && el.is(':last-child')) {
			el.nextAll().addClass('js-hover');
			return false;
		}

		el.toggleClass('js-hover');
		el.prevAll().toggleClass('js-hover');
		el.nextAll().removeClass('js-hover');
	}

	function displaySuccessMessage (e, response) {
		var destinationEl = $('.testimonial__btn--submit').parent();

		$(response.html).hide().appendTo(destinationEl).slideDown(350);

		new hAlert({
			el: $('.alert')
		});
	}
})();