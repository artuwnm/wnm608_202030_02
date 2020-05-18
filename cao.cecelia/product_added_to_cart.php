<?php

include_once "lib/php/function.php";
include_once "parts/templates.php";

$p = cartItemByID($_GET['id']);

$o = getRows(makeConn(),"SELECT * FROM `product` WHERE `id`={$_GET['id']}")[0];

// print_p([getCart(),$p,$o]);
$result = getCartItems();

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Store: Product Added To Cart</title>

	<?php include "parts/meta.php" ?>

</head>
<body>

	<?php include "parts/navbar.php" ?>
		
	<div class="containercart">
		<div class="card soft">
			<div class="card-section">
				<h2 style="text-align: center;"><?= $o->name ?> is alreay in your the cart.</h2>
				
				<!-- <div class="thankyou">
					Thank you for adding the <?= $o->name ?> into your the cart.
					
				</div> -->
				
			</div>
			
			<?php
					echo array_reduce($result,'addCartTemplate');
					?>
			

		</div>
		<div class="display-flex" style="font-size:1em">
			<div class="flex-none">
						<a href="shop.php" class="form-button">Countinue Shopping</a>
					</div>
			<div class="flex-stretch"></div>
			<div class="flex-none">
						<a href="cart.php" class="form-button">Checkout your Cart</a>
					</div>
		</div>
	</div>
	<div class="container">
	
	
<div class="grid gap">
	<div class="col-xs-12 col-md-4">
	<a href="product_item.php?id=$o->id" class="display-block">
		<figure class="product-figure">
			<div class="imagedecorarionrecommendation display-flex flex-align-center flex-justify-center">
					<h3>RECOMMENDATIONS</h3>
					
				</div>
			
		</figure>
	</a>
</div>

	<div class="col-xs-12 col-md-4">
	<a href="product_item.php?id=$o->id" class="display-block">
		<figure class="product-figure">
			<div class="product-image">
				<img src="images/aquamarineearrings_thumbnail.jpg" alt="">
			</div>
			<div class="form-control display-flex">
				<div class="flex-none">Baby Earrings</div>
				<div class="flex-stretch"></div>
				<div class="flex-none">$98.98</div>
			</div>
			
		</figure>
	</a>
</div>
	
	<div class="col-xs-12 col-md-4">
	<a href="product_item.php?id=$o->id" class="display-block">
		<figure class="product-figure">
			<div class="product-image">
				<img src="images/doublelonglinkearrings_pc_1.jpg" alt="">
			</div>
			<div class="form-control display-flex">
				<div class="flex-none">Baby Earrings</div>
				<div class="flex-stretch"></div>
				<div class="flex-none">$98.98</div>
			</div>
			
		</figure>
	</a>
</div>
		</div>
</div>
	
</body>
</html>