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
		<div class="back-link">
			<a href="shop_all.php"><span class="chevron left"></span> Back</a>
		</div>
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
				<div class="product-details">
					<h1><?= $o->name ?></h1>
					<h3 class="product-price">&dollar;<?= $o->price ?></h3>
					<p class="product-description"><?= $o->description ?></p>
					<h2>Details</h2>
					<p class="small-p"><?= $o->material ?></p>

					<form method="get" action="data/form_actions.php">

						<div class="display-flex">
							<div class="row">
								<label class="form-label">Size</label>
								<select name="size" class="select-button">
									<option>XS</option>
									<option>S</option>
									<option>M</option>
									<option>L</option>
									<option>XL</option>
								</select>
							</div>
							<div class="row">
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
							</div>
						</div>

						<div class="add-to-bag-button">
							<input type="hidden" name="action" value="add-to-cart">
							<input type="hidden" name="id" value="<?= $o->id ?>">
							<input type="hidden" name="price" value="<?= $o->price ?>">
							<button type="submit" class="solid-button round full-width"><h4>Add to Bag</h4></button>
						</div>
					</form>
					
				</div>
			</div>
		</div>
	</div>

	<?php include "parts/footer.php" ?>
	
</body>
</html>