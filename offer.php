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

		<article class="main__section offers">
			<section class="main__article offer">
				<div class="main__section--centered">
					<?php echo ipBlock('offer1')->render(); ?>
				</div>
			</section>
		</article>
	</main>
<?php echo ipView('_footer.php')->render(); ?>
