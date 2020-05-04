<?php

include_once "lib/php/function.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Store: Product List</title>

	<?php include "parts/meta.php" ?>

	<script src="lib/js/functions.js"></script>
	<script src="js/templates.js"></script>
	<script src="js/list.js"></script>


</head>
<?php include "parts/navbar.php" ?>
	
	<div class="homebgimage">

	<div class="advertisement">
	<h1>HAVE AN EXCLAMATION POINT FOR YOU</h1>
	<h4>Enjoy every moment in your life</h4>
	</div>
	</div>
<body>
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
				<button type="button" class="form-button js-filter" data-column="category" data-value="Earrings">Earrings</button>
			</div>
			<div class="flex-none">
				<button type="button" class="form-button js-filter" data-column="category" data-value="Necklace">Necklace</button>
			</div>
		</div>
		<div class="form-control">
			<!-- .form-select>select>option -->
			<div class="form-select">
				<select class="js-sort">
					<option value="1">Newest</option>
					<option value="2">Oldest</option>
					<option value="3">Most Expensive</option>
					<option value="4">Least Expensive</option>
				</select>
			</div>
		</div>

	<div class="container">
	


		<div class="grid gap productlist"></div>
	</div>
	
</body>
<?php include "parts/footer.php" ?>
</html>