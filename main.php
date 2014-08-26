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
			<?php echo ipSlot('text', array('id' => 'banner-slogan', 'tag' => 'div',
				'default' => __('Sorgbearbetning för barn och vuxna', 'Hjartesorg', false), 'class' => 'banner__slogan-text')); ?>

			<div class="banner__divider"><span class="divider__symbol"></span></div>
			<a href="#" class="banner__button-important">Berätta mer!</a>
		</div>
	</header>

	<main class="main main--banner-overlap clearfix">
		<article class="main__section--centered">
			<?php echo ipBlock('main')->render(); ?>
		</article>

		<article class="main__section--centered">
			<?php echo ipBlock('section1')->render(); ?>
		</article>

		<div class="main__section services">
			<div class="section--centered">
				<?php echo ipView('_services.php')->render(); ?>
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

		<aside class="main__section testimonials">
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
		</aside>
	</main>
<?php echo ipView('_footer.php')->render(); ?>
