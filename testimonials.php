<?php echo ipView('_top.php')->render(); ?>

<div id="wrapper" class="wrapper menu-push">
	<?php echo ipView('_header.php'); ?>

	<main class="main clearfix">
		<article class="main__section--centered testimonials__article clearfix">
			<section class="main__article">
				<?php echo ipBlock('main')->render(); ?>

				<?php for($i=0; $i < 3; $i++) : ?>
				<div class="bullet">
					<div class="bullet__image"></div>
					<div class="bullet__content">
						<?php echo ipSlot('text', array('id' => 'testimonial__header' . $i, 'tag' => 'p',
							'default' => __('Kundens omdöme här...', 'Hjartesorg', false), 'class' => 'bullet__text--primary')); ?>
						<?php echo ipSlot('text', array('id' => 'testimonial__author' . $i, 'tag' => 'p',
							'default' => __('Kundens namn', 'Hjartesorg', false), 'class' => 'bullet__text--secondary')); ?>
					</div>
				</div>
				<?php endfor; ?>
			</section>
		</article>

		<aside class="main__section side-info bullet-grid">
			<div class="section--centered clearfix">
				<?php echo ipSlot('text', array('id' => 'bullets__header', 'tag' => 'h2',
					'default' => __('Rubrik', 'Hjartesorg', false), 'class' => 'main__h2')); ?>

				<?php for($i=0; $i < 4; $i++) : ?>
				<div class="bullet">
					<div class="bullet__image"></div>
					<div class="bullet__content">
					<?php echo ipSlot('text', array('id' => 'bullet__header' . $i, 'tag' => 'h4',
						'default' => __('Underrubrik', 'Hjartesorg', false), 'class' => 'bullet__text--primary')); ?>
					<?php echo ipSlot('text', array('id' => 'bullet__text' . $i, 'tag' => 'p',
						'default' => __('Text här...', 'Hjartesorg', false), 'class' => 'bullet__text--secondary')); ?>
					</div>
				</div>
				<?php endfor; ?>
			</div>
		</aside>
	</main>
<?php echo ipView('_footer.php')->render(); ?>
