<?php

include_once "lib/php/functions.php";

$p = cartItemByID($_GET['id']);

$o = getRows(makeConn(),"SELECT * FROM `products` WHERE `id`={$_GET['id']}")[0];

// print_p([getCart(),$p,$o]);

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Store: Product Added To Cart</title>

	<?php include "parts/meta.php" ?>

</head>
<body>

	<?php include "parts/navbar.php" ?>

	<div class="added-container">
	
			<div class="card-shadow card-round">
				<div class="message">
					<h2>Item has been added to cart</h2>
					<h5>Thank you for adding <?= $o->product_name ?> to the cart.</h5>
				</div>
			

			<div>
				<div class="display-flex">
					<div class="flex-none">
						<a href="product_list.php" class="added-btn-color">Back to Shopping</a>
					</div>
					<div class="flex-stretch"></div>
					<div class="flex-none">
						<a href="product_cart.php" class="added-btn-fill">Go To Cart</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	
</body>
</html>