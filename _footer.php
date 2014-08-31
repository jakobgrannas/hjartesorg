<footer class="footer">
	<span class="footer__heart-icon"></span>

	<?php echo ipSlot('text', array('id' => 'footer-copyright', 'tag' => 'p',
		'default' => __('Copyright 2014 - Hjartesorg.se', 'Hjartesorg', false), 'class' => 'footer__copyright')); ?>

	<div class="footer__contact-info">
		<div class="footer__block">
			<?php echo ipSlot('text', array('id' => 'footer__header1', 'tag' => 'h4',
				'default' => __('Rubrik', 'Hjartesorg', false), 'class' => 'footer__header--small')); ?>
			<?php echo ipBlock('footer-block1')->asStatic()->render(); ?>
		</div>

		<div class="footer__block">
			<?php echo ipSlot('text', array('id' => 'footer__header2', 'tag' => 'h4',
				'default' => __('Rubrik', 'Hjartesorg', false), 'class' => 'footer__header--small')); ?>
			<?php echo ipBlock('footer-block2')->asStatic()->render(); ?>
		</div>

		<div class="footer__block">
			<?php echo ipSlot('text', array('id' => 'footer__header3', 'tag' => 'h4',
				'default' => __('Rubrik', 'Hjartesorg', false), 'class' => 'footer__header--small')); ?>
			<?php echo ipBlock('footer-block3')->asStatic()->render(); ?>
		</div>
	</div>
</footer>
</div>
</div> <!-- Site wrapper end -->

<!-- Load Javascripts -->
<?php echo ipAddJs('assets/dist/vendor/headroom.js'); ?>
<?php echo ipAddJs('assets/dist/js/scripts.js'); ?>
<script>
	var _gaq = [
		['_setAccount', 'UA-XXXXX-X'],
		['_trackPageview']
	];
	(function (d, t) {
		var g = d.createElement(t), s = d.getElementsByTagName(t)[0];
		g.src = '//www.google-analytics.com/ga.js';
		s.parentNode.insertBefore(g, s)
	}(document, 'script'));
</script>
<?php echo ipJs(); ?>
</body>
</html>