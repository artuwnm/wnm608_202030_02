<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

$result = getRows(
	makeConn(),
	"SELECT *
	FROM `products`
	ORDER BY `price`
	"
);

// print_p($result);

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Store: Product List</title>

	<?php include "parts/meta.php" ?>

	<script src="lib/js/functions.js"></script>
	<script src="js/templates.js"></script>
	<script src="js/list.js"></script>

</head>
<body>

	<?php include "parts/navbar.php" ?>

	<!-- .form-select>select>option -->
	<div class="container">
		<h3 class="text-align-center">Check Out My Skills :)</h3>
		<div class="grid grid.gap">
			<div class="col-sm-12 col-md-8 cold-lg-9 info">
				<form class="search_bar" id="product-search">
				<input type="search" class="search" placeholder="Search Skills by Keyword" style="font-size:17px;">
				</form>
			</div>
			<div class="col-sm-12 cold-md-4 col-lg-3">
				<span style="color: #DD6243; margin-left: 0.6em;">Sort by:</span>
				<div class="form-select" style="padding: 0.4em 0.6em;">
				<select class="js-sort">
				<option value="1">Newest</option>
				<option value="2">Oldest</option>
				<option value="3">Most Expensive</option>
				<option value="4">Least Expensive</option>
			</select>
		</div>
		</div>
	</div>




		<div class="form-control">
	
		<div class="form-control display-flex ">
			<div class="flex-none">
				<button type="button" class="form-button js-filter" data-column="category" data-value="">All</button>
			</div>
			<div class="flex-none">
				<button type="button" class="form-button js-filter" data-column="category" data-value="craft">Craft</button>
			</div>
			<div class="flex-none">
				<button type="button" class="form-button js-filter" data-column="category" data-value="lesson">Lesson</button>
			</div>
			<div class="flex-none">
				<button type="button" class="form-button js-filter" data-column="category" data-value="architecture">Architecture</button>
			</div>
		</div>
		<div class="form-control">
		</div>

		<div class="grid gap productlist"></div>


	</div>
</div>
	<footer>
	<?php include "parts/footer.php" ?>
	
	</footer>

	
</body>
</html>