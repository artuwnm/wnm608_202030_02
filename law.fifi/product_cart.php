<?php

include_once "lib/php/function.php";
include_once "parts/templates.php";


$result = getCartItems();

// $o = $result[0];

// $thumbs = explode(",",$o->images);

// print_p($result);

?><!DOCTYPE html>
<html>
	<head>
		<?php include "parts/meta.php" ?>

		<title>Cart</title>
	</head>
	<body>
	
		<?php include "parts/navbar.php" ?>	
	
		<div class="container">
			
			<div class="card transparent ">
				<h2 class="text-align-center">CART</h2>
				<div class="grid gap">
					<div class="card flat col-md-8 col-sm-12">				
						<?php 						
							echo array_reduce($result,"cartListTemplate");
						 ?>
					</div>
				<div class="card flat col-md-4 col-sm-12">
					<?= cartTotal(); ?>
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