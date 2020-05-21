<?php

include_once "lib/php/functions.php";

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
					<p>The wonderland handmade ice cream store have different kinds of ice cream. We are looking forward you with the best ice cream! Welcome to consult us!</p>
			</div>

			<div class="form-control">
				<form class="hotdog light" id="product-search">
					<input type="search" class="search" placeholder="Search Products">
				</form>
			</div>
		 <div class="form-control display-flex">
			<div class="flex-none">
				<button type="button" class="form-button js-filter" data-column="category" data-value="">All</button>
			</div>
			<div class="flex-none">
				<button type="button" class="form-button js-filter" data-column="category" data-value="Ice cream cup">Ice Cream Cup</button>
			</div>
			<div class="flex-none">
				<button type="button" class="form-button js-filter" data-column="category" data-value="Birthday ice cream">Birthday ice cream</button>
			</div>
			<div class="flex-none">
				<button type="button" class="form-button js-filter" data-column="category" data-value="Ice cream set">Ice cream set</button>
			</div>
		</div>

		<div class="form-control display-flex">
			<div class="form-select">
				<select class="form-button js-filter">
					<option data-value="Ice cream cup">Newest</option>
					<option data-value="Ice cream collaction">Oldest</option>
					<option data-value="Birthdat Ice Cream Cakes">Most Expensive</option>
					<option data-value="Ice cream cup">Least Expensive</option>
				</select>
			</div>
		</div>
	</div>		
	<div class="grid gap productlist"></div>
</div>
<footer>
	<?php include "parts/footer.php" ?>
</footer>
	
</body>
</html>