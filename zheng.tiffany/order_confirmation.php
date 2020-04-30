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

	<div class="container">
		<div class="card soft">

			<h2>Order Confirmation</h2>

			<div>Thank you for your order!</div>

			<div>
				<a href="shop_all.php" class="form-button">Back to shopping</a>
			</div>
		
		</div>
	</div>

	<?php include "parts/footer.php" ?>
	
</body>
</html>