<?php echo ipView('_header.php')->render(); ?>

<div id="wrapper" class="wrapper menu-push">
	<?php echo ipView('_banner.php'); ?>

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
			<?php echo ipBlock('testimonials')->render(); ?>
		</aside>
	</main>
<?php echo ipView('_footer.php')->render(); ?>
