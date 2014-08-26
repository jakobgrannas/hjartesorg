<section class="service__block">
	<?php
	$options = array(
		'id' => 'testImage',
		'width' => '102',
		'height'=>'102',
		'class' => 'service__image',
		'default' => ipThemeUrl('assets/images/child.png')
	);
	echo ipSlot('image', $options);
	?>

	<?php echo ipSlot('text', array('id' => 'service1-header', 'tag' => 'h3',
		'default' => 'The default text', 'class' => 'service__block__h3')); ?>

	<?php echo ipSlot('text', array('id' => 'service1-text', 'tag' => 'div',
		'default' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt
						ut laoreet dolore magna aliquam erat', 'class' => 'service__block__text')); ?>

	<a href="#" class="service__button-read-more">Läs mer</a>
</section>

<section class="service__block">
	<img src="assets/images/rose.png" class="service__image" width="102" height="102" alt="">

	<h3 class="service__block__h3">Sorgbearbetning för vuxna</h3>

	<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt
		ut laoreet dolore magna aliquam erat </p>
	<a href="#" class="service__button-read-more">Läs mer</a>
</section>

<section class="service__block">
	<img src="assets/images/lecture.png" class="service__image" width="102" height="102" alt="">

	<h3 class="service__block__h3">Hjälp till föräldrar</h3>

	<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt
		ut laoreet dolore magna aliquam erat </p>
	<a href="#" class="service__button-read-more">Läs mer</a>
</section>

<section class="service__block">
	<img src="assets/images/blackboard.png" class="service__image" width="102" height="102" alt="">

	<h3 class="service__block__h3">Hjälp till skolpersonal</h3>

	<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt
		ut laoreet dolore magna aliquam erat </p>
	<a href="#" class="service__button-read-more">Läs mer</a>
</section>