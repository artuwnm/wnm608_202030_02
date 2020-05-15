<?php

function makeAuth() {
	return [
		"", 		// Database host location
		"", 	// Database host name
		"", 		// Database host password
		"", 	// Database host database name
	];
}
function makePDOAuth() {
	return [
		"mysql:host=localhost;dbname=", // host and database name
		"", // database USER name
		"", //database USER password
		[PDO::MYSQL_ATTR_INITCOMMAND=>"SET NAMES utf8"]
	];
}