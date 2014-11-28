<?php echo ipView('_top.php')->render(); ?>

<div id="wrapper" class="wrapper menu-push">
	<?php echo ipView('_header.php'); ?>

	<main class="main">
		<nav class="main__section--centered" role="navigation">
			<?php echo ipSlot('breadcrumb'); ?>
		</nav>

		<article class="main__section--centered clearfix">
			<section class="main__article">
				<?php echo ipBlock('main')->render(); ?>
			</section>
		</article>

		<aside class="main__section side-info bullet-grid">
			<div class="section--centered clearfix">
				<?php echo ipSlot('text', array('id' => 'bullets__header', 'tag' => 'h2',
					'default' => __('Rubrik', 'Hjartesorg', false), 'class' => 'main__h2')); ?>

				<?php echo ipBlock('servicePage-services')->render(); ?>
			</div>
		</aside>

		<section class="main__section call-to-action-section schedule-appointment">
			<div class="main__section--centered">
				<?php echo ipBlock('schedule-appointment')->asStatic()->render(); ?>
			</div>
		</section>

		<section class="main__section--centered related-articles clearfix">
			<?php echo ipSlot('text', array('id' => 'related-articles__title', 'tag' => 'h2',
				'default' => __('Rubrik', 'Hjartesorg', false), 'class' => 'main__h2')); ?>

			<?php for($i=0; $i < 3; $i++) : ?>
			<!--<div class="related-article__button">
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
			</div>-->
			<?php endfor; ?>
			<div class="related__article-boxes">
				<?php echo ipBlock('other-services')->asStatic()->render(); ?>
			</div>
		</section>
	</main>
<?php echo ipView('_footer.php')->render(); ?>
