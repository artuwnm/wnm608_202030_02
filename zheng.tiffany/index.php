<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Stylista Store</title>
	
	<?php include "parts/meta.php" ?>
	
</head>
<body>
	
	<?php include "parts/header.php" ?>

	<div class="hero">
		<img src="images/hero_background.png" alt="Hero Image">
		<div class="container">
			<div class="hero__content">
				<h1>Introducing our Spring Collection</h1>
				<p>Fun, fresh florals for your favorite season.</p>
				<button class="hollow-button round"><a href="shop_all.php"><h4>Shop Now</h4></a></button>
			</div>
		</div>
	</div>

	<div class="featured-items container">
		<h1 class="center">Featured Items</h1>
		
		<h3>Women</h3>
		<div class="grid gap">
			<?php recommendedCategory("Women"); ?>
		</div>
		
		<h3>Men</h3>
		<div class="grid gap">
			<?php recommendedCategory("Men"); ?>
		</div>

		<div class="center">
			<a href="shop_all.php">
				<button class="hollow-button round"><h4>Shop All</h4></button>
			</a>
		</div>
	</div>

	<?php include "parts/footer.php" ?>

</body>

</html>