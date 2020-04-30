<?php

include_once "lib/php/function.php";

$p = cartItemByID($_GET['id']);

$o = getRows(makeConn(),"SELECT * FROM `product` WHERE `id`={$_GET['id']}")[0];

// print_p([getCart(),$p,$o]);

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Store: Product Added To Cart</title>

	<?php include "parts/meta.php" ?>

</head>
<body>

	<?php include "parts/navbar.php" ?>

	<div class="container">
		<div class="card soft flat">
			<div class="card-section">
				<h2>Already in your cart!</h2>
				
				<div>
					Thank you for adding the <?= $o->name ?> into your the cart.
				</div>
			</div>

			<div class="card-section">
				<div class="display-flex">
					<div class="flex-none">
						<a href="product_list.php" class="form-button">Countinue Shopping</a>
					</div>
					<div class="flex-stretch"></div>
					<div class="flex-none">
						<a href="cart.php" class="form-button">Checkout your Cart</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	
</body>
</html>