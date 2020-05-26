<?php

include_once "lib/php/function.php";
include_once "parts/templates.php";


// print_p($result);

?><!DOCTYPE html>
<html>
	<head>
		<?php include "parts/meta.php" ?>

		<title>Checkout</title>
	</head>
	<body>				

			<div class="display-flex card checkout flex-direction-column-reverse">
				<div class="flex-none">
					<a href="product_cart.php" class="return-btn">return to cart</a>
				</div>
				<div class="flex-stretch">
					<h2 class="text-align-center uppercase color-dark checkout-title">Checkout</h2>
				</div>
			</div>

		<div class="container">
			<div class="grid gap">
				<div class="card transparent col-md-8 col-sm-12">					
					<div>
						<form class="form" action="">
							<label class="form-label" for="email">Email Address</label>
							<input class="form-basic" type="text" placeholder="Email address" id="email" name="email">
							
						</form>
					</div>
					<br>
					<div>
						<form class="form" action="">
							<label class="form-label" for="shipping">Shipping Address</label>
							<div class="grid">
								<input class="form-basic col-md-6 col-sm-12 margin-right-2" type="text" placeholder="First Name" id="firstname" name="firstname">
								<input class="form-basic col-md-6 col-sm-12" type="text" placeholder="Last Name" id="lastname" name="lastname">
								<input class="form-basic col-md-12 col-sm-12" type="text" placeholder="Street Address" id="streetAddress" name="Street Address">
								<input class="form-basic col-md-12 col-sm-12" type="text" placeholder="Apt, Suite (Optional)" id="apt" name="apt">
								<input class="form-basic col-md-6 col-sm-12 margin-right-2" type="text" placeholder="ZIP Code" id="zip" name="zip">
								<input class="form-basic col-md-6 col-sm-12" type="text" placeholder="City" id="city" name="city">
								<select name="state" id="state" class="dropdown-selection inline-block col-md-6 col-sm-6 margin-right-2">
									<option  class="options"  value="option1">State</option>
									<option  class="options" value="option2">AL</option>
									<option  class="options" value="option3">AK</option>
									<option  class="options" value="option4">AZ</option>
									<option  class="options" value="option5">CA</option>
								</select>
								<select name="country" id="country" class="dropdown-selection inline-block col-md-6 col-sm-6">
									<option  class="options"  value="option1">Country</option>
									<option  class="options" value="option2">USA</option>
									<option  class="options" value="option3">China</option>
									<option  class="options" value="option4">UK</option>
									<option  class="options" value="option5">Canada</option>
								</select>
							</div>
						</form>
						<div class="form-control">

							<label for="standard-shipping" class="radiobox">
								<input type="radio" id="standard-shipping" name="radio">
								<span class="radiomark"></span>
								<label for="standard-shipping" class="form-content">Standard Shipping</label>

							</label>
							<label for="radio-example2" class="radiobox">
								<input type="radio" id="radio-example2" name="radio">
								<span class="radiomark"></span>
								<label for="radio-example2" class="form-content">Express Shipping</label>
							</label>
							<label for="radio-example3" class="radiobox">
								<input type="radio" id="radio-example3" name="radio">
								<span class="radiomark"></span>
								<label for="radio-example3" class="form-content">1-Day Shipping</label>
							</label>
						</div>
						<div class="form-control">
							<label for="billing-checkbox" class="checkbox">
								<input type="checkbox" id="billing-checkbox" >
								<span class="checkmark"></span>
								<label for="billing-checkbox" class="form-content color-dark">Use this shipping address as the billing address</label>
							</label>
						</div>
					</div>
					<br>
					<form class="form" action="">
							<label class="form-label" for="email">Payment Method</label>
							<input class="form-basic display-block" type="text" placeholder="Card Number" id="card-number" name="card-number">
							<input class="form-basic" type="text" placeholder="MM/YY" id="card-expire" name="card-expire">
							<input class="form-basic" type="text" placeholder="CVV" id="cvv" name="cvv">
							<label for="store-payment" class="checkbox">
								<input type="checkbox" id="store-payment" >
								<span class="checkmark"></span>
								<label for="store-payment" class="form-content color-dark">Store my payment method details for my next purchase</label>
							</label>
							<br>
							<div>
								<a href="confirmation.php" class="btn dark form-button order-btn">Place my order</a>
							</div>
					</form>
				</div>
				<div class="col-md-4 col-sm-12 card flat">
					<div><a href="confirmation.php" class="btn dark form-button">Place my order</a></div>
					<?= cartTotal(); ?>
				</div>
			</div>
		</div>		

		<script type="text/javascript" src="styleguide/index.js"></script>
	</body>
</html>