<?php 

include"../lib/php/function.php";

$output = [];

$data = json_decode(file_get_contents("php://input"));
//php://input is a file stored by PHP on server

if(!isset($data->type)){
	$output['error']="No type";
}else switch($data->type){
	case "products_all":
		$output['result']= getRows(makeConn(),"SELECT 
			* FROM `products`
			ORDER BY `date_created` DESC
			LIMIT 12
			");
	break;

	case "product_search":
		$output['result']= getRows(makeConn(),"SELECT 
			* FROM `products`
			WHERE 
			`productName`LIKE '%{$data->search}%'OR
			`category`LIKE '%{$data->search}%'OR
			`description`LIKE '%{$data->search}%'
			ORDER BY `date_created` DESC
			LIMIT 12
			");
	break;

	case "products_filter":
		$output['result']= getRows(makeConn(),"SELECT 
			* FROM `products`
			WHERE 
			`$data->column`LIKE '%{$data->value}%'
			ORDER BY `date_created` DESC
			LIMIT 12
			");
	break;
	case "products_sort":
		$output['result']= getRows(makeConn(),"SELECT 
			* FROM `products`
			ORDER BY `$data->column` $data->dir
			LIMIT 12
			");
	break;

	default:
		$output['error']="No matched Type";
}



echo json_encode(
	$output,
	JSON_UNESCAPED_UNICODE |
	JSON_NUMERIC_CHECK
);



