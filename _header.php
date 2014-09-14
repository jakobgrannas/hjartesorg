<?php echo ipDoctypeDeclaration(); ?>
<!--[if lt IE 9]>
<html class="no-js ie8" <?php echo ipHtmlAttributes(); ?>> <![endif]-->
<head>
	<?php
	ipAddCss('Ip/Internal/Core/assets/ipContent/ipContent.css'); // include default CSS for widgets
	ipAddCss("assets/dist/css/normalize.min.css");
	ipAddCss("assets/dist/css/style.min.css");
	echo ipHead();
	?>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"">

	<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.min.js"></script>
</head>
<body>
<!--[if lt IE 9]>
<p class="chromeframe alert alert-warning">You are using an <strong>outdated</strong> browser. Please <a
	href="http://browsehappy.com/">upgrade
	your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to
	improve your experience.</p>
<![endif]-->

<div class="site-wrapper">
<nav class="main-menu clearfix" id="main-nav">
	<a href="#" class="menu__logo"></a>
	<?php
	$options = array(
		'items' => 'menu1',
		'active' => 'menu-link--active',
		'attributes' => array('class' => 'mobile__menu menu-items')
	);
	echo ipSlot('menu', $options);
	?>
	<?php echo ipSlot('searchBox'); ?>
</nav>