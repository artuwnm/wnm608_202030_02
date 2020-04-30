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

	<div class="container">
		<nav class="nav-crumbs" style="margin:1em 0">
			<ul>
				<li><a href="shop_all.php">Back</a></li>
			</ul>
		</nav>
		<h1 class="center">Shopping Bag</h1>
		<div class="grid gap">
			<div class="col-xs-12 col-md-8">
				<div class="card flat">
					<?php
					echo array_reduce($result,'cartListTemplate');
					?>
				</div>
			</div>
			<div class="col-xs-12 col-md-4">
				<div class="card flat">
					<?= cartTotals(); ?>
					
					<div class="card-section">
						<a href="checkout.html" class="form-button">Checkout</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php include "parts/footer.php" ?>

</body>
</html>