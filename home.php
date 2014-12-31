<?php echo ipView('_top.php')->render(); ?>

<div id="wrapper" class="wrapper homepage menu-push">
	<?php echo ipView('_header.php'); ?>
	<?php echo ipView('_banner.php'); ?>

	<main class="main main--banner-overlap clearfix">
		<article class="main__section--centered">
			<?php
			$options = array(
				'id' => 'founders-picture',
				'width' => '130',
				'height'=>'130',
				'class' => 'main__image--centered',
				'default' => ipThemeUrl('assets/images/us.png')
			);
			echo ipSlot('image', $options);
			?>
			<div id="main-section">
				<?php echo ipBlock('main')->render(); ?>
			</div>
		</article>

		<div class="main__section services">
			<div class="section--centered">
				<?php echo ipSlot('text', array('id' => 'service-header', 'tag' => 'h2',
					'default' => __('Rubrik', 'Hjartesorg'), 'class' => 'main__h2')); ?>

				<?php echo ipView('_services.php')->render(); ?>
			</div>
		</div>

		<div class="main__section--centered make-appointment">
			<?php echo ipSlot('text', array('id' => 'booking-header', 'tag' => 'h2',
				'default' => __('Boka tid', 'Hjartesorg', false), 'class' => 'main__h2')); ?>

			<div class="make-appointment__block-contact-info">
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
