<?php
$presetClassNames = array('menu-items');
$classNames = array_merge($customClassNames, $presetClassNames);
$classNames = implode(' ', $classNames);

$options = array(
	'items' => 'menu1',
	'active' => 'menu-link--active',
	'attributes' => array('class' => $classNames)
);
echo ipSlot('menu', $options);
echo ipSlot('searchBox');
