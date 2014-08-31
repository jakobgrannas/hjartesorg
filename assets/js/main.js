/**
 * All your javascript goes here
 */

(function() {
	document.onload = init();

	function init () {
		var myElement = document.querySelector("#site-header"),
			headroom  = new Headroom(myElement),
			options = {
				offset: 80 // Unpinning offset in pixels
			};

		headroom.init(options);
	}
})();