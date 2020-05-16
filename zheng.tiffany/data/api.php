<?php 

include "../lib/php/functions.php";

$output = [];

$data = json_decode(file_get_contents("php://input"));

if(!isset($data->type)) {
	$output['error'] = "No Type Provided";
} else switch($data->type) {
	case "product_all":
		$output['result'] =
			getRows(makeConn(),"SELECT
			*
			FROM `products`
			ORDER BY `id` ASC
			LIMIT 15
			");
	break;

	case "product_from_id":
		$output['result'] =
			getRows(makeConn(),"SELECT
			*
			FROM `products`
			WHERE id = '$data->id'
			");
	break;

	case "product_search":
		$output['result'] = getRows(makeConn(),"SELECT
			*
			FROM `products`
			WHERE 
				`name` LIKE '%{$data->search}%' OR
				`description` LIKE '%{$data->search}%' OR
				`category` LIKE '%{$data->search}%'
			ORDER BY `date_create` DESC
			LIMIT 15
			");
	break;

	case "product_filter":
		$output['result'] = getRows(makeConn(),"SELECT
			*
			FROM `products`
			WHERE `$data->column` = '$data->value'
			ORDER BY `date_create` DESC
			LIMIT 15
			");
	break;

	case "product_sort":
		$output['result'] = getRows(makeConn(),"SELECT
			*
			FROM `products`
			ORDER BY `$data->column` $data->dir
			LIMIT 15
			");
	break;


	default:
		$output['error'] = "No Matched Type";
}

echo json_encode(
	$output,
	JSON_UNESCAPED_UNICODE|
	JSON_NUMERIC_CHECK

);

 ?>