<?php

function makeAuth() {
	return [
		"localhost", // Database host location
		"w9rtfjx0awvu", // Database user name
		"mEnG13050507887", // Database user password
		"huan_aauwnm608", // Database database name
	];
	
}

function makePDOAuth() {
	return [
		"mysql:host=localhost;dbname=huan_aauwnm608", // host and database name
		"huan_aauwnm608", // database USER name
		"mEnG13050507887", // database USER password
		[PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"]
	];
}

?>