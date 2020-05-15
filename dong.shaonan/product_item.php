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

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Store: Product Item</title>

	<?php include "parts/meta.php" ?>
	<script src="js/products.js"></script>
	<script src="lib/js/functions.js"></script>
	<script src="js/templates.js"></script>
	<script src="js/list.js"></script>
<link href="https://fonts.googleapis.com/css?family=Montserrat|Poppins|Roboto&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="lib/css/gridsystem.css">
<link rel="stylesheet" type="text/css" href="lib/css/styleguide.css">
<link rel="stylesheet" type="text/css" href="lib/css/style.css">
<link rel="stylesheet" type="text/css" href="css/storetheme.css">
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
    <li class="active"><a href="product_list.php">Store</a></li>
    <li><a href="about.php">About</a></li>
    <li><a href="product_cart.php">Cart</a></li>
  </ul>
	</main>
	<script src="js/index.js"></script>

	

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
						<img src="<?= $o->thumbnail ?>" alt="" >
					
					</div>
					<div class="product-thumbs">
					<?php

					echo array_reduce($thumbs,function($r,$o){
						return $r."<images src='$o'>";
					})

					?>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-5">
				<form class="card soft flat" method="get" action="data/form_actions.php">
					<div class="card-section">
						<h2><?= $o->name ?></h2>
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
							<option>4</option>
							<option>5</option>
							<option>6</option>
							<option>7</option>
							<option>8</option>
							<option>9</option>
							<option>10</option>
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

		<div class="card soft dark">
			<h3>Description</h3>
			<div class="product-description">
				<?= $o->description ?>
			</div>
		</div>
	</div>
	<?php include "parts/footer.php" ?>
	
</body>
</html>