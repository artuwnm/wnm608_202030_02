<?php

function makeAuth() {
	return [
		"localhost", // Database host location
		"tzheng8_wnm608", // Database user name
		"tzheng8_wnm608", // Database user password
		"tzheng8_wnm608", // Database database name
	];
	
}

function makePDOAuth() {
	return [
		"mysql:host=localhost;dbname=tzheng8_wnm608", // host and database name
		"tzheng8_wnm608", // database USER name
		"tzheng8_wnm608", // database USER password
		[PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"]
	];
}

?>