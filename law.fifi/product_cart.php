<?php

include_once "lib/php/function.php";
include_once "parts/templates.php";

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

		<title>Add to cart</title>
	</head>
	<body>
	
		<?php include "parts/navbar.php" ?>	
	
		<div class="container">
			
			<div class="card transparent ">
				<h2 class="text-align-center">CART</h2>
				<div class="grid gap">
					<div class="card flat col-md-8">				
						<?php 						
							echo array_reduce($result,"cartListTemplate");
						 ?>
					</div>
				<div class="card flat col-md-4">
					<div>
						<h2>Subtotal</h2>
					</div>
					<div>
						<p>Products:$75</p>
					</div>
					<div><p>Tax:$10</p>	</div>				
					<div>
						<p>Total:$85</p>
					</div>
					<div>
						<a href="checkout.php" class="btn dark form-button">Checkout</a>
					</div>
				</div>
				</div>
			</div>
		</div>

		

<footer>
		<?php include "parts/footer.php" ?>
	

</footer>

		<script type="text/javascript" src="styleguide/index.js"></script>
	</body>
</html>