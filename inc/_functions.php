<?php
		/*
		 * TITLE: _functions.php
		 * DESCRIPTION: Pretty self-explanatory, actually..
		 * Collect all your PHP Functions here, so they aren't littered
		 * throughout the website in different files and such.
		 */


// echo '<pre style="color: #fff;">';
// print_r($_SERVER['HTTP_HOST']);
// echo '</pre>';

function isUrlSelected($thisPage) {
	$uri = $_SERVER['REQUEST_URI'];
	$host = $_SERVER['HTTP_HOST'];


	// -- explode the url on the period (to get rid of the extension)
	$thisUrl = explode('.', $uri);


	// -- explode the url on the / (to make it page not /page)
	$thisUrl = explode('/', $thisUrl[0]);


	// -- if the class given, is the same as the url, return a 'selected' class
	if($thisPage == $thisUrl[2]) { return ' selected'; }
}

?>
