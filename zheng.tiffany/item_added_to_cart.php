<?php 

include_once "lib/php/functions.php";

$p = cartItemByID($_GET['$id']);

$o - getRows(makeConn(),"SELECT * FROM `products` WHERE `id`={$_GET['id']}")[0];



 ?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Store: Item Added To Cart</title>

	<?php include "parts/meta.php" ?>

</head>
<body>

	<?php include "parts/header.php" ?>

	<div class="container">
		<div class="card soft">
			<div class="card-section">
				<h2>Cart Confirmation</h2>
				
				<div>
					Thank you for adding <?= $p->amount ?> of the <?= $o->title ?> to the cart.
				</div>
			</div>

			<div class="card-section">
				<div class="display-flex">
					<div class="flex-none">
						<a href="shop_all.php" class="form-button">Back to Shopping</a>
					</div>
					<div class="flex-stretch"></div>
					<div class="flex-none">
						<a href="bag.php" class="form-button">Go to Bag</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	
</body>
</html>