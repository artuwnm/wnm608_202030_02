<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";


$result = getCartItems();

// print_p($result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Store: Cart</title>

	<?php include "parts/meta.php" ?>

    <script src="js/products.js"></script>
	<script src="lib/js/functions.js"></script>
	<script src="js/templates.js"></script>
	<script src="js/list.js"></script>
<link href="https://fonts.googleapis.com/css?family=Montserrat|Poppins|Roboto&display=swap" rel="stylesheet">

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="js/products.js"></script>
<body>
<main>
  <div class="logo">
     <a href="index.php" style="height: 80px;">
        <img src="images/logo.png" style="height: 70px">
      </a>
  </div>
  <!-- <nav class="museum">Asian Art Museum</nav> -->
  <ul class="museum" role="navigation">
  	<li><a href="index.php">Home</a></li>
    <li><a href="product_list.php">Store</a></li>
    <li><a href="about.php">About</a></li>
    <li class="active"><a href="product_cart.php">Cart</a></li>
  </ul>
	</main>
<!-- <script src="js/index.js"></script> -->

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
						<a href="product_checkout.php" class="form-button">Checkout</a>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php include "parts/footer.php" ?>	
</body>
</html>