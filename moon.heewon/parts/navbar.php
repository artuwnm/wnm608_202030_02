<?php include_once "parts/templates.php" ?>
<header class="navbar">
	<div class="container display-flex">
		<div class="flex-stretch">
		<a href="index.php"><img src="img/logo.png" alt="">
		</div>
		<nav class="nav flex-none">
			<ul class="display-flex">
				<!-- li*3>a[href=#]>{Link $} -->
				<li><a href="index.php">Home</a></li>
				<li><a href="product_list.php">Store</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="product_cart.php">
						<span>Cart</span>
						<span class="badge"><?=makeCartBadge() ?></span>
					</a></li>
			</ul>
		</nav>
	</div>
</header>