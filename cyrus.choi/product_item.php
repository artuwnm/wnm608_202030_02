<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

$result = getRows(
	makeConn(),
	"SELECT *
	FROM `products`
	WHERE `id` = '{$_GET['id']}'
	"
);
$o = $result[0];

$thumbs = explode(",", $o->images);

// print_p($_SESSION);
?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Store: Product Item</title>

	<?php include "parts/meta.php" ?>

</head>
<body>

	<?php include "parts/navbar.php" ?>

	<div class="container">
		<nav class="nav-crumbs" style="margin:1em 0">
			<ul>
				<li><a href="product_list.php">Back</a></li>
			</ul>
		</nav>

		<div class="grid gap">
			<div class="col-xs-12 col-md-7">
				<div class="card soft">
					<div class="product-main">
						<img src="<?= $o->thumbnail ?>" alt="">
					</div>
					<div class="product-thumbs">
					<?php

					echo array_reduce($thumbs,function($r,$o){
						return $r."<img src='$o'>";
					})

					?>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-5">
				<form class="card soft flat" method="get" action="data/form_actions.php">					
					<div class="card-section">
						<h2><?= $o->name ?></h2>
						<h4><?= $o->condition ?></h4>
						<div class="product-description">
							<div class="product-price">&dollar;<?= $o->price ?></div>
						</div>
					</div>

					<div class="card-section">
						<label class="form-label">Amount</label>
						<select name="amount" class="form-button">
							<!-- option*10>{$} -->
							<option>1</option>
							<option>2</option>
							<option>3</option>

						</select>
					</div>

					<div class="card-section">
						<input type="hidden" name="action" value="add-to-cart">
						<input type="hidden" name="id" value="<?= $o->id ?>">
						<input type="hidden" name="price" value="<?= $o->price ?>">
						<input type="submit" class="form-button" value="Add To Cart">
					</div>
				</form>
			</div>
		</div>

		<div class="card soft description">
			<h3>Description</h3>
			<div class="product-description">
				<h5><?= $o->description ?></h5>
			</div>
		</div>
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