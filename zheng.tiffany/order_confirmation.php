<?php
include_once "lib/php/functions.php";
$_SESSION['cart'] = [];



?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Order Confirmation</title>

	<?php include "parts/meta.php" ?>

</head>
<body>

	<?php include "parts/header.php" ?>

	<hr class="center container">

	<div class="medium-container">

		<h1 class="center">Thanks for shopping with us!</h1>

		<div class="card center confirmation-page">
			<p>We have received your order, and will be processing your order as soon as possible!</p>
			<a href="shop_all.php">
				<button class="hollow-button round"><h4>Back to Shopping</h4></button>
			</a>
		</div>

	</div>

	<?php include "parts/footer.php" ?>
	
</body>
</html>