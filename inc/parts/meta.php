<!doctype html>
<!--[if lte IE 8]>     <html class="no-js ie8" lang="en">      <![endif]-->
<!--[if IE 9]>         <html class="no-js ie9 w3c" lang="en">  <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js w3c" lang="en">  <!--<![endif]-->
	<head>
		<title><?php if($pageTitle != '') { echo $pageTitle . ' &raquo; '; } ?>SITENAME GOES HERE</title>
		<?php if($pageDescription != '') { ?><meta name="description" content="<?= $pageDescription; ?>" /><?php } ?>
		<?php if($pageKeywords != '') { ?><meta name="keywords" content="<?= $pageKeywords; ?>" /><?php } ?>

		<?php /* Start META Information */ ?>

<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width">
		
		<?php /* Start Favicons */ ?>
<link rel="shortcut icon" href="<?= __IMGPATH__ ?>favicon.ico"> <!-- Standard Favicon -->
		<link rel="apple-touch-icon" sizes="57x57"   href="<?= __IMGPATH__ ?>touch-icon-iphone-114.png"> <!-- Standard iPhone  --> 
		<link rel="apple-touch-icon" sizes="114x114" href="<?= __IMGPATH__ ?>touch-icon-iphone-114.png"> <!-- Retina iPhone    --> 
		<link rel="apple-touch-icon" sizes="72x72"   href="<?= __IMGPATH__ ?>touch-icon-ipad-144.png">   <!-- Standard iPad    --> 
		<link rel="apple-touch-icon" sizes="144x144" href="<?= __IMGPATH__ ?>touch-icon-ipad-144.png">   <!-- Retina iPad      --> 

		<?php /* Start CSS */ ?>
<link rel="stylesheet" type="text/css" href="<?= __CSSPATH__ ?>base.css" />

		<?php /* Start Header JS - only what's absolutely necessary; Put the rest in the footer */ ?>
<!--[if lte IE 8]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
