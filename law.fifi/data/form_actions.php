<?php  


include_once"../lib/php/function.php";

if (!isset($_GET['action'])) die("no action set");

// print_p($_GET);

switch($_GET['action']){

	case 'add-to-cart':
		addToCart($_GET['id'],$_GET['amount'],$_GET['price'],$_GET['color']);
		header("location:../product_addedtocart.php?id={$_GET['id']}");
		break;
	case 'update-cart-amount':
		cartItemByID($_GET['id'])->amount = $_GET['amount'];
		header("location:../product_cart.php");
		break;
	case 'delete-cart-item':
		$_SESSION['cart']=array_filter($_SESSION['cart'],function($o){return $o->id!=$_GET['id'];});
		header("location:../product_cart.php");
		break;
}


print_p([$_GET,$_SESSION]);
