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

// print_p($result);

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Store: Product Item</title>

	<?php include "parts/meta.php" ?>


</head>
<body>

<?php include "parts/navbar.php" ?>
	

<div class="container">
	<nav class="nav-crumbs">
		<ul>
			<li><a href="product_list.php">Back</a></li>
		</ul>
	</nav>

	<div class="grid gap">
		<!-- small product images-->
		<div class="col-xs-3 col-lg-2">
			<div class="product-thumbs">
				<?php

				echo array_reduce($thumbs,function($r,$o){
					return $r."<img src='images/sm/$o'>";
					})

				?>
			</div>
		</div>
		<!-- large product image-->	
		<div class="col-xs-9 col-lg-6">			
			<div class="product-main">
				<img src="images/sm/<?= $o->thumbnail_b ?>" alt="">
			</div>						
		</div>
		<!-- text section-->
		<div class="col-xs-12 col-lg-4">
			<div class="product-about">
				<div class="product-name"><?= $o->product_name ?></div>
				<div class="product-description">
					Brand: <?= $o->brand ?><br>
					Style: <?= $o->style ?><br>
					Color: <?= $o->color ?><br>
					Material: <?= $o->material ?><br>
					Year Bought: <?= $o->year_bought ?><br>
					Box: <?= $o->box ?><br>
				</div>
				<div class="product-price">&dollar;<?= $o->price ?></div>

				<!-- interactive form-->
				<form class="form" method="get" action="data/form_actions.php">

					<!-- amount-->
					<label class="form-label">Amount:</label>
					<select name="amount" class="form-btn-sm">
						<option>1</option>	
					</select>
					
					<!-- add to cart button-->
						<input type="hidden" name="action" value="add-to-cart">
						<input type="hidden" name="id" value="<?= $o->id ?>">
						<input type="hidden" name="price" value="<?= $o->price ?>">
						<input type="submit" class="item-btn-color" value="Add To Cart">
					
				</form>
			</div>
		</div>
	</div>
</div>

</body>
</html>