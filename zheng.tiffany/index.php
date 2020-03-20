<!DOCTYPE html>
<html lang="en">
<head>
	<title>Landing Page</title>
	
	<?php include "parts/meta.php" ?>
	
</head>
<body>
	
	<?php include "parts/navbar.php" ?>

	<div class="hero">
		<div class="hero__image"></div>
		<div class="container">
			<div class="hero__content">
				<h1>Introducing our Spring Collection</h1>
				<p>Fun, fresh florals for your favorite season.</p>
				<button><h3>Shop Now</h3></button>
			</div>
		</div>
	</div>

	<div class="featured-items container">
		<h1>Featured Items</h1>
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
	</div>

	<footer class="site-footer">
		<div class="container display-flex">
			<ul class="footer__menu--help">
				<li><h3>Help</h3></li>
				<li><a href="#">Customer Inquiries</a></li>
				<li><a href="#">Shipping</a></li>
				<li><a href="#">Exchanges & Returns</a></li>
			</ul>
			<ul class="footer__menu--about">
				<li><h3>About</h3></li>
				<li><a href="#">Our Story</a></li>
				<li><a href="#">Careers</a></li>
				<li><a href="#">Press</a></li>
			</ul>
			<ul class="footer__menu--contact">
				<li><h3>Contact Us</h3></li>
				<li><p>Available to help Mon-Sat<br>9am - 5pm PT</p></li>
				<li><a href="#" style="text-decoration: underline;">Email us</a></li>
			</ul>
		</div>
		<p class="footer__copyright">&copy; Copyright 2020, Stylista</p>
	</footer>

</body>

</html>