<?php echo ipView('_top.php')->render(); ?>

<div id="wrapper" class="wrapper menu-push">
	<?php echo ipView('_header.php'); ?>

	<main class="main clearfix">
		<nav class="main__section" role="navigation">
			<?php echo ipSlot('breadcrumb'); ?>
		</nav>

		<article class="main__section--centered testimonials__article clearfix">
			<section class="main__article">
				<?php echo ipBlock('main')->render(); ?>
			</section>
		</article>

		<aside class="main__section side-info submit-testimonial">
			<div class="section--centered clearfix">
				<?php echo ipSlot('text', array('id' => 'post-testimonial-header', 'tag' => 'h2',
					'default' => __('Rubrik', 'Hjartesorg', false), 'class' => 'main__h2')); ?>

				<?php echo ipSlot('submitTestimonial'); ?>
			</div>
		</aside>
	</main>
<?php echo ipView('_footer.php')->render(); ?>
