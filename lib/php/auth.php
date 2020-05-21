<?php

function makeAuth() {
	return [
		"107.180.48.123",	// Database host location
		"gdvqwjysl9l2",	// Database user name
		"Nien154907741!",	// Database user password
		"fenfong"	// Database database name
	];
}

function makePDOAuth() {
	return [
		"mysql:host=107.180.48.123;dbname=fenfong", // host and database name
		"gdvqwjysl9l2", // database USER name
		"Nien154907741!", // database USER password
		[PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"]
	];
}