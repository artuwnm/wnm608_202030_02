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

$thumbs = explode(",", $o->images)

// print_p($result);

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
			<ul>
				<li><a href="shop_all.php">Back</a></li>
			</ul>
		</nav>
		<div class="grid gap">
			<div class="col-xs-12 col-md-7">
				<div class="card soft">
					<div class="product-main">
						<img src="images/<?= $o->thumbnail ?>" alt="">
					</div>
					<div class="product-thumbs">
						<?php 

						echo array_reduce($thumbs,function($r,$o){
							return $r."<img src='images/$o'>";
						})

						?>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-7">
				<h1><?= $o->name ?></h1>
				<div class="product-details">
					<div class="product-price">&dollar;<?= $o->price ?></div>
					<div class="product-description"><?= $o->description ?></div>
				</div>
				<div>
					<a href="product_added_to_cart.php" class="form-button">Add To Bag</a>
				</div>
			</div>
		</div>
	</div>

	<?php include "parts/footer.php" ?>
	
</body>
</html>