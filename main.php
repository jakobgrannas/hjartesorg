<?php echo ipView('_top.php')->render(); ?>

<div id="wrapper" class="wrapper menu-push">
	<?php echo ipView('_header.php'); ?>

	<main class="main clearfix">
		<article class="main__section--centered clearfix">
			<section class="main__content">
				<?php echo ipBlock('main')->render(); ?>
			</section>
		</article>

		<aside class="main__section side-info bullet-grid">
			<div class="main__section--centered clearfix">
				<?php echo ipSlot('text', array('id' => 'bullets__header', 'tag' => 'h2',
					'default' => __('Rubrik', 'Hjartesorg', false), 'class' => 'main__h2')); ?>

				<?php for($i=0; $i < 4; $i++) : ?>
				<div class="bullet">
					<div class="bullet__image"></div>
					<div class="bullet__content">
					<?php echo ipSlot('text', array('id' => 'bullet__header' . $i, 'tag' => 'h4',
						'default' => __('Underrubrik', 'Hjartesorg', false), 'class' => 'bullet__header')); ?>
					<?php echo ipSlot('text', array('id' => 'bullet__text' . $i, 'tag' => 'p',
						'default' => __('Text här...', 'Hjartesorg', false), 'class' => 'bullet__text')); ?>
					</div>
				</div>
				<?php endfor; ?>
			</div>
		</aside>

		<div class="main__section call-to-action-section schedule-appointment">
			<?php echo ipBlock('make-appointment')->render(); ?>
			<?php echo ipSlot('text', array('id' => 'make-appointment__button', 'tag' => 'button',
					'default' => __('Boka tid', 'Hjartesorg', false), 'class' => 'button big positive')); ?>
		</div>

		<div class="main__section--centered">
			<p>kalle!</p>
		</div>
	</main>
<?php echo ipView('_footer.php')->render(); ?>
