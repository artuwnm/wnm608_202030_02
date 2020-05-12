<?php

include_once "../lib/php/functions.php";

print_p($_GET);

if(!isset($_GET['action']))die("No Action Set");

print_p($_GET);

switch($_GET['action']) {
	case "add-to-cart":
		addToCart($_GET['id'],$_GET['amount'],$_GET['price']);
		break;
	case "update-cart-amount": break;
	case "delete-cart-item": break;
	case "update-cart-choice": break;
}
