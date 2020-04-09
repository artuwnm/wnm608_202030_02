<!DOCTYPE html>
<html lang="en">
<head>
	<title>Stylista Store</title>
	
	<?php include "parts/meta.php" ?>
	
</head>
<body>
	
	<?php include "parts/header.php" ?>

	<div class="hero">
		<div class="hero__image"></div>
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
		<h2>Women</h2>
		<div class="grid gap">
			<div class="col-xs-12 col-md-6 col-lg-4">
				<div class="card light">
					<button><h3>Shop</h3></button>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-4">
				<div class="card light">
					<button><h3>Shop</h3></button>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-4">
				<div class="card light">
					<button><h3>Shop</h3></button>
				</div>
			</div>
		</div>
		<h2>Men</h2>
		<div class="grid gap">
			<div class="col-xs-12 col-md-6 col-lg-4">
				<div class="card light">
					<button><h3>Shop</h3></button>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-4">
				<div class="card light">
					<button><h3>Shop</h3></button>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-4">
				<div class="card light">
					<button><h3>Shop</h3></button>
				</div>
			</div>
		</div>
		<button class="hollow-button round"><a href="shop_all.php"><h4>Shop All</h4></a></button>
	</div>

	<?php include "parts/footer.php" ?>

</body>

</html>