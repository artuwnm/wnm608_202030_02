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
				<div class="product-figure card light">
					<a href="item_details.php?id=3">
						<button><h3>Shop</h3></button>
					</a>
					<img src="images/sundaze_dress_thumbnail.jpg" alt="Sundaze Dress">
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-4">
				<div class="product-figure card light">
					<a href="item_details.php?id=6">
						<button><h3>Shop</h3></button>
					</a>
					<img src="images/bliss_dress_thumbnail.jpg" alt="Bliss Dress">
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-4">
				<div class="product-figure card light">
					<a href="item_details.php?id=4">
						<button><h3>Shop</h3></button>
					</a>
					<img src="images/beachy_top_thumbnail.jpg" alt="Beachy Top">
				</div>
			</div>
		</div>
		<h2>Men</h2>
		<div class="grid gap">
			<div class="col-xs-12 col-md-6 col-lg-4">
				<div class="product-figure card light">
					<a href="item_details.php?id=12">
						<button><h3>Shop</h3></button>
					</a>
					<img src="images/desert_shirt_thumbnail.jpg" alt="Desert Shirt">
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-4">
				<div class="product-figure card light">
					<a href="item_details.php?id=10">
						<button><h3>Shop</h3></button>
					</a>
					<img src="images/heavens_above_shirt_thumbnail.jpg" alt="Heavens Above Shirt">
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-4">
				<div class="product-figure card light">
					<a href="item_details.php?id=11">
						<button><h3>Shop</h3></button>
					</a>
					<img src="images/boho_shirt_thumbnail.jpg" alt="Boho Shirt">
				</div>
			</div>
		</div>
		<button class="hollow-button round"><a href="shop_all.php"><h4>Shop All</h4></a></button>
	</div>

	<?php include "parts/footer.php" ?>

</body>

</html>