<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

?>

<!DOCTYPE html>
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

<div class="main_title">
<h2>Product List</h2>
</div>
<hr width="50%">
<br>


	<div class="container">

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
				<button type="button" class="form-button js-filter" data-column="category" data-value="PS4 Games">PS4 Games</button>
			</div>
			<div class="flex-none">
				<button type="button" class="form-button js-filter" data-column="category" data-value="Nintendo Switch Games">Nintendo Switch Games</button>
			</div>
			<div class="flex-none">
				<button type="button" class="form-button js-filter" data-column="category" data-value="Games Accessories">Games Accessories</button>
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
   </div>


   <div class="container"> 
		<div class="grid gap productlist"></div>
   </div>


      <hr width="50%">
<br>

  <br>



<footer class="footer-category">
  <div class="container display-flex">
    <div class="flex-none">
      <ul class="down-category">
        <li><h3>Categories</h3></li>
        <li><a href="product_list.php">Playstations</a></li>
        <li><a href="product_list.php">Nintendo Switch</a></li>
        <li><a href="product_list.php">Game Accessories</a></li>
      </ul>
    </div>
    <div class="product_list.php"></div>
    <div class="product_list.php">
      <ul class="product_list.php">
        <li><h3>Contact Us</h3></li>
        <li><p>Many good deals are waiting for you!</p></li>
      </ul>
    </div>
  </div>
    <div class="footer_title">
      <h3>©2020 Cyrus Choi All Rights Reserved</h3>

  </div>
</footer>
	
</body>
</html>