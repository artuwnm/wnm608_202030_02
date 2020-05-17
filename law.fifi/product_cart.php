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
					<div class="card transparent col-md-12 col-sm-12">				
						<?php

							$cart = getCart();

							if(!empty($cart)) {

								echo array_reduce($result,"cartListTemplate");
								
							}else{
								echo "<div class='text-align-center padding-top-2 padding-bottom-2'>Your cart is empty! Add an item to the cart!</div>";
							}						
						 ?>
					</div>
				<div class="card transparent col-md-12 col-sm-12 text-align-right" style="border-top: 1px solid var(--color-neutral-medium);">
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