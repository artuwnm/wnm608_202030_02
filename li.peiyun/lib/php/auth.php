<?php

function makeAuth() {
	return [
		"localhost",		// Database host location
		"aaubackend",	// Database user name
		"aaubackend",			// Database user password
		"aaubackend"		// Database database name
	];
}

function makePDOAuth() {
	return [
		"mysql:host=localhost;dbname=aaubackend", // host and database name
		"aaubackend", // database USER name
		"aaubackend", // database USER password
		[PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"]
	];
}