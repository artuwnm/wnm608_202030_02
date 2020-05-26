<?php
include_once "lib/php/functions.php";
$_SESSION['cart'] = [];
?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Store: Purchase Confirmation</title>

	<?php include "parts/meta.php" ?>

</head>
<body>

	<?php include "parts/navbar.php" ?>

	<div class="added-container">
		<div class="card-shadow card-round">
			<div class="message">
			<h2>Your order has been placed</h2>

			<h5>Thank you for Shopping with Vivi's Yard Sale!</h5>

			</div>
			<div>
				<a href="product_list.php" class="btn-fill">Back to shopping</a>
			</div>

		
		</div>
	</div>
	
</body>
</html>