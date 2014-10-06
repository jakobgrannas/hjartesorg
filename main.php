<?php echo ipView('_top.php')->render(); ?>

<div id="wrapper" class="wrapper menu-push">
	<?php echo ipView('_header.php'); ?>

	<main class="main clearfix">
		<article class="main__section--centered clearfix">
			<section class="main__content">
				<?php echo ipBlock('main')->render(); ?>
			</section>
		</article>

		<div class="main__section--centered">
		</div>
	</main>
<?php echo ipView('_footer.php')->render(); ?>
