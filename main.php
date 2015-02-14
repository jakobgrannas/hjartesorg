<?php echo ipView('_top.php')->render(); ?>

<div id="wrapper" class="wrapper menu-push">
	<?php echo ipView('_header.php'); ?>

	<main class="main clearfix">
		<nav class="main__section" role="navigation">
			<?php echo ipSlot('breadcrumb'); ?>
		</nav>

		<article class="main__section--centered subpage-main clearfix">
			<section class="main__article">
				<?php echo ipBlock('main')->render(); ?>
			</section>
		</article>
	</main>
<?php echo ipView('_footer.php')->render(); ?>
