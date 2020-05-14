<?php

function makeAuth() {
	return [
		"localhost",		// Database host location
		"HLwnm608",	// Database user name
		"HLwnm608",			// Database user password
		"HLwnm608"		// Database database name
	];
}
function makePDOAuth() {
	return [
		"mysql:host=localhost;dbname=HLwnm608", // host and database name
		"HLwnm608", // database USER name
		"HLwnm608", // database USER password
		[PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"]
	];
}