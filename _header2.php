<header class="site-header clearfix" id="site-header">
	<a href="#" class="logo"><span class="logo__text">Hjärtesorg</span></a>

	<nav class="banner__menu">
		<?php
		$desktopConfig = array(
			'customClassNames' => array('desktop__menu')
		);
		?>
		<?php echo ipView('_menu.php', $desktopConfig)->render(); ?>

		<div class="banner__menu-item button-open-menu">
			<a href="#main-nav" id="menu-btn" class="banner__menu-button-main banner__menu-button"><?php _e('Meny', 'Hjartesorg'); ?></a>
		</div>
		<div class="banner__menu-item button-close-menu">
			<a href="#" class="banner__menu-button-main banner__menu-button"><?php _e('Meny', 'Hjartesorg'); ?></a>
		</div>
	</nav>
</header>