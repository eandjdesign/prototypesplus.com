<?php

$debug = true;
$traceCount = 0;

if($debug) {
	error_reporting(E_ALL);
	ini_set('display_errors', True);
}

function trace($message) {
	global $debug;
	global $traceCount;
	if($debug) {
		echo '<hr/>';
		echo '<pre>';
		echo 	$traceCount++;
		echo 	$message;
		echo '</pre>';
		echo '<hr />';
	}
}

function tarr($arr) {
	global $debug;
	global $traceCount;
	
	if($debug) {
		echo '<hr />'.$traceCount++.'<code>';
		print_r($arr);
		echo '</code><hr />';
	}
}

?>