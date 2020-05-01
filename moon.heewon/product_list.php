<?php

include_once "lib/php/functions.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Store: Product List</title>

	<meta charset="UTF-8">

	<!-- meta:vp -->
	<meta name="viewport" content="width=device-width">

	<base href="/aau/wnm608_02/moon.heewon/">

	<link rel="stylesheet" href="lib/css/gridsystem.css">
	<link rel="stylesheet" href="lib/css/styleguide.css">
	<link rel="stylesheet" href="css/storetheme.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">

	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</head>
<body>

<div class="container">

<header class="navbar">
	<div class="container display-flex">
		<div class="flex-stretch">
			<h1>Skillbank</h1>
		</div>
		<nav class="nav flex-none">
			<ul class="display-flex">
				<!-- li*3>a[href=#]>{Link $} -->
				<li><a href="index.php">Home</a></li>
				<li><a href="product_list.php">Store</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="product_cart.php">Cart</a></li>
			</ul>
		</nav>
	</div>
</header>

	<div class="form-control">
		<form class="hotdog light" id="product-search">
			<input type="search" class="search" placeholder="Search Products">
		</form>
	</div>

	<div class="container">
		<div class="grid gap">
			<div class="col-xs-6 col-md-4">
	<a href="product_item.php?id=86" class="display-block">
		<figure class="product-figure soft">
			<div class="product-image">
				<img src="img/yoga.jpg" alt="">
			</div>
			<figcaption class="product-description">
				<div class="product-price">&dollar;50</div>
				<div class="product-title">Yoga Lesson</div>
			</figcaption>
		</figure>
	</a>
</div><div class="col-xs-6 col-md-4">
	<a href="product_item.php?id=86" class="display-block">
		<figure class="product-figure soft">
			<div class="product-image">
				<img src="img/surfing.jpg" alt="">
			</div>
			<figcaption class="product-description">
				<div class="product-price">&dollar;100</div>
				<div class="product-title">Surfing Lesson</div>
			</figcaption>
		</figure>
	</a>
</div><div class="col-xs-6 col-md-4">
	<a href="product_item.php?id=86" class="display-block">
		<figure class="product-figure soft">
			<div class="product-image">
				<img src="img/flower.jpg" alt="">
			</div>
			<figcaption class="product-description">
				<div class="product-price">&dollar;40</div>
				<div class="product-title">Flower Arrangement</div>
			</figcaption>
		</figure>
	</a>
</div><div class="col-xs-6 col-md-4">
	<a href="product_item.php?id=86" class="display-block">
		<figure class="product-figure soft">
			<div class="product-image">
				<img src="img/korean.jpg" alt="">
			</div>
			<figcaption class="product-description">
				<div class="product-price">&dollar;50</div>
				<div class="product-title">Korean Lesson</div>
			</figcaption>
		</figure>
	</a>
</div><div class="col-xs-6 col-md-4">
	<a href="product_item.php?id=86" class="display-block">
		<figure class="product-figure soft">
			<div class="product-image">
				<img src="img/christmas.jpg" alt="">
			</div>
			<figcaption class="product-description">
				<div class="product-price">&dollar;100</div>
				<div class="product-title">Christmas Tree Decoration</div>
			</figcaption>
		</figure>
	</a>
</div><div class="col-xs-6 col-md-4">
	<a href="product_item.php?id=86" class="display-block">
		<figure class="product-figure soft">
			<div class="product-image">
				<img src="img/cook.jpg" alt="">
			</div>
			<figcaption class="product-description">
				<div class="product-price">&dollar;50</div>
				<div class="product-title">Korean Food Cooking Lesson</div>
			</figcaption>
		</figure>
	</a>
</div><div class="col-xs-6 col-md-4">
	<a href="product_item.php?id=86" class="display-block">
		<figure class="product-figure soft">
			<div class="product-image">
				<img src="img/photo.jpg" alt="">
			</div>
			<figcaption class="product-description">
				<div class="product-price">&dollar;200</div>
				<div class="product-title">Graduation Photo</div>
			</figcaption>
		</figure>
	</a>
</div><div class="col-xs-6 col-md-4">
	<a href="product_item.php?id=86" class="display-block">
		<figure class="product-figure soft">
			<div class="product-image">
				<img src="img/construction.jpg" alt="">
			</div>
			<figcaption class="product-description">
				<div class="product-price">&dollar;3.99</div>
				<div class="product-title">Easy Construction</div>
			</figcaption>
		</figure>
	</a>
</div><div class="col-xs-6 col-md-4">
	<a href="product_item.php?id=86" class="display-block">
		<figure class="product-figure soft">
			<div class="product-image">
				<img src="img/painting.jpg" alt="">
			</div>
			<figcaption class="product-description">
				<div class="product-price">&dollar;70</div>
				<div class="product-title">Painting Lesson</div>
			</figcaption>
		</figure>
	</a>
</div><div class="col-xs-6 col-md-4">
	<a href="product_item.php?id=86" class="display-block">
		<figure class="product-figure soft">
			<div class="product-image">
				<img src="img/yoga.jpg" alt="">
			</div>
			<figcaption class="product-description">
				<div class="product-price">&dollar;70</div>
				<div class="product-title">Yoga Lesson</div>
			</figcaption>
		</figure>
	</a>
</div><div class="col-xs-6 col-md-4">
	<a href="product_item.php?id=86" class="display-block">
		<figure class="product-figure soft">
			<div class="product-image">
				<img src="img/yoga.jpg" alt="">
			</div>
			<figcaption class="product-description">
				<div class="product-price">&dollar;3.99</div>
				<div class="product-title">Yoga Lesson</div>
			</figcaption>
		</figure>
	</a>
</div><div class="col-xs-6 col-md-4">
	<a href="product_item.php?id=86" class="display-block">
		<figure class="product-figure soft">
			<div class="product-image">
				<img src="img/yoga.jpg" alt="">
			</div>
			<figcaption class="product-description">
				<div class="product-price">&dollar;3.99</div>
				<div class="product-title">Yoga Lesson</div>
			</figcaption>
		</figure>
	</a>
</div>		</div>
</div>
</body>
</html>

