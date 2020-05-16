<?php 

include_once "../lib/php/functions.php";

if(!isset($_GET['action'])) die("No Action Set");



switch($_GET['action']) {
	case "add-to-cart": 
		addToCart($_GET['id'],$_GET['size'],$_GET['amount'],$_GET['price']);
		header("location:../item_added_to_cart.php?id={$_GET['id']}");
		break;
	case "update-cart-amount":
		cartItemByID($_GET['id'])->amount = $_GET['amount'];
		header("location:../bag.php");
		break;
	case "delete-cart-item":
		$_SESSION['cart'] = array_filter($_SESSION['cart'],function($o){ return $o->id!=$_GET['id']; });
		header("location:../bag.php");
		break;
	case "update-cart-choice": break;
}

print_p([$_GET,$_SESSION]);



 ?>