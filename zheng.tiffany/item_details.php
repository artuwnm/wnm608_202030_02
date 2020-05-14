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

$thumbs = explode(", ", $o->images);

// print_p($_SESSION);

 ?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Item Details - Stylista</title>

	<?php include "parts/meta.php" ?>

</head>
<body>
	
	<?php include "parts/header.php" ?>

	<hr class="center container">

	<div class="container">
		<nav class="nav-crumbs" style="margin:1em 0">
			<div class="back-link">
				<a href="shop_all.php"><span class="chevron left"></span> Back</a>
			</div>
		</nav>
		<div class="grid gap">
			<div class="col-xs-12 col-md-6">
				<div class="product-images display-flex">
					<div class="product-thumbs flex-none">
						<?php 

						echo array_reduce($thumbs,function($r,$o){
							return $r."<img src='$o'>";
						})

						?>
					</div>
					<div class="product-main">
						<img src="<?= $o->thumbnail ?>" alt="">
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6">
				<form method="get" action="data/form_actions.php">
				<div class="product-details">
					<h1><?= $o->name ?></h1>
					<h3 class="product-price">&dollar;<?= $o->price ?></h3>
					<p class="product-description"><?= $o->description ?></p>
					<label class="form-label">Size</label>
					<select name="amount" class="select-button">
						<option>XS</option>
						<option>S</option>
						<option>M</option>
						<option>L</option>
						<option>XL</option>
					</select>
					<label class="form-label">Quantity</label>
					<select name="amount" class="select-button">
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
					<div class="add-to-bag-button">
						<input type="hidden" name="action" value="add-to-cart">
						<input type="hidden" name="id" value="<?= $o->id ?>">
						<input type="hidden" name="price" value="<?= $o->price ?>">
						<input type="submit" class="form-button" value="Add To Bag">
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php include "parts/footer.php" ?>
	
</body>
</html>