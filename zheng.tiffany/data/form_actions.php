<?php 

include_once "../lib/php/functions.php";

if(!isset($_GET['action'])) die("No Action Set");


print_p([$_GET,$_SESSION]);

switch($_GET['action']) {
	case "add-to-cart": 
		addToCart($_GET['id'],$_GET['amount'],$_GET['price']);
		header("location:../item_added_to_cart.php?id={$_GET['id']}");
		break;
	case "update-cart-amount": break;
	case "delete-cart-item": break;
	case "update-cart-choice": break;
}



 ?>