<?php

include_once "lib/php/functions.php";

$p = cartItemByID($_GET['id']);

$o = getRows(makeConn(),"SELECT * FROM `products` WHERE `id`={$_GET['id']}")[0];

// print_p([getCart(),$p,$o]);

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Store: Product Added To Cart</title>

	<?php include "parts/meta.php" ?>

<script src="js/products.js"></script>
	<script src="lib/js/functions.js"></script>
	<script src="js/templates.js"></script>
	<script src="js/list.js"></script>
<link href="https://fonts.googleapis.com/css?family=Montserrat|Poppins|Roboto&display=swap" rel="stylesheet">

</head>
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
		<div class="card soft flat">
			<div class="card-section">
				<h2>Cart Confirmation</h2>
				
				<div>
					Thank you for adding <?= $p->amount ?> of the <?= $o->name ?> to the cart.
				</div>
			</div>

			<div class="card-section">
				<div class="display-flex">
					<div class="flex-none">
						<a href="product_list.php" class="form-button">Back to Shopping</a>
					</div>
					<div class="flex-stretch"></div>
					<div class="flex-none">
						<a href="product_cart.php" class="form-button">Check Cart</a>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php include "parts/footer.php" ?>
</body>
</html>