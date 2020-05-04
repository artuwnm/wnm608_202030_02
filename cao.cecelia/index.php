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
				<a href="index.php">
				<figure class="product-figure soft">
					<img src="https://via.placeholder.com/500" alt="">
					<figcaption>
						<h3>Creative Way to Stack Earings</h3>
						<h5>From beloved pearl design for this summer</h5>
					</figcaption>
					</figcaption>
				</figure>
				</a>
			</div>
			
			<div class="col-xs-12 col-xl-6">
				<a href="index.php">
				<figure class="product-figure soft">
					<img src="https://via.placeholder.com/500" alt="">
					<figcaption>
						<h3>Creative Way to Stack Earings</h3>
						<h5>From beloved pearl design for this summer</h5>
					</figcaption>
				</figure>
			</a>
			</div>
			
		</div>
	</div>
		
		
  
 		<div class="containerstretch">
		<div class="grid gap">
			<div class="col-xs-12 col-xl-6">
			<h3>Introduction</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore non quis similique, sit, doloremque hic excepturi dolorum odit explicabo mollitia?</p>
			<div class="display-flex flex-justify-center">
			<a href="#" class="linkbutton">SHOP NOW</a>
			</div>
		</div>
			<div class="col-xs-12 col-xl-6">
			<img src="images/homeheader.png" alt="Nature" class="trytrytry">
		
			</div>
			</div>

		</div>	
		
		<div class="containerstretch">
		<div class="grid gap">
			
			<div class="col-xs-12 col-xl-6">
			
			
			<img src="images/homeheader.png" alt="Nature" class="trytrytry">
	
			</div>
			<div class="col-xs-12 col-xl-6">
			<h3>Introduction</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore non quis similique, sit, doloremque hic excepturi dolorum odit explicabo mollitia?</p>
			<div class="display-flex flex-justify-center">
			<a href="#" class="linkbutton">SHOP NOW</a>
			</div>
			</div>
		</div>
       </div>


  <?php include "parts/footer.php" ?>

</body>

</html>