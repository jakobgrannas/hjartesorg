<?php echo ipDoctypeDeclaration(); ?>
<!--[if lt IE 9]>
<html class="no-js ie8" <?php echo ipHtmlAttributes(); ?>> <![endif]-->
<html <?php echo ipHtmlAttributes(); ?>>
<head>
	<?php
	ipAddCss('Ip/Internal/Core/assets/ipContent/ipContent.css'); // include default CSS for widgets
	ipAddCss("assets/dist/css/normalize.min.css");
	ipAddCss("assets/dist/css/style.min.css");
	echo ipHead();
	?>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.min.js"></script>
</head>
<body>
<!--[if lt IE 9]>
<p class="chromeframe alert-warning">You are using an <strong>outdated</strong> browser. Please <a
	href="http://browsehappy.com/">upgrade
	your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to
	improve your experience.</p>
<![endif]-->

<div class="site-wrapper">
<nav class="main-menu clearfix main-menu--closed" id="main-nav" role="navigation">
	<a href="#" class="menu__logo"></a>
	<?php
		$mobileConfig = array (
			'customClassNames' => array('mobile__menu menu')
		);
	?>
	<?php echo ipView('_menu.php', $mobileConfig)->render(); ?>
</nav>