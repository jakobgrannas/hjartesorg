<?php echo ipDoctypeDeclaration(); ?>
<!--[if lt IE 9]>
<html class="no-js ie8" <?php echo ipHtmlAttributes(); ?>>
<![endif]-->
<html class="no-js" <?php echo ipHtmlAttributes(); ?>>
<head>
	<?php
	$cssPrefix = ipGetThemeOption('minifyCSS') && ipGetThemeOption('minifyCSS') ? '.min'  : '';

	ipAddCss('Ip/Internal/Core/assets/ipContent/ipContent.css'); // include default CSS for widgets

	if(\Ip\Internal\Admin\Backend::loggedIn()) {
		ipAddCss("assets/dist/css/admin" . $cssPrefix . ".css"); // include custom CSS
	}

	ipAddCss("assets/dist/css/normalize" . $cssPrefix . ".css");
	ipAddCss("assets/dist/css/style" . $cssPrefix . ".css");
	echo ipHead();
	?>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta property="og:title" content="<?php echo ipContent()->getTitle(); ?>" />
	<meta property="og:description" content="<?php echo ipContent()->getDescription(); ?>" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />
	<meta property="og:image" content="<?php echo ipThemeUrl('setup/thumbnail.png'); ?>" />

	<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.min.js"></script>
</head>
<body>
<!--[if lt IE 9]>
<p class="chromeframe alert-warning">You are using an <strong>outdated</strong> browser. Please <a
	href="http://browsehappy.com/">upgrade
	your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to
	improve your experience.</p>
<![endif]-->
<noscript>
	<p class="chromeframe alert-warning"><?php _e('Du har inaktiverat JavaScript i din webbläsare. Vänligen slå på JavaScript för att få en bättre användarupplevelse', 'Hjartesorg'); ?></p>
</noscript>

<div class="site-wrapper">
<nav class="main-menu clearfix main-menu--closed" id="main-nav" role="navigation">
	<a href="<?php echo ipHomeUrl(); ?>" class="menu__logo"></a>
	<?php
		$mobileConfig = array (
			'customClassNames' => array('mobile__menu menu')
		);
	?>
	<?php echo ipView('_menu.php', $mobileConfig)->render(); ?>
</nav>