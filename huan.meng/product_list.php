<?php

include_once "lib/php/functions.php";
include_once"parts/templates.php";

?><!DOCTYPE html>
<html lang="en">
<head>
		<title>Product List</title>

		<?php include "parts/meta.php" ?>

		<script src="lib/js/functions.js"></script>
		<script src="js/templates.js"></script>
		<script src="js/list.js"></script>
</head>
<body>

	<?php include "parts/navbar.php" ?>

	<div class="view-window" style="background-image: url(img/welcome_page2.png)">
	</div>

<div class="container">
		<div class="card soft">
			<div class="product_list_title">
				<h2>Product List</h2>
				The wonderland handmade ice cream store have different kinds of ice cream. We are looking forward you with the best ice cream! Welcome to consult us!<p>
			</div>

			<div class="form-control">
				<form class="hotdog light" id="product-search">
					<input type="search" class="search" placeholder="Search Products">
				</form>
			</div>

			<div class="form-control display-flex filter-bar">
				<div class="flex-none filter-item">
					<p class="filter-text">Sort by</p>
					<p class="filter-text num-sort-item"></p>
				</div>
				<div class="filter-item">
					<button type="button" class="filter-button form-button js-sort" data-value=1>Newest</button>
				</div>
				<div class="filter-item">
					<button type="button" class="filter-button form-button js-sort" data-value=2>Oldest</button>
				</div>
				<div class="filter-item">
					<button type="button" class="filter-button form-button js-sort" data-value=3>
					Most Expensive</button>
				</div>
				<div class="filter-item">
					<button type="button" class="filter-button form-button js-sort" data-value=4>Least Expensive</button>
				</div>
			</div>
			<a href="../huan.meng/admin/index.php">Product Admain</a>
			
			<div class="grid gap productlist"></div>
		</div>
	</div>
<footer>
	<?php include "parts/footer.php" ?>
</footer>
	
</body>
</html>