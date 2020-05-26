<?php

function makeAuth() {
	return [
		"localhost", 		// Database host location
		"aauwnmcode", 	// Database host name
		"aauwnmcode", 		// Database host password
		"aauwnmcode", 	// Database host database name
	];
}

function makePDOAuth() {
	return [
		"mysql:host=localhost;dbname=aauwnmcode", // host and database name
		"aauwnmcode", // database USER name
		"aauwnmcode", // database USER password
		[PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"]
	];
}