<?php for ($i=1; $i < 5; $i++) : ?>
<section class="service__block">
	<?php
	$options = array(
		'id' => 'service-image-' . $i,
		'width' => '102',
		'height'=>'102',
		'class' => 'service__image',
		'default' => ipThemeUrl('assets/images/child.png')
	);
	echo ipSlot('image', $options);
	?>

	<?php echo ipSlot('text', array('id' => 'service'. $i .'-header', 'tag' => 'h3',
		'default' => __('En bra rubrik', 'Hjartesorg'), 'class' => 'service__block__h3')); ?>

	<?php echo ipBlock( 'service-block' . $i )->asStatic()->render(); ?>

	<a href="#" class="service__button-read-more">
		<?php echo ipSlot('text', array('id' => 'service'. $i .'-button', 'tag' => 'span',
			'default' => __('Läs mer', 'Hjartesorg'), 'class' => 'service__button-text')); ?>
	</a>
</section>
<?php endfor; ?>