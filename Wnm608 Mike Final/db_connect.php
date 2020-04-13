<?php

$db_host = "localhost";
$db_name = "meng_wnm608";
$db_pass = "meng_wnm608";
$db_base = "meng_wnm608";


$conn = new mysqli(

$db_host,
$db_name,
$db_pass,
$db_base

);

if($conn->connect_errno)
	die($conn->connect_error);
