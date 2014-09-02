<?php echo ipView('_header.php')->render(); ?>

<div id="wrapper" class="wrapper menu-push">
	<header class="site-header clearfix" id="site-header">
		<a href="#" class="logo">Hjärtesorg</a>

		<nav class="banner__menu">
			<?php
				$options = array(
					'items' => 'menu1',
					'active' => 'menu-link--active',
					'attributes' => array('class' => 'desktop__menu menu-items')
				);
				echo ipSlot('menu', $options);
			?>
			<div class="banner__menu-item button-open-menu">
				<a href="#main-nav" id="menu-btn" class="banner__menu-button-main banner__menu-button"><?php _e('Meny', 'Hjartesorg'); ?></a>
			</div>
			<div class="banner__menu-item button-close-menu">
				<a href="#" class="banner__menu-button-main banner__menu-button"><?php _e('Meny', 'Hjartesorg'); ?></a>
			</div>
		</nav>
	</header>

	<div id="banner" class="banner">
		<div class="banner__slogan">
			<?php echo ipSlot('text', array('id' => 'banner-slogan', 'tag' => 'div',
				'default' => __('Sorgbearbetning för barn och vuxna', 'Hjartesorg', false), 'class' => 'banner__slogan-text')); ?>

			<div class="banner__divider"><span class="divider__symbol"></span></div>
			<a href="#" class="banner__button-important">Berätta mer!</a>
		</div>
	</div>

	<main class="main main--banner-overlap clearfix">
		<article class="main__section--centered">
			<?php echo ipBlock('main')->render(); ?>
		</article>

		<div class="main__section services">
			<div class="section--centered">
				<?php echo ipView('_services.php')->render(); ?>
			</div>
		</div>

		<div class="main__section--centered make-appointment">
			<?php echo ipSlot('text', array('id' => 'booking-header', 'tag' => 'h2',
				'default' => __('Boka tid', 'Hjartesorg', false), 'class' => 'main__h2')); ?>

			<div class="make-appointment__block-contact-info">
				<?php echo ipSlot('text', array('id' => 'phone-number1', 'tag' => 'a',
					'default' => '070-123 456 78', 'class' => 'make-appointment__phone-number')); ?>

				<?php echo ipSlot('text', array('id' => 'email-address1', 'tag' => 'a',
					'default' => 'kontakt@hjartesorg.se', 'class' => 'make-appointment__email')); ?>

				<?php echo ipBlock('left-block1')->render(); ?>
			</div>
			<div class="make-appointment__block-call-me">
				<?php echo ipBlock('right-block1')->render(); ?>
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
