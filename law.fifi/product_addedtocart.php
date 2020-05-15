<?php

include_once "lib/php/function.php";
include_once "parts/templates.php";


$p = cartItemByID($_GET['id']);

$o = getRows(makeConn(),"SELECT * FROM `products` WHERE `id` = '{$_GET['id']}'")[0];

// print_p($p,$o);

// $result = getRows(
// 	makeConn(),
// 	"SELECT *
// 	FROM `products`
// 	WHERE `id` = '{$_GET['id']}'
// 	"
// );

$randProducts = getRows(
	makeConn(),
	"
	SELECT *
	FROM `products`
	WHERE `id`IN (3,6,10)
	"
);

// $o = $result[0];
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
			
			<div class="card soft">
				<h2 class="text-align-center">MEOW!</h2>
				<div class="display-flex added-to-cart margin-bottom-2">
					<div class="cart-img flex-none">
						<img src="images/<?= $o->thumbnail ?>" alt="">
					</div>
					<div class="flex-stretch">
						<div class="display-flex added-to-cart-msg">
							<div class="flex-stretch">
								<h3 class="medium-color">Thank you! <?= $p->amount ?> of <?= $o->productName?> has been added to cart.</h3>
							</div>
							<div class="flex-none" >
								<a href="product_list.php" class="btn dark">Continue Shopping</a>
						
								<a href="product_cart.php" class="btn light">View Cart</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<hr>
		<div class="container ">
			
				<h2 class="uppercase color-dark">You may also like:</h2>					

		
			<div class="grid margin-bottom-5">
				<?php
					echo array_reduce($randProducts, 'productListTemplate');
				?>
								
			</div>
		</div>

		

<footer>
		<?php include "parts/footer.php" ?>
	

</footer>

		<script type="text/javascript" src="styleguide/index.js"></script>
	</body>
</html>