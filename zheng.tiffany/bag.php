<?php 

include_once "lib/php/functions.php";
include_once "parts/templates.php";

$result = getCartItems();

// print_p($result);

 ?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Shopping Bag - Stylista</title>

	<?php include "parts/meta.php" ?>

</head>
<body>
	
	<?php include "parts/header.php" ?>

	<hr class="center container">

	<div class="medium-container">
		<h1 class="center">Shopping Bag</h1>
		
			<div class="card flat">
				<?php
				echo array_reduce($result,'cartListTemplate');
				?>

				<hr class="center container">
		
				<?= cartTotals(); ?>
				
				<div class="checkout-button">
					<a href="checkout.php" class="form-button">Checkout</a>
				</div>
			
			</div>
	</div>

	<?php include "parts/footer.php" ?>

</body>
</html>