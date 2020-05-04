<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title><?php echo $title; ?></title>

	<meta name="viewport"
		content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="lib/css/styleguide.css">
	<link rel="stylesheet" href="lib/css/gridsystem.css">
	<link rel="stylesheet" href="css/storetheme.css">
</head>

<body>
	<?php
		echo "";
		?>
		
	<div class="top-nav container">
		<ul class="ctas display-flex">
			<li class="search">
				<a href="#" class="search-icon">
					<img src="img/search.png" width="40px" height="40px" alt="Search">
				</a>
			</li>
			<li>
				<a href="bag.php" class="bag-icon">
					<img src="img/bag.png" width="40px" height="40px" alt="Cart">
				</a>
			</li>
		</ul>
	</div>

	<header class="header">
		<div class="logo">
			<a href="index.php">
				<img src="img/logo.png" alt="fenfong logo">
			</a>
		</div>
		<nav class="container nav-stretch">
			<ul>
				<li>
					<a href="aboutus.html">about</a>
				</li>
				<li>
					<a href="#">buy</a>
				</li>
				<li>
					<a href="#">contact</a>
				</li>
			</ul>
		</nav>
	</header>

	<div class="hero-image">
		<div class="hero-text">
			<button class="site-button">SHOP NOW</button>
		</div>
	</div>
	<div class="featured-items container">
		<div class="grid gap">
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="product-figure card light">
					<img src="img/homepage_middle_01.png" alt="Soap 1">
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="product-figure card light">
					<img src="img/homepage_middle_02.png" alt="Soap 2">
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="product-figure card light">
					<img src="img/homepage_middle_03.png" alt="Soap 3">
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="product-figure card light">
					<img src="img/homepage_middle_04.png" alt="Soap 3">
				</div>
			</div>
		</div>
	</div>
	<!-- begin footer -->
	<footer class="footer">
		<div class="container display-flex space-between">
			<ul class="footer__menu--shop">
				<li>
					<h3>Shop</h3>
				</li>
				<li><a href="shop_all.php">All Collections</a></li>
				<li><a href="shop_women.php">Hand Soap</a></li>
				<li><a href="shop_men.php">Body Wash</a></li>
			</ul>
			<ul class="footer__menu--explore">
				<li>
					<h3>Explore</h3>
				</li>
				<li><a href="about.php">Our Story</a></li>
				<li><a href="faqs.php">Frequently Asked Questions</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
			<ul class="footer__menu--form">
				<li>
					<h3>Stay Connected</h3>
				</li>
				<li>
					<p>Join our newsletter to hear about new items, offers and more!</p>
				</li>
				<li>
					<input type="text" class="form-input" placeholder="Sign up for email alerts">
					<input type="submit" class="form-button" value="Join">
				</li>
			</ul>
		</div>
		<p class="footer-copyright center">© Copyright 2020, Fenfong</p>
	</footer>
</body>

</html>