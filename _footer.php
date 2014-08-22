<footer class="footer">
	<span class="footer__heart-icon"></span>

	<?php echo ipSlot('text', array('id' => 'footer-copyright', 'tag' => 'p',
		'default' => __('Copyright 2014 - Hjartesorg.se', 'Hjartesorg', false), 'class' => 'footer__copyright')); ?>

	<div class="footer__contact-info">
		<div class="footer__block">
			<?php echo ipBlock('footer-block1')->asStatic()->render(); ?>
		</div>
		<div class="footer__block">
			<h4 class="footer__block-header">Här finns vi</h4>

			<p>Testvägen 12b</p>

			<p>132 35</p>

			<p>Saltsjöbaden</p>
			<a href="#" class="footer__show-map">Visa karta</a>
		</div>
		<div class="footer__block">
			<h4 class="footer__block-header">Öppettider</h4>

			<p>Vardagar 8 - 17</p>
		</div>
	</div>
</footer>
</div>
</div> <!-- Site wrapper end -->

<!-- Load Javascripts -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="assets/dist/vendor/headroom.js"></script>
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