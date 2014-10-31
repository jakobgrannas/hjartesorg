<?php echo ipView('_top.php')->render(); ?>

<div id="wrapper" class="wrapper menu-push">
	<?php echo ipView('_header.php'); ?>

	<main class="main">
		<article class="main__section--centered clearfix">
			<section class="main__article">
				<?php echo ipBlock('main')->render(); ?>
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

		<div class="main__section call-to-action-section schedule-appointment">
			<div class="main__section--centered">
				<?php echo ipBlock('schedule-appointment')->asStatic()->render(); ?>
				<a href="#" class="button-positive--filled button--action">
					<?php echo ipSlot('text', array('id' => 'schedule-appointment__button', 'tag' => 'span',
						'default' => __('Boka tid', 'Hjartesorg', false), 'class' => 'button__text')); ?>
				</a>
			</div>
		</div>

		<div class="main__section--centered related-articles clearfix">
			<?php echo ipSlot('text', array('id' => 'related-articles__title', 'tag' => 'h2',
				'default' => __('Rubrik', 'Hjartesorg', false), 'class' => 'main__h2')); ?>

			<?php for($i=0; $i < 3; $i++) : ?>
			<div class="related-article__button">
				<?php
				$options = array(
					'id' => 'related-article__image-' . $i,
					'width' => '40',
					'height'=>'40',
					'class' => 'related-article__image',
					'default' => ipThemeUrl('assets/images/child.png')
				);
				echo ipSlot('image', $options);
				?>
				<div class="related-article__content">
					<a href="#" class="related-article__link">
						<?php echo ipSlot('text', array('id' => 'related-article__link' . $i, 'tag' => 'span',
						'default' => __('Länktext', 'Hjartesorg', false), 'class' => '')); ?>
					</a>
				</div>
			</div>
			<?php endfor; ?>
		</div>
	</main>
<?php echo ipView('_footer.php')->render(); ?>
