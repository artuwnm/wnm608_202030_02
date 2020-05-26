<?php

include_once "lib/php/function.php";
include_once "parts/templates.php";


$result = getCartItems();

// print_p($result);

?><!DOCTYPE html>
<html lang="en">
<head>
	
	<title>Confirmation</title>
	<?php include "parts/meta.php" ?>


</head>

<body>
	<div class="logo"><a href="index.php"><img  src="images/horizontallogo.png" alt="Nature" ></a></div>
	
	

	<div class="container">
		<div class="containerflat">
	<nav class="nav-crumbs">
				<ul>
					<li>
						Cart
					</li>
					<li>
						Information
					</li>
					<li>
						Payment
					</li>
					
				</ul>
			</nav>
	</div>
		
		<div class="grid gap">
			
			<div class="col-xs-12 col-xl-6">
			<div class="card flat">
				
			
			<h4>Contact Information</h4>
			
			<div class="form-control">
    <input type="text" class="form-input" name="Email" placeholder="Email" id="input-example1">
    		</div>
    	

			<h4>Shipping Address</h4>
			
			<div class="form-control">
    <input type="text" class="form-input" name="firstname" placeholder="First Name" id="input-example7">
	<input type="text" class="form-input" name="firstname" placeholder="Last Name" id="input-example7">		
			</div>
			<div class="form-control">
    <input type="text" class="form-input" name="address" placeholder="Address" id="input-example1">
    		</div>
    		<div class="form-control">
    <input type="text" class="form-input" name="apt" placeholder="APT" id="input-example1">
    		</div>
    		<div class="form-control">
    <input type="text" class="form-input" name="city" placeholder="City" id="input-example1">
    		</div>
    			<div class="form-control">
    <input type="text" class="form-input" name="state" placeholder="State" id="input-example8">
	<input type="text" class="form-input" name="country" placeholder="Country" id="input-example8">	
	<input type="text" class="form-input" name="zip" placeholder="Zip" id="input-example9">			
			</div>
			
			<div class="display-flex flex-justify-end">
			<a href="confirmation.php" class="linkbutton">
				COUNTINUE
			</a>
			</div>
			</div>
		</div>


			<div class="col-xs-12 col-xl-6">
				<div class="card flat">
				<div class="card-section">
	<h4>Enjoy complimentary shipping and returns.</h4>
				<?php
				echo array_reduce($result,'checKoutTemplate');
				?>
				<?= cartTotals(); ?>

		</div>
			
		</div>
		</div>
			</div>
		</div>

</body>	
</html>