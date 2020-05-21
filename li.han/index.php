<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";
$empty_poduct=(object)[
]

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Landing Page</title>
<?php include "parts/meta.php" ?>
</head>
<body>
	
	<!-- header.navbar>h1+nav.nav -->
<?php include "parts/navbar.php" ?>
	<!-- .container>p*2>lorem40 -->
	

	<div class="container" style="margin-top: 20px">
	<div class="grid gap" style="background-color: white;" >
	          <div class="col-2"><img src="images/shiseido.png" alt="shiseido.png" style="width: 50%">
	          </div>
	          <div class="col-2"><img src="images/ptr.png" alt="ptr.png" style="width: 55%">
	          </div>
	          <div class="col-2"><img src="images/eve.png" alt="eve.png" style="width: 40%">
	          </div>
	          <div class="col-2"><img src="images/lancome.jpg" alt="lancome" style="width: 30%"></div>
	          <div class="col-2"><img src="images/cpb.png" alt="cpb" style="width: 50%"></div>
	          <div class="col-2"><img src="images/erno.png" alt="erno laszro" style="width: 45%"></div>
	</div>	
	</div>
<div class="container">
	<div class="card medium" >
		<div class="grid gap">
			<div class="col-xs-12 col-md-4">
			</div>
			<div class="col-xs-12 col-md-4">
			</div>
				<div class="col-xs-12 col-md-4 ">
		
       <h2>Erno Laszlo </h2>  
		<h4>
			The Ultimate Lift
		</h4>
		<p>Healthy skin starts with a commitment to a regular skin care regimen, using high quality skin care and facial products every day. While we often think of the face first when it comes to caring for the skin, the skin on the body also needs attention.  
  </p>
	 <p><a class="form-button" href="product_list.php" style="background-color:#074476; color: white">Learn More</a></p>
	</div>
</div>
</div>
</div>
	

 <div class="container">
		<h2 style="text-align: center; font-family:'Raleway Dots', cursive">Latest Moisturizers</h2>
		<?php recommendedCategory("Moisturizers"); ?>
 </div>
	<div class="view-window display-flex flex-align-center flex-justify-center" style="background-image:url(images/bk.jpg)">
		<!-- <div class="card soft" style="background-image: url(images/shipping.png)"> -->
			<!-- .col-6*2>.card.soft>lorem20 -->
                <!-- <h3>Free shipping over $29 </h3>  -->
                <!-- <p><a class="form-button" href="product_list.php">Details</a></p>    -->
				
			<!-- </div> -->
			
			<div class="card soft home" >
                <h3 style="color: white">Special Selections</h3>
                <h2 class="quote">"Beauty begins the moment you deside to treat yourself"</h2>
                <p><a class="form-button shop" href="product_list.php">Shop</a></p>
				
			</div>
           
     </div>
</body>
<footer>
		<?php include "parts/footer.php" ?>
	</footer>
</html>