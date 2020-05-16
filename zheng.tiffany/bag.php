<?php 

include_once "lib/php/functions.php";
include_once "parts/templates.php";

$result = getCartItems();

// print_p([$result,$_SESSION]);

 ?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Shopping Bag - Stylista</title>

	<?php include "parts/meta.php" ?>

</head>
<body>
	
	<?php include "parts/header.php" ?>

	<hr class="center container">

	<div class="container">
		<div class="back-link">
			<a href="shop_all.php"><span class="chevron left"></span> Back to Shop</a>
		</div>
	</div>

	<div class="bag medium-container">
		<h1 class="center">Shopping Bag</h1>
		
			<div class="card flat">
				<?php
				echo array_reduce($result,'cartListTemplate');
				?>

				<hr class="center container">
		
				<?= cartTotals(); ?>
				
				<div class="checkout-button">
					<a href="checkout.php">
						<button class="solid-button round"><h4>Checkout</h4></button>
					</a>
				</div>
			
			</div>
	</div>

	<?php include "parts/footer.php" ?>

</body>
</html>