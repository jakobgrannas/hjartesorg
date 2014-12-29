<?php for ($i=1; $i < 4; $i++) : ?>
<section class="service__block">
	<div class="service__header">
			<?php
			$options = array(
				'id' => 'service-image-' . $i,
				'type' => 'center',
				'forced' => false,
				'width' => '82',
				'height'=>'82',
				'class' => 'service__image',
				'default' => ipThemeUrl('assets/images/child.png')
			);
			echo ipSlot('image', $options);
			?>
	</div>

	<h3 class="service__title">
		<?php echo ipSlot('text', array('id' => 'service'. $i .'-title-row-1', 'tag' => 'span',
		'default' => __('Rubrik rad 1', 'Hjartesorg'), 'class' => 'service__title-row')); ?>
		<?php echo ipSlot('text', array('id' => 'service'. $i .'-title-row-2', 'tag' => 'span',
			'default' => __('Rubrik rad 2', 'Hjartesorg'), 'class' => 'service__title-row')); ?>
	</h3>

	<?php echo ipBlock( 'service-block' . $i )->render(); ?>
</section>
<?php endfor; ?>