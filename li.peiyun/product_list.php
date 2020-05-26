<?php

include_once "lib/php/functions.php";

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

		<div class="form-control col-6">
			<form class="hotdog light" id="product-search">
				<input type="search" class="search" placeholder="Search Products">
			</form>
		</div>
		<div class="form-control col-6">
			<!-- .form-select>select>option -->
			<div class="form-select">
				<select class="js-sort">
					<option value="4" class="btn-sort">Least Expensive</option>
					<option value="3" class="btn-sort">Most Expensive</option>
				</select>
			</div>
		</div>
		<div class="form-filter">
			<div class="flex-none">
				<button type="button" class="btn-filter js-filter" data-column="style" data-value="">All</button>
			</div>
			<div class="flex-none">
				<button type="button" class="btn-filter js-filter" data-column="style" data-value="Crossbody">Crossbody</button>
			</div>
			<div class="flex-none">
				<button type="button" class="btn-filter js-filter" data-column="style" data-value="Shoulderbag">Shoulderbag</button>
			</div>
			<div class="flex-none">
				<button type="button" class="btn-filter js-filter" data-column="style" data-value="Handbag">Handbag</button>
			</div>
		</div>
	
	

		<div class="grid gap productlist"></div>
</div>
	
</body>
</html>