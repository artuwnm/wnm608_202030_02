<?php

function makeAuth() {
    return [
        "127.0.0.1",	// Database host location
        "yuezhou",	// Database user name  
        "Yu577098??",	// Database user password  
        "products"	// Database database name
    ];
}

function makePDOAuth() {
	return [
		"mysql:host=127.0.0.1;dbname=products", // host and database name
		"yuezhou", // database USER name  
		"Yu577098??", // database USER password  
		[PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"]
	];
}