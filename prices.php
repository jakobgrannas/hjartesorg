<?php echo ipView('_top.php')->render(); ?>

<div id="wrapper" class="wrapper menu-push">
	<?php echo ipView('_header.php'); ?>

	<main class="main">
		<nav class="main__section" role="navigation">
			<?php echo ipSlot('breadcrumb'); ?>
		</nav>

		<article class="main__section--centered clearfix">
			<section class="main__article">
				<?php echo ipBlock('main')->render(); ?>
			</section>
		</article>

		<div class="main__section packages prices">
			<div class="section--centered">
				<?php echo ipSlot('text', array('id' => 'price-package-header', 'tag' => 'h2',
					'default' => __('Rubrik', 'Hjartesorg'), 'class' => 'main__h2')); ?>

				<article class="container--stretched">
					<?php for ($i=1; $i < 3;$i++) : ?>
						<section class="package">
							<div class="package__body">
								<?php echo ipSlot('text', array('id' => 'price-package-title_' . $i, 'tag' => 'h3',
									'default' => __('Rubrik', 'Hjartesorg'), 'class' => 'package__title')); ?>
								<?php echo ipSlot('text', array('id' => 'price-package-text_' . $i, 'tag' => 'div',
									'default' => __('Text här...', 'Hjartesorg'), 'class' => 'package__text')); ?>
							</div>
							<div class="package__footer">
								<?php echo ipBlock('price-package_' . $i . '__footer')->render(); ?>
							</div>
						</section>
					<?php endfor; ?>
				</article>

				<?php //echo ipView('_services.php')->render(); ?>
			</div>
		</div>


		<article class="main__section offers">
			<section class="main__article offer">
				<div class="main__section--centered">
					<?php echo ipBlock('offer1')->render(); ?>
				</div>
			</section>
		</article>
	</main>
	<?php echo ipView('_footer.php')->render(); ?>
