/**
 * All your javascript goes here
 */

(function() {
	document.onload = init();
	var ISSEARCHOPEN = false;

	function init () {
		registerEventListeners();
		initHeadroom();
	}

	function registerEventListeners () {
		$(document).on('click', '.type-heart .rate', rate);
		$( '.type-heart .rate-label').on({
			mouseenter: rateHover,
			mouseleave: rateHover
		});

		$(document).on('ipSubmitResponse', displaySuccessMessage);

		// Drop down menu
		$(document).on('mouseenter', '.desktop__menu > .menu-item', setDropDownHeight);
		$(document).on('mouseleave', '.desktop__menu > .menu-item', function () {
			$('.desktop__menu .level2').height(0);
		});

		$(document).on('mouseenter', '.menu .type-submit .btn', function () {
			toggleSearchField(true);
		});
		$(document).on('blur', '.menu .name-search input', function () {
			toggleSearchField(false);
		});

		$(document).on('click', '.map__overlay', initMap);
	}

	function initHeadroom () {
		var headerEl = document.querySelector("#site-header"),
			options = {
				offset: 80 // Unpinning offset in pixels
			},
			headroom  = new Headroom(headerEl, options);

		headroom.init();
	}

	function initMap () {
		$(this).removeClass('js-click-overlay');
	}

	function toggleSearchField (showSearchField) {
		var searchField = $('.menu .name-search'),
			jsClass = 'js-show-search-field';

		if(!showSearchField) {
			searchField.removeClass(jsClass);
		}
		else if(showSearchField && !searchField.hasClass(jsClass)) {
			searchField.addClass(jsClass);
		}
	}

	function setDropDownHeight () {
		var menu = $('.desktop__menu .level2'),
			menuItems = $('.desktop__menu .level2 .menu-item'),
			height = 20; // Add some padding as well

		menuItems.each(function () {
			height += parseInt($(this).outerHeight(true));
		});

		menu.height(height);
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