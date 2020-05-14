<?php 

include_once "lib/php/functions.php";
include_once "parts/templates.php";

$result = getCartItems();

 ?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Checkout - Stylista</title>
	
	<?php include "parts/meta.php" ?>
	
</head>
<body>

<div class="grid gap full-height">

	<div class="col-3">
		<div class="bag-container">
			<div class="back-link small-link">
				<a href="bag.php"><span class="chevron left"></span> Return to Bag</a>
			</div>

			<?php
				echo array_reduce($result,'checkoutListTemplate');
			?>
			
			<hr class="center">

			<?= checkoutTotals(); ?>
			
		</div>
	</div>

	<div class="col-9">
		<div class="checkout container">
			<div class="logo">
				<img src="images/stylista.png" alt="Stylista">
			</div>

			<form class="checkout-form">

				<h5>Contact Information</h5>
				<div class="form-control">
					<input type="text" class="checkout-input" id="checkout-email" name="checkout-email" placeholder="Email">
				</div>
				<div class="form-control">
					<input type="text" class="checkout-input" id="checkout-phone" name="checkout-phone" placeholder="Phone number">
				</div>

				<h5>Shipping Address</h5>
				<div class="form-control">
					<input type="text" class="checkout-input" id="checkout-first-name" name="checkout-first-name" placeholder="First name">
				</div>
				<div class="form-control">
					<input type="text" class="checkout-input" id="checkout-last-number" name="checkout-last-number" placeholder="Last name">
				</div>
				<div class="form-control">
					<input type="text" class="checkout-input" id="checkout-address-1" name="checkout-address-1" placeholder="Street Address">
				</div>
				<div class="form-control">
					<input type="text" class="checkout-input" id="checkout-address-2" name="checkout-address-2" placeholder="Apartment, unit, suite, etc. (optional)">
				</div>
				<div class="form-control">
					<input type="text" class="checkout-input" id="checkout-city" name="checkout-city" placeholder="City">
				</div>
				<div class="checkout-row display-flex">
					<div class="form-control">
						<label for="checkout-country" class="form-label">Country</label>
						<select name="amount" class="checkout-button">
							<option>United States</option>
							<option>Canada</option>
							<option>Mexico</option>
						</select>
					</div>
					<div class="form-control">
						<label for="checkout-state" class="form-label">State</label>
						<select name="amount" class="checkout-button">
							<option>AL</option>
							<option>AK</option>
							<option>AZ</option>
							<option>AR</option>
							<option>AZ</option>
							<option>CA</option>
							<option>CO</option>
							<option>CT</option>
							<option>DE</option>
							<option>FL</option>
							<option>GA</option>
							<option>HI</option>
							<option>ID</option>
							<option>IL</option>
							<option>IN</option>
							<option>IA</option>
							<option>KS</option>
							<option>KY</option>
							<option>LA</option>
							<option>ME</option>
							<option>MD</option>
							<option>MA</option>
							<option>MI</option>
							<option>MN</option>
							<option>MS</option>
							<option>MO</option>
							<option>MT</option>
							<option>NE</option>
							<option>NV</option>
							<option>NH</option>
							<option>NJ</option>
							<option>NM</option>
							<option>NY</option>
							<option>NC</option>
							<option>ND</option>
							<option>OH</option>
							<option>OK</option>
							<option>OR</option>
							<option>PA</option>
							<option>RI</option>
							<option>SC</option>
							<option>SD</option>
							<option>TN</option>
							<option>TX</option>
							<option>UT</option>
							<option>VT</option>
							<option>VA</option>
							<option>WA</option>
							<option>WV</option>
							<option>WI</option>
							<option>WY</option>
						</select>
					</div>
					<div class="form-control">
						<input type="text" class="checkout-input" id="checkout-zip-code" name="checkout-zip-code" placeholder="Zip code">
					</div>
				</div>

				<h5>Payment</h5>
				<div class="form-control">
					<label for="checkout-card-number" class="form-label">Credit Card</label>
					<input type="text" class="checkout-input" id="checkout-card-number" name="checkout-card-number" placeholder="Card number">
				</div>
				<div class="form-control">
					<input type="text" class="checkout-input" id="checkout-card-name" name="checkout-card-name" placeholder="Name on card">
				</div>
				<div class="form-control">
					<input type="text" class="checkout-input" id="checkout-expiry-date" name="checkout-expiry-date" placeholder="Expiration date (MM/YY)">
				</div>
				<div class="form-control">
					<input type="text" class="checkout-input" id="checkout-security-code" name="checkout-security-code" placeholder="Security Code">
				</div>

			</form>

			<div class="checkout-button pay-now">
				<a href="order_confirmation.php" class="form-button">Pay Now</a>
			</div>

		</div>
	</div>
	
</div>
	

</body>
</html>