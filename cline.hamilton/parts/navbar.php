<?php include_once "parts/templates.php" ?>
<header class="navbar">
	<div class="container display-flex">
		<div class="flex-stretch">
			<h1>Store</h1>
		</div>
		<nav class="nav flex-none">
			<ul class="display-flex">
				<li><a href="index.php">Home</a></li>
				<li><a href="product_list.php">Store</a></li>
				<li><a href="about.php">About</a></li>
				<li>
					<form class="hotdog" action="product_list.php" method="get" id="navbar-search">
						<input type="search" name="s" placeholder="Search">
					</form>
				</li>
				<li><a href="product_cart.php">
					<span>Cart</span>
					<span class="badge"><?= makeCartBadge() ?></span>
				</a></li>
			</ul>
		</nav>
	</div>
</header>