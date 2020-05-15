<?php 

include_once "lib/php/function.php";
include_once "parts/templates.php";

$randProducts = getRows(
	makeConn(),
	"
	SELECT *
	FROM `products`
	WHERE `id`IN (2,11,8)
	"
);
 ?><!DOCTYPE html>
<html>
<head>
	<title>Welcome to Meowie</title>
	<?php include "parts/meta.php" ?>
	
</head>
<body>
	
	<?php include "parts/navbar.php" ?>

	<div class="container ">
		<div class=" grid margin-top-5 margin-bottom-5">
			
				<div class="col-sm-12 col-md-6 image boxshadow "><img src="images/phone-mockup.png" alt="">
				</div>
				<div class="col-md-1"></div>
			<div class="col-md-5 col-sm-12 ">
				<div class="card transparent ">
					<h2 class="medium-color">WELCOME</h2>
					<br>
					<p>Hello cat lovers, shop all the cat-related accessories here at Meowie! You will find the best products here with neat and clean designs. The best thing is, they are all about cats!</p>
					
					 <a class="btn dark display-inline-block" href="product_list.php"> shop now </a>
				</div>
			</div>
		</div>
	</div>


	<div class="container">
		<h2 class="uppercase medium-color text-align-center flex-stretch text-align-center margin-bottom-5">Popular Items</h2>
		<div class="grid gap margin-bottom-5">
			<?= array_reduce($randProducts, "popularItems"); ?>

		</div>
	</div>

	<div class="view-window" style="background-image: url(images/jeff.png);">
		<div class="container ">
			<div class="view-window-img">
				<img src="images/suju.png" alt="">
			</div>
		<div class="card center text-align-left ">
			<h1 class="uppercase  medium-color">our story</h1>
			<br>
			<p class=" window-msg">Meowie aims to create cats-related products that are cute, clean and neat. Learn more about our story and the mission statement of Meowie.</p>
			<a class="btn window " href="about.php">learn more</a> 
			
		</div>
		</div>	
	</div>

	<div class="container">


		<div class="card transparent">
			<div class="meow-icon">
				<img src="images/Meow-icon.png" alt="">
			</div>
			<h2 class="uppercase text-align-center">meow with passion</h2>
			<p class="passion-p">All our designs are created with 99% of passion and 1% of meow power! Thanks to all the amazing cats and cat lovers out there, we are able to make all these cute products and spread the love of cats online.</p>
			
		</div>
		
	</div>
	<!-- <div class="view-window" style="background-image: url(https://via.placeholder.com/800?text=Product);">
		
	</div> -->
	
	<br>

</body>

<footer>
		<?php include "parts/footer.php" ?>
	

</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="styleguide/index.js"></script>


</html>
