<?php

include_once "lib/php/function.php";
include_once "parts/templates.php";
$_SESSION['cart']=[];

$result = getRows(
	makeConn(),
	"SELECT *
	FROM `products`
	WHERE `id` IN (2,6,10)
	"
);

$o = $result[0];
$thumbs = explode(",",$o->images);

// print_p($result);

?><!DOCTYPE html>
<html>
	<head>
		<?php include "parts/meta.php" ?>

		<title>Order Confirmation</title>
	</head>
	<body>
	
		<?php include "parts/navbar.php" ?>	
	
		<div class="container">
			
			<div class="card soft text-align-center">
				<div class="meow-icon">
					<img src="images/Meow-icon.png" alt="">
				</div>
				<h1 >Thank You!</h1>
				<p style="padding: 0 10em;">Thank you for shopping with Meowie. Your order has been placed and here is the confirmation number for your order: #12345678</p>
				<div class="margin-top-2">
					<a href="product_list.php" class="btn light">Continue Shopping</a>
				</div>
				
			</div>
		</div>

		

<footer>
		<?php include "parts/footer.php" ?>
	

</footer>

		<script type="text/javascript" src="styleguide/index.js"></script>
	</body>
</html>