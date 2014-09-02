/**
 * All your javascript goes here
 */

(function() {
	document.onload = init();

	function init () {
		var headerEl = document.querySelector("#site-header"),
			options = {
				offset: 100 // Unpinning offset in pixels
			},
			headroom  = new Headroom(headerEl, options);

		headroom.init();
	}
})();