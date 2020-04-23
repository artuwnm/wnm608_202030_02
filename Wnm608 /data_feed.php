<?php

include_once "lib/php/print_o.php";
include_once "db_connect.php";


function likeGroup($where,$like) {
	$result = " WHERE ";
	$arr = explode(",",$where);
	for($i=0; $i<count($arr); $i++) {
		if($i) $result .= " OR ";
		$result .= " $arr[$i] LIKE '%$like%' ";
	}
	return $result;
}


$wherewhat_string = 
	isset($_GET['what']) && isset($_GET['where']) ?
	" WHERE {$_GET['where']} = '{$_GET['what']}' " :
	"";
$wherein_string = 
	isset($_GET['in']) && isset($_GET['where']) ?
	" WHERE {$_GET['where']} in ({$_GET['in']}) " :
	"";
$wherelike_string = 
	isset($_GET['like']) && isset($_GET['where']) ?
	likeGroup($_GET['where'],$_GET['like']) :
	"";
$orderby_string = 
	isset($_GET['orderby']) && isset($_GET['direction']) ?
	" ORDER BY {$_GET['orderby']} {$_GET['direction']}" :
	" ORDER BY date_create DESC ";
$limit_string = 
	isset($_GET['limit']) ?
	" LIMIT {$_GET['limit']}" :
	" LIMIT 12 ";


$query_string = "SELECT * FROM products
	$wherewhat_string
	$wherelike_string
	$wherein_string
	$orderby_string
	";

$result = $conn->query($query_string);
if($conn->errno) die($conn->error);

$output = array();
while($row = $result->fetch_object()) {
	// array _push
	$output[] = $row;
}

die(json_encode($output));