<?php
/**
 * CONFIG FILE
 * defines the php share path so if you go multi levels it will always load the include files
 * 
 */
	require('_debug.php');

	// echo '<pre>';
	// print_r($_SERVER);
	// echo '</pre>';

	define("__ROOT__", 'http://' . $_SERVER['HTTP_HOST'] . '/');
	define("__DOCROOT__", $_SERVER['DOCUMENT_ROOT']);
	define("__ASSPATH__", __ROOT__ . 'assets/');
	define("__CSSPATH__", __ASSPATH__ . 'css/');
	define("__IMGPATH__", __ASSPATH__ . 'img/');
	define("__JSPATH__",  __ASSPATH__ . 'js/');
	define("__DLPATH__",  __ASSPATH__ . 'downloads/');

	// Define functions that you will want to use
	include(__DOCROOT__ . '/inc/_functions.php');

	// Define variables to be included into the config
	// include(__DOCROOT__ . '/inc/_vars.php');

?>