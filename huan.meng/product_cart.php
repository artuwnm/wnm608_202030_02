<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

$result = getCartItems();

// print_p($result);

?><!DOCTYPE html>
<html lang="en">
<head>
		<title>Product Cart</title>
		<?php include "parts/meta.php" ?>
</head>
<body>
	<?php include "parts/navbar.php" ?>
		<div style="margin-top: 60px"></div>

	<div class="cart-container row">
		<div class="cart-title col-sm-6 col-md-6 col-lg-6">
		</div>
		<div class="cart-continue col-sm-6 col-md-6 col-lg-6">
			<a href="product-list.php" style="margin:1em 0">Continue Shopping</a>
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
						<div class="description-name">Vanilla blend with different flavored ice cream and big strawberry chunks on the top.</div>
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
						<div class="description-name">Multicolored sugar sprinkled over cherry flavored chocolate on the cookies.</div>
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
						<div class="description-name">Sharing set with raspberry, strawberry and blueberry ice cream.</div>
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
						<div class="summary-price">$85</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6 col-md-6 col-lg-6">
						<div class="summary-detail">Tax</div>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-6">
						<div class="summary-price">$8.5</div>
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
					<a href="product_checkout.php" class="form-button">Place The Order</a>
				</div>
			</div>
		</div>
	</div>

<footer>
	<?php include "parts/footer.php" ?>
</footer>
</body>
</html>