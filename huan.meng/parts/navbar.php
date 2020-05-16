
<?php include_once "parts/templates.php" ?>
<!-- <header class="navbar">
	<div class="container display-flex">
		<div class="flex-stretch">
			<h1>Store</h1>
		</div>
		<nav class="nav flex-none">
			<ul class="display-flex">
				<li><a href="index.php">Home</a></li>
				<li><a href="product_list.php">Store</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="product_cart.php">Cart</a></li>
			</ul>
		</nav>
	</div>
</header> -->

	<header>
		<div class="container flex-parent-row flex-center-row flex-wrap" id="top-nav">
			<div class="flex-child">
				<img src="img/logo.jpg" style="width: 120px; height: 120px">
				<a href="#" class="icon" onclick="navIconClick()">
					<i class="fa fa-bars"></i>
				</a>
			</div>

			<nav class="nav nav-pills flex-parent-row flex-center-row" id="nav-bar">
				<a href="home.php">Home</a>
				<a href="product_list.php">Shop</a>
				<a href="#">Gift Card</a>
				<a href="#">Contact</a>
				<a href="#">Our Story</a>
				<a href="#" style="border: hidden"><img src="img/personal.png" style="width: 40px; height: 40px;"></a>
				<a href="product_cart.php" style="border: hidden"><img id="cart" src="img/cart.png"></a>
			</nav>
		</div>
	</header>