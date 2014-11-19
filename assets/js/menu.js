/**
 * Menu
 * Handles menu visibility and animation
 */
var Menu = function () {
	var me = this;
	
	me.wrapperEl = $('#wrapper');
	me.menuBtn = $('#menu-btn');
	me.menuEl = $('#main-nav');
	me.menuClosedCls = 'main-menu--closed';
	me.breakpointLarge = 52 * 16;
	
	function registerListeners () {
		/*
		 *  Menu listeners
		 */
		$('#menu-btn').on('click', me.toggleMenuVisibility);
		$('#wrapper').on('click', me.closeMenu);
		$(window).on('resize', me.hideMobileMenu);
	}
	
	me.toggleMenuVisibility = function (e) {
		if (e) {
			e.preventDefault();
			e.stopPropagation();
		}

		if (Modernizr.csstransitions) {
			$('.menu-push').toggleClass('main-menu--animate-left');
			me.menuEl.toggleClass(me.menuClosedCls);
		}
		else {
			// No CSS3 animations fallback
			toggleAnimateLeft(me.wrapperEl, function() {
				me.wrapperEl.toggleClass('menu-pushed-left');
			});
		}
	};

	me.closeMenu = function (e) {
		if ($('.menu-push') && !me.menuEl.hasClass(me.menuClosedCls)) {
			me.toggleMenuVisibility();
		}
	};

	me.hideMobileMenu = function () {
		if ($(window).width() >= me.breakpointLarge) {
			me.closeMenu();
		}
	};

	function toggleAnimateLeft(el, callback) {
		var position = el.hasClass('menu-pushed-left') ? 0 : '-15em',
				animateLeft = function(position) {
					el.stop().animate({left: position}, {
						duration: 350,
						complete: function() {
							callback();
						}
					});
				};

		animateLeft(position);
	}
	
	registerListeners();
	
	return me;
};