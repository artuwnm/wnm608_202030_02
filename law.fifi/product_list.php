<?php

include_once "lib/php/function.php";
include_once "parts/templates.php";


		$result = getRows(makeConn(), 
			"SELECT * 
			FROM `products`
			ORDER BY `date_created` DESC
			LIMIT 12

			"
		);

		// print_p($result);

// makeConn();

 ?><!DOCTYPE html>
<html>
	<head>
		<title>Products</title>
		<?php include "parts/meta.php" ?>
		
	</head> 
	<body>
	
		<?php include "parts/navbar.php" ?>
	
	<div class="container">
		<div class="nav-breadcrumb2 uppercase margin-top-2">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="product_list.php">Products</a></li>
			</ul>
		</div>
	</div>


	<div class="container title">
		<h2 class=" text-align-center uppercase">Products</h2>
		<p>All our products are originally designed and made with passion. Get your Meowie products today!</p>
	</div>

	
	<div class="container">
		<div class="display-flex">
			<div class="card accordion-card" >
				<div class="accordion">
					<div class="display-flex accordion-header">
						<div class="accordion-section flex-stretch uppercase">Categories</div>
						<div class="flex-none accordion-icon">+</div>
					</div>
					<div class="nav nav-accordion">
						<ul>
							<li><a href="#">Pillow</a></li>
							<li><a href="#">Stickers</a></li>
							<li><a href="#">Phone Case</a></li>
						</ul>
					</div>
				</div>
				<div class="accordion">
					<div class="display-flex accordion-header">
						<div class="accordion-section flex-stretch uppercase">Colors</div>
						<div class="flex-none accordion-icon">+</div>
					</div>
					<div class="nav nav-accordion">
						<ul>
							<li><a href="#">Yellow</a></li>
							<li><a href="#">White</a></li>
							<li><a href="#">Beige</a></li>
						</ul>
					</div>
				</div>
				<div class="accordion">
					<div class="display-flex accordion-header">
						<div class="accordion-section flex-stretch uppercase">Price</div>
						<div class="flex-none accordion-icon">+</div>
					</div>
					<div class="nav nav-accordion">
						<div class="number-slider-value">
							<h5>Price</h5>
							<input type="range" name="range" value="0" min="0" max="50" step="1" class="number-slider-bar">
						</div>
		
					</div>
				</div>
			</div>

			
			<div class="card transparent">
				<div class="grid gap">
					<?php 

						// $conn = makeConn();
						
						echo array_reduce($result,'productListTemplate');

					 ?>
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