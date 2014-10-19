var hAlert = (function ($) {
	var me = function (config) {
		var me = this,
			autoclose = config.autoclose || true,
			closeTimeout = config.closeTimeout || 3000;
		this.el = config.el;

		if(autoclose !== false) {
			setTimeout(function () {
				me.close();
			}, closeTimeout);
		}
	};

	me.prototype.close = function (time) {
		var me = this,
			duration = time || 800;

			me.el.fadeOut(duration, function() { $(this).remove(); });
	};

	return me;
})(jQuery);