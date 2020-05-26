<?php

include_once "lib/php/function.php";
include_once "parts/templates.php";


$result = getCartItems();

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
	
	<div class="homebgimageshop">

	<div class="advertisement">
	<h2>HAVE AN EXCLAMATION POINT FOR YOU</h2>
	<h4>Enjoy every moment in your life</h4>
	</div>
	</div>
	<div class="form-control">
			<form class="animated-search-form" id="product-search">
				<input type="hidden" class="search" placeholder="Search Products">
			</form>
		</div> 
		
		<!-- <div class="form-control display-flex">
			<div class="flex-none">
				<button type="button" class="form-button js-filter" data-column="category" data-value="">All</button>
			</div>
			<div class="flex-none">
				<button type="button" class="form-button js-filter" data-column="category" data-value="Earrings">Earrings</button>
			</div>
			<div class="flex-none">
				<button type="button" class="form-button js-filter" data-column="category" data-value="Necklace">Necklace</button>
			</div>
		</div> -->
		
		
	<div class="container">
		<div class="selectbox display-flex flex-direction-rowreverce">
			<div class="dropdown-container">
    <select class="js-sort">
      <option value="">Filter By</option>
      <option value="1">Newest</option>
	  <option value="2">Oldest</option>
	  <option value="3">Most Expensive</option>
	  <option value="4">Least Expensive</option>
    </select>
    <div class="select-icon">
    	<svg  width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" class="icon">
    	<path d="M23.245 4l-11.245 14.374-11.219-14.374-.781.619 12 15.381 12-15.391-.755-.609z"/>
    	</svg>
     </div>
    </div>
  </div>

	


		<div class="grid gap productlist"></div>
	</div>
	
</body>
<?php include "parts/footer.php" ?>
</html>