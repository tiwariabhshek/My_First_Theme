<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>MyFirstTheme</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link href="default.css" rel="stylesheet" type="text/css" />
	<?php wp_head(); ?>
	<h1 class="theme-header">My First Theme Trial Version 1.0</h1>
</head>

<body>

	<div id="header">
	</div>
	<div id="menu">
		<?php

		$args1 = array(
			'theme_location' => 'header-menu',
			'container' => false,
			'menu_id' => 'menu-simple',
			'menu_class' => 'sf-menu2',
		);
		wp_nav_menu($args1);
		?>

	</div>