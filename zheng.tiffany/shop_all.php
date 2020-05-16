<?php 

include_once "lib/php/functions.php";


 ?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Shop - Stylista</title>

	<?php include "parts/meta.php" ?>

	<script src="lib/js/functions.js"></script>
	<script src="js/templates.js"></script>
	<script src="js/list.js"></script>

</head>
<body>

	<?php include "parts/header.php" ?>

	<hr class="center container">

	<div class="container">

		<div class="products-header row container relative">
			<h1 class="center">Shop</h1>
			<div class="search">
				<form id="product-search">
					<input type="search" class="search" placeholder="Search Products">
				</form>
				<div class="search-icon hover">
					<img src="images/search.svg" width="20px" height="20px" alt="Search">
				</div>
			</div>
		</div>
		
		<div class="filters container display-flex">
			<ul>
				<li><strong>Filters</strong></li>
				<li class="dropdown category">Category<span class="chevron bottom"></span>
					<ul class="dropdown-content">
						<li class="js-filter" data-column="category" data-value="">All</li>
						<li class="js-filter" data-column="category" data-value="women">Women's</li>
						<li class="js-filter" data-column="category" data-value="men">Men's</li>
					</ul>
			  	</li>
			  	<li class="dropdown type">Type<span class="chevron bottom"></span>
					<ul class="dropdown-content">
						<li class="js-filter" data-column="type" data-value="">All</li>
						<li class="js-filter" data-column="type" data-value="top">Tops</li>
						<li class="js-filter" data-column="type" data-value="dress">Dresses</li>
					</ul>
			  	</li>
			  	<li class="dropdown color">Color<span class="chevron bottom"></span>
					<ul class="dropdown-content">
						<li class="js-filter" data-column="color" data-value="">All</li>
						<li class="js-filter" data-column="color" data-value="neutral">Neutrals</li>
						<li class="js-filter" data-column="color" data-value="cool">Cool Tones</li>
						<li class="js-filter" data-column="color" data-value="warm">Warm Tones</li>
					</ul>
			  	</li>
			</ul>
			<ul>
				<li><strong>Sort By</strong></li>
				<li class="sort-dropdown">
					<div class="form-select">
						<select class="js-sort">
							<option value="1">Newest</option>
							<option value="2">Price High to Low</option>
							<option value="3">Price Low to High</option>
						</select>
					</div>
				</li>
			</ul>
		</div>
		
		<div class="grid gap productlist"></div>
	</div>
	
	<?php include "parts/footer.php" ?>
	
</body>
</html>