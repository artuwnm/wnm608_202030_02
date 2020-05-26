<?php 

include_once "lib/php/functions.php";

$p = cartItemByID($_GET['id']);

$o = getRows(makeConn(),"SELECT * FROM `products` WHERE `id`={$_GET['id']}")[0];



 ?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Item Added To Cart</title>

	<?php include "parts/meta.php" ?>

</head>
<body>

	<?php include "parts/header.php" ?>

	<hr class="center container">

	<div class="medium-container">
		<h1 class="center">Item added to shopping bag</h1>
		<div class="card soft center">
			<div class="checkout-bag-item">
				<ul class="display-flex">
					<li class="product-thumbs flex-none">
						<img src="<?= $o->thumbnail ?>">
					</li>
					<li class="bag-item-info flex-stretch">
						<h5><?= $o->name ?></h5>
						<table class="bag-item-info-table">
							<tbody>
								<tr>
									<td>Size</td>
									<td class="bold"><?= $p->size ?></td>
								</tr>
								<tr>
									<td>Quantity</td>
									<td class="bold"><?= $p->amount ?></td>
								</tr>
							</tbody>
						</table>
					</li>
					<li class="bag-item-price flex-none"><h3>&dollar;<?= $o->price ?></h3></li>
				</ul>
			</div>

			<hr class="center container">

			
				<div class="card row">
					<div class="flex-none">
						<a href="shop_all.php">
							<button class="hollow-button round"><h4>Back to Shopping</h4></button>
						</a>
					</div>
					<div class="flex-stretch"></div>
					<div class="flex-none">
						<a href="bag.php">
							<button class="solid-button round"><h4>Go to Bag</h4></button>
						</a>
					</div>
				</div>

		</div>
	</div>

	<?php include "parts/footer.php" ?>
	
</body>
</html>