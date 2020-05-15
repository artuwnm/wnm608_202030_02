<?php

include_once "lib/php/function.php";
include_once "parts/templates.php";


$result = getCartItems();

// print_p($result);

?><!DOCTYPE html>
<html lang="en">
<head>
	
	<title>PILE ON PEARLS</title>

	<!-- meta:vp -->
	<?php include "parts/meta.php" ?>

</head>

<body>
	<div class="homebgimage">


	<?php include "parts/navbar.php" ?>

	<div class="advertisement">
	<h1>HAVE AN EXCLAMATION POINT FOR YOU</h1>
	<h4>Enjoy every moment in your life</h4>
	</div>
	</div>

	<div class="selectionstyle">
	<h1 align="center">A Selection for This Season</h1>
	<h4 align="center">From beloved pearl design for this summer</h4>
	</div>	

	<div class="container flex-justify-center display-flex">
		<div class="grid gap">
			
			<div class="col-xs-12 col-xl-6 ">
				<a href="shop.php">
					<figure class="product-figure">
						<img src="images/homerecommendation_1.jpg">
					
				
						<h3 style="text-align: center;">Creative Way to Stack Earings</h3>
						<h5 style="text-align: center;">From beloved pearl design for this summer</h5>
					
				</figure>
				</a>
			</div>
			
			<div class="col-xs-12 col-xl-6">
				<a href="shop.php">
				<figure class="product-figure">
					<img src="images/homerecommendation.jpg" alt="">
					
						<h3 style="text-align: center;">Creative Way to Stack Earings</h3>
						<h5 style="text-align: center;">From beloved pearl design for this summer</h5>
					
				</figure>
			</a>
			</div>
			
		</div>
	</div>
		
		
  
 		<div class="containerstretch">
		<div class="grid gap">
			<div class="col-xs-12 col-xl-6">
			<h4>Explore New accessories</h4>
			<h2>New Beauty in Urban Environments</h2>
			<p style="font-size: 16px">PILE ON PEARLS provides a way for people who want to embrace their femininity and beauty through Eastern spiritual practices and mysticism, for young girls, for daily mix & match, for all kinds of occasions. The collection is comprised of earings, necklaces, rings and bracelets featuring with pearls or diamonds on most of them.</p>
			<div class="display-flex flex-justify-center">
			<a href="#" class="linkbutton">SHOP NOW</a>
			</div>
		</div>
			<div class="col-xs-12 col-xl-6">
			<img src="images/homeintroduction_2.jpg" alt="Nature" class="trytrytry">
		
			</div>
			</div>

		</div>	

		  <h2 align="center">"We provides a way for people who want to embrace their femininity and beauty through Eastern spiritual practices and mysticism."</h2>

		
		<div class="containerstretch">
		<div class="grid gap">
			
			<div class="col-xs-12 col-xl-6">
			
			
			<img src="images/homeintroduction_1.jpg" alt="Nature" class="trytrytry">
	
			</div>
			<div class="col-xs-12 col-xl-6">
			<h4>About Us</h4>
			<h2>Know More About Our Brand</h2>
			<p style="font-size: 16px">PILES ON PEARLS wants to create special styles for young girls in daily use. The different geometry shapes in the logo are combined together to show the precise and demanding attitude of this brand. The three main color in this logo display the taste of this brand.</p>
			<div class="display-flex flex-justify-center">
			<a href="#" class="linkbutton">SHOP NOW</a>
			</div>
			</div>
		</div>
       </div>


  <?php include "parts/footer.php" ?>

</body>

</html>