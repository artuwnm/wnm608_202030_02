  <?php

	include_once "lib/php/functions.php";
	include_once "parts/templates.php";


	$result = getCartItems();
	$cart = getCart();
	?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
  	<title>FenFong: Product Cart</title>

  	<?php include "parts/meta.php" ?>

  </head>

  <body>

  	<?php include "parts/header.php" ?>

  	<div class="container">
  		<div class="nav-crumbs uppercase margin-top-2">
  			<ul>
  				<li><a href="index.php">Home</a></li>
  				<li><a href="product_cart.php">My Cart</a></li>

  			</ul>
  		</div>
  	</div>

  	<div class="container">
  		<div class="card  ">


  			<h2>Cart Page</h2>
  			<div class="grid gap">
  				<div class="col-xs-12 col-md-8">
  					<div class="card">
  						<?php
							echo array_reduce($result, 'cartListTemplate');
							?>
  					</div>
  				</div>
  				<div class="col-xs-12 col-md-4">
  					<?= cartTotals(); ?>
  					<form action="product_checkout.php">
  						<input type="submit" class="site-button" value="Checkout" />
  					</form>
  				</div>
  			</div>
  		</div>
  	</div>

  	<?php include "parts/footer.php" ?>

  </body>

  </html>