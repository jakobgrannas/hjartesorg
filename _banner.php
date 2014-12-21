<div id="banner" class="banner">
	<div class="banner__slogan">
		<?php echo ipSlot('text', array('id' => 'banner-slogan-row1', 'tag' => 'div',
			'default' => __('Sorgbearbetning', 'Hjartesorg', false), 'class' => 'banner__slogan-text slogan__row1')); ?>

		<?php echo ipSlot('text', array('id' => 'banner-slogan-row2', 'tag' => 'div',
			'default' => __('för barn & vuxna', 'Hjartesorg', false), 'class' => 'banner__slogan-text slogan__row2')); ?>

		<div class="banner__divider"><span class="divider__symbol"></span></div>

		<?php echo ipBlock('banner-button')->render(); ?>
	</div>
</div>