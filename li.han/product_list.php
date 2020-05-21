<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

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


	<div class="container">
		<h2>Product List</h2>
		<div><a href="admin" style="color: #074476; text-align: center;">Product Admin</a></div>

		</div>
		<!-- <div class="form-control display-flex"> -->
			<div class="flex-none">
				<button type="button" class="form-button js-filter" data-column="category" data-value="">All</button>
			</div>
			<div class="flex-none">
				<button type="button" class="form-button js-filter" data-column="category" data-value="sun Care">Sun Care</button>
			</div>
			<div class="flex-none">
				<button type="button" class="form-button js-filter" data-column="category" data-value="moisturizers">Moisturizers</button>
				<button type="button" class="form-button js-filter" data-column="category" data-value="cleansers">Cleansers</button>
			</div>
		<!-- </div> -->
		<div class="form-control display-flex ">
			<!-- .form-select>select>option -->
			<form class="hotdog light" id="product-search">
				<input type="search" class="search" placeholder="Search Products">
			</form>
			<div class="form-select">
				<select class="js-sort">
					<option value="1">Newest</option>
					<option value="2">Oldest</option>
					<option value="3">Most Expensive</option>
					<option value="4">Least Expensive</option>
				</select>
			</div>
			
			<!-- .form-select>select>option -->
		</div>

		<div class="grid gap productlist"></div>
	</div>
		
</body>
<footer>
		<?php include "parts/footer.php" ?>
	</footer>
</html>