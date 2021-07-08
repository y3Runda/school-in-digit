<?php

/**
 * The "autoload" function is for automatic connection of classes
 */

function autoload($class_name) {

	// An array of folders that may contain the necessary classes
	$array_path = array(
		'/models/',
		'/components/',
		'/controllers/',
	);

	// Going through an array of folders
	foreach ($array_path as $path) {

		// Form the name and path to the file with the class
		$path = ROOT . $path . $class_name . '.php';

		// If such a file exists, plug it in
		if (is_file($path)) {
			include_once $path;
		}
	}
}