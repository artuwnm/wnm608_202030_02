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

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>FenFong: Product Item</title>

	<?php include "parts/meta.php" ?>

</head>

<body>

	<?php include "parts/header.php" ?>



	<div class="container">
		<div class="nav-crumbs uppercase margin-top-2">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="product_list.php">Products</a></li>
				<li><a href="product_item.php?id=10">Hand Soaps
					</a></li>
			</ul>
		</div>
	</div>
	<div class="container">

		<div class="card transparent">
			<div class="grid gap">
				<div class="col-md-6 image-picker">
					<div class="main-image">
						<img src="img/products/<?= $o->thumbnail ?>" alt="">
					</div>
					<div class="thumbstrip">
						<?php

						echo array_reduce($thumbs, function ($r, $o) {
							return $r . "<img src='img/products/$o'>";
						})

						?> </div>
				</div>

				<div class="col-md-6 color-dark position-relative">
					<form action="data/form_actions.php" method="get">
						<h2 class="">
							<?= $o->name ?>
						</h2>
						<h3>
							<?= $o->price ?>
						</h3>


						<div class="form-input">
							<label class="form-label">Color:</label>
							<select name="color" class="dropdown-selection display-block ">
								<option data-value="white">white</option>
								<option data-value="beige">beige</option>

							</select>
						</div>

						<div class="form-input">
							<label class="form-label">Quantity:</label>
							<select name="amount" class="dropdown-selection display-block">
								<option>1</option>
								<option>2</option>
								<option>3</option>

							</select>
						</div>


						<div class="form-input">
							<input type="hidden" name="action" value="add-to-cart">
							<input type="hidden" name="id" value="<?= $o->id ?>">
							<input type="hidden" name="price" value="<?= $o->price ?>">
							<input type="submit" class="btn dark site-button uppercase" value="Add To Cart">
						</div>

					</form>

					<div class="card light">
						<h3>Description</h3>
						<div class="product-description">
							<?= $o->description ?>
						</div>
					</div>
				</div>
			</div>
		</div>


	</div>

	<?php include "parts/footer.php" ?>

</body>

</html>