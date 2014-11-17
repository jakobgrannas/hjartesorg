<?php echo ipView('_top.php')->render(); ?>

<div id="wrapper" class="wrapper menu-push">
	<?php echo ipView('_header.php'); ?>

	<main class="main clearfix">
		<article class="main__section--centered contact-main clearfix">
			<section class="main__article">
				<?php echo ipBlock('main')->render(); ?>
			</section>
		</article>

		<aside class="main__section side-info send-email-section">
			<div class="section--centered clearfix">
				<?php echo ipSlot('text', array('id' => 'send-email-header', 'tag' => 'h2',
					'default' => __('Rubrik', 'Hjartesorg', false), 'class' => 'main__h2')); ?>

				<?php echo ipSlot('sendContactEmailForm'); ?>
			</div>
		</aside>

		<div class="main__section map-section">
			<div class="map__overlay js-click-overlay">
				<p class="button-important--filled overlay__text"><?php _e('Klicka för att visa karta','Hjartesorg', false); ?></p>
			</div>
			<?php echo ipBlock('map')->render(); ?>
		</div>

		<div class="main__section--centered like-on-facebook clearfix">
			<?php echo ipBlock('social-media')->render(); ?>
		</div>
	</main>
<?php echo ipView('_footer.php')->render(); ?>
