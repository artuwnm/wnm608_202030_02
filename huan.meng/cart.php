<!DOCTYPE html>
<html lang="en">
<header>
	<?php include "parts/header.html"?>
</header>
<head>
		<meta charset="UTF-8">
		<title>Cart</title>
		<?php include "parts/head.html"?>
</head>
<body>
	<div style="margin-top: 60px"></div>

	<div class="cart-container row">
		<div class="cart-title col-sm-6 col-md-6 col-lg-6">
		</div>
		<div class="cart-continue col-sm-6 col-md-6 col-lg-6">
			<a href="product-list.php">Continue Shopping</a>
		</div>
	</div>

	<div class="cart-container row">
		<div class="col-sm-12 col-md-9 col-lg-9 cart-addon">
			<div class="row">
				<div class="col-sm-6 col-md-6 col-lg-6">
					<div>YOUR ITEM</div>
				</div>
				<div class="col-sm-2 col-md-2 col-lg-2">
					<div>PRICE</div>
				</div>
				<div class="col-sm-4 col-md-4 col-lg-4">
					<div>QUANTITY</div>
				</div>
			</div>
		</div>
	</div>

	<div class="cart-container row">
		<!-- Checkout Item -->
		<div class="col-sm-12 col-md-9 col-lg-9">
			 <!-- Item 1 -->
			<div class="row cart-item">
				<div class="col-sm-2 col-md-2 col-lg-2 cart-img">
					<img src="img/row_2_3.png"style="width: 200px; height: 200px;">
				</div>
				<div class="col-sm-4 col-md-4 col-lg-4 cart-description">
						<div class="description-title">Ice cream cake</div>
						<div class="description-name">Lorem ipsum dolor sit amet</div>
				</div>
				<div class="col-sm-2 col-md-2 col-lg-2 cart-price">
					<div>$60</div>
				</div>
				<div class="col-sm-3 col-md-3 col-lg-3 cart-detail">
					<div>Size: one size</div>
					<div>Quantity: 1</div>
				</div>
				<div class="col-sm-1 col-md-1 col-lg-1 cart-delete">
					<div>&#10006;</div>
				</div>
			</div>
			 <!-- Item 2 -->
			<div class="row cart-item">
				<div class="col-sm-2 col-md-2 col-lg-2 cart-img">
					<img src="img/row_3_2.png"style="width: 200px; height: 200px;">
				</div>
				<div class="col-sm-4 col-md-4 col-lg-4 cart-description">
						<div class="description-title">cookie</div>
						<div class="description-name">Lorem ipsum dolor sit amet</div>
				</div>
				<div class="col-sm-2 col-md-2 col-lg-2 cart-price">
					<div>$10</div>
				</div>
				<div class="col-sm-3 col-md-3 col-lg-3 cart-detail">
					<div>Size: one size</div>
					<div>Quantity: 1</div>
				</div>
				<div class="col-sm-1 col-md-1 col-lg-1 cart-delete">
					<div>&#10006;</div>
				</div>
			</div>
			<!-- Item 3 -->
			<div class="row cart-item">
				<div class="col-sm-2 col-md-2 col-lg-2 cart-img">
					<img src="img/row_1_2.png" style="width: 200px; height: 200px;">
				</div>
				<div class="col-sm-4 col-md-4 col-lg-4 cart-description">
						<div class="description-title">collection</div>
						<div class="description-name">Lorem ipsum dolor sit amet</div>
				</div>
				<div class="col-sm-2 col-md-2 col-lg-2 cart-price">
					<div>$25</div>
				</div>
				<div class="col-sm-3 col-md-3 col-lg-3 cart-detail">
					<div>Size: one size</div>
					<div>Quantity: 1</div>
				</div>
				<div class="col-sm-1 col-md-1 col-lg-1 cart-delete">
					<div>&#10006;</div>
				</div>
			</div>
		</div>
		<!-- Summary Price -->
		<div class="col-sm-12 col-md-3 col-lg-3">
			<div class="summary-box">
				<div class="summary-title">Summary</div>
				<div class="row">
					<div class="col-sm-6 col-md-6 col-lg-6">
						<div class="summary-detail">Subtotal</div>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-6">
						<div class="summary-price">$95</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6 col-md-6 col-lg-6">
						<div class="summary-detail">Tax</div>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-6">
						<div class="summary-price">$9.5</div>
					</div>
				</div>
				<hr class="summary-breaker">
				<div class="row">
					<div class="col-sm-6 col-md-6 col-lg-6">
						<div class="summary-detail">Total</div>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-6">
						<div class="summary-final-price">USD $104.5</div>
					</div>
				</div>
				<div class="summary-checkout">
					<div>Place Order</div>
				</div>
			</div>
		</div>
	</div>
	<footer>
		<div class="container">
				<div style="text-align: center; margin-top: 100px;">
				©Designed and Coded by Huan Meng
				</div>
		</div>
	</footer>
</body>
</html>