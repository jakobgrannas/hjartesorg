<header class="site-header clearfix" id="site-header">
	<a href="#" class="logo site-header__logo"><span class="logo__text">Hjärtesorg</span></a>

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

<div id="banner" class="banner">
	<div class="banner__slogan">
		<?php echo ipSlot('text', array('id' => 'banner-slogan-row1', 'tag' => 'div',
			'default' => __('Sorgbearbetning', 'Hjartesorg', false), 'class' => 'banner__slogan-text slogan__row1')); ?>

		<?php echo ipSlot('text', array('id' => 'banner-slogan-row2', 'tag' => 'div',
			'default' => __('för barn & vuxna', 'Hjartesorg', false), 'class' => 'banner__slogan-text slogan__row2')); ?>

		<div class="banner__divider"><span class="divider__symbol"></span></div>

		<?php echo ipSlot('text', array('id' => 'tell-me-more', 'tag' => 'a',
			'default' => __('Berätta mer!','Hjartesorg'), 'class' => 'banner__button-important button-positive-filled')); ?>
	</div>
</div>