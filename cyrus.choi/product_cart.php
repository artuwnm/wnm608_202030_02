<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";


$result = getCartItems();

// print_p($result);

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Store: Cart</title>

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
			<div class="col-xs-12 col-md-8">
				<div class="card flat">
				<?php
				echo array_reduce($result,'cartListTemplate');
				?>
				</div>
			</div>
			<div class="col-xs-12 col-md-4">
				<div class="card flat">
					<?= cartTotals(); ?>
					<div class="card-section">
						<a href="product_checkout.php">
						<button type="button" class="form-button">Checkout</a>
						</button>
					</div>
				</div>
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