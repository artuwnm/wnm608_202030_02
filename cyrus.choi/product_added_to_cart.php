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

	<div class="container">
		<div class="card soft flat">
			<div class="card-section">
				<h2>Cart Confirmation</h2>
				
				<div>
					Congratulation! You make a good deal on adding <strong style="color:#e01f3cff"><?= $p->amount ?></strong> of the<strong style="color:#e01f3cff"> <?= $o->name?> </strong> to the cart.
				</div>
			</div>

			<div class="card-section">
				<div class="display-flex">
					<div class="flex-none">
						<a href="product_list.php">
						<button type="button" class="form-button">Continue to Shop
						</button></a>								
					</div>
					<div class="flex-stretch"></div>
					<div class="flex-none">
						<a href="product_cart.php">
						<button type="button" class="form-button">Check Cart
						</button></a>								
					</div>
				</div>
			</div>
		</div>
	</div>
	
</body>
</html>