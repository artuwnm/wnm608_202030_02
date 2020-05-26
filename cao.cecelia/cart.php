<?php

include_once "lib/php/function.php";
include_once "parts/templates.php";


$result = getCartItems();

// print_p($result);

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Store: Cart</title>

	<?php include "parts/meta.php" ?>

</head>
<body>

	<?php include "parts/navbar.php" ?>

	<div class="container">
		<nav class="nav-crumbs" style="margin:1em 0">
			<ul>
				<li><a href="shop.php">< Continue Shopping</a></li>
			</ul>
		</nav>

		<div class="grid gap">
			<div class="col-xs-12 col-md-8">
				<hr align="center" width="100%" color="grey" size="1">
				<?php
				echo array_reduce($result,'cartListTemplate');
				?>
				
			</div>
			<div class="col-xs-12 col-md-4">
				<div class="card">
					<?= cartTotals(); ?>
					</div>
					<a href="checkout.php" class="form-button">Checkout</a>
</div>
				</div>
				<div>

			</div>

		</div>
	</div>
	
</body>
</html>