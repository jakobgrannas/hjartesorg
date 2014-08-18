<?php echo ipView('_header.php')->render(); ?>

<div id="wrapper" class="wrapper menu-push">

	<header id="banner" class="banner">
		<div class="clearfix">
			<a href="#" class="logo">Hjärtesorg</a>

			<nav class="banner__menu">
				<div class="banner__menu-item button-open-menu">
					<a href="#main-nav" id="menu-btn" class="banner__menu-button-main banner__menu-button">Meny</a>
				</div>
				<div class="banner__menu-item button-close-menu">
					<a href="#" class="banner__menu-button-main banner__menu-button">Meny</a>
				</div>
			</nav>
		</div>
		<div class="banner__slogan">
			<h1 class="banner__slogan-text">Sorgbearbetning för barn och vuxna</h1>

			<div class="banner__divider"><span class="divider__symbol"></span></div>
			<a href="#" class="banner__button-important">Berätta mer!</a>
		</div>
	</header>

	<main class="main main--banner-overlap clearfix">
		<div class="main__section--centered">
			<?php echo ipBlock('main')->render(); ?>
		</div>

		<div class="main__section services">
			<div class="section--centered">
				<div class="service__block">
					<img src="assets/images/child.png" class="service__image" width="102" height="102" alt="">

					<h3 class="service__block__h3">Sorgbearbetning för barn</h3>

					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt
						ut laoreet dolore magna aliquam erat </p>
					<a href="#" class="service__button-read-more">Läs mer</a>
				</div>

				<div class="service__block">
					<img src="assets/images/rose.png" class="service__image" width="102" height="102" alt="">

					<h3 class="service__block__h3">Sorgbearbetning för vuxna</h3>

					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt
						ut laoreet dolore magna aliquam erat </p>
					<a href="#" class="service__button-read-more">Läs mer</a>
				</div>

				<div class="service__block">
					<img src="assets/images/lecture.png" class="service__image" width="102" height="102" alt="">

					<h3 class="service__block__h3">Hjälp till föräldrar</h3>

					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt
						ut laoreet dolore magna aliquam erat </p>
					<a href="#" class="service__button-read-more">Läs mer</a>
				</div>

				<div class="service__block">
					<img src="assets/images/blackboard.png" class="service__image" width="102" height="102" alt="">

					<h3 class="service__block__h3">Hjälp till skolpersonal</h3>

					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt
						ut laoreet dolore magna aliquam erat </p>
					<a href="#" class="service__button-read-more">Läs mer</a>
				</div>
			</div>
		</div>

		<div class="main__section--centered make-appointment">
			<h2 class="main__h2">Boka tid</h2>

			<div class="make-appointment__block-contact-info">
				<a href="#" class="make-appointment__phone-number">070-123 45 67</a>
				<a href="#" class="make-appointment__email">kontakt@hjartesorg.se</a>
				<h4 class="make-appointment__block-header-opening-hours">Öppettider</h4>

				<p class="make-appointment__block-content">Vardagar 8 - 17</p>
			</div>
			<div class="make-appointment__block-call-me">
				<form>
					<h4 class="make-appointment__block-header-call-me">Vill du hellre bli uppringd?</h4>
					<input type="text" placeholder="ditt nummer här..." name="callee-number" class="make-appointment__field">
					<button type="submit" class="make-appointment__button">Ring mig!</button>
				</form>
			</div>
		</div>

		<div class="main__section testimonials">
			<div class="testimonial">
				<img src="assets/images/girl.png" width="75" height="75" class="testimonial__image" alt="">
				<q class="testimonial__quote">Hjärtesorg hjälpte vår son att komma över vår skilsmässa. Vi är så himla tacksamma!</q>
				<span class="testimonial__quote-author">Marie Svensson</span>
			</div>
			<ul class="testimonials__bullets">
				<li class="testimonials__bullet"></li>
				<li class="testimonials__bullet--active"></li>
				<li class="testimonials__bullet"></li>
			</ul>
		</div>
	</main>
	<footer class="footer">
		<span class="footer__heart-icon"></span>

		<p class="footer__copyright">Copyright 2014 - Hjartesorg.se</p>

		<div class="footer__contact-info">
			<div class="footer__block">
				<h4 class="footer__block-header">Kontakta oss</h4>
				<a href="#" class="footer__phone-number">070-123 45 67</a>
				<a href="#" class="footer__email">kontakt@hjartesorg.se</a>
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
	<?php echo ipJs(); ?>
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
</body>
</html>
