<!DOCTYPE html>
<html lang="en">
<head>
	<title>Store: Checkout</title>

	<?php include "parts/meta.php" ?>
<script src="js/products.js"></script>
	<script src="lib/js/functions.js"></script>
	<script src="js/templates.js"></script>
	<script src="js/list.js"></script>
<link href="https://fonts.googleapis.com/css?family=Montserrat|Poppins|Roboto&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="lib/css/gridsystem.css">
<link rel="stylesheet" type="text/css" href="lib/css/styleguide.css">
<link rel="stylesheet" type="text/css" href="lib/css/style.css">
<link rel="stylesheet" type="text/css" href="lib/css/style.css">
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
	<script src="js/index.js"></script>


	<div class="container">
		<nav class="nav-crumbs" style="margin:1em 0">
			<ul>
				<li><a href="product_list.php">Back</a></li>
			</ul>
		</nav>
		<div class="card soft">

			<h2>Checkout Information</h2>

			<div>Form Data</div>

			<div>
				<a href="product_confirmation.php" class="form-button">Complete Payment</a>
			</div>
		
		</div>
	</div>
<?php include "parts/footer.php" ?>	
</body>
</html>