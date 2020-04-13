<?php

// include require include_once require_once
require_once "db_connect.php";
include "lib/php/print_o.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product Item</title>

	<?php include "parts/head.php" ?>
</head>
<body>
	
	<?php include "parts/Header_white.php" ?>

	<div class="container">
		<?php

		$query_string = "
			SELECT * FROM products
			WHERE id = '{$_GET['id']}'
		";

		$result = $conn->query($query_string);

		if($conn->errno) die($conn->error);

		if(!$result->num_rows) {
			echo "<div class='container'><div class='card'>No results</div></div>";
		}

		while($row = $result->fetch_object()) {

			$eximages = explode(",", $row->image);

			// print_o($row);
			// print_o($eximages);

			// LOOPED TEMPLATE
			?>
 
			<div class="grid">
	<div class="row gutters paddingtop">
		<div class="col-sm-12 col-md-6">
				<img src="<?= $row->image ?>" alt="" class="media-image">
		</div>

		<div class="col-sm-1">
		</div>

		<div class="col-sm-12 col-md-5">
					<h1><?= $row->name ?></h1>
					<p>Dimensions <h2><?= $row->dimensions ?></h2></p>
					<p>Approximate Burn Time <h2><?= $row->burn_time ?></h2></p>
					<p>Quantity:</p>
					<div class="select-parent">
					<select id="cart-amount" class="form-select" style="color:var(--color-light);  background-color: var(--color-middle);">
					<option>0</option>
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
					</select>
					</div>
					<div class="flex-parent linecenter"><h1 class="flex-child">$<?= $row->price ?></h1>
						<div class="button_product_item js-addtocart flex-child addtocarttext linecenter" data-id="<?= $row->id ?>"><a href="#" style="padding: 1em 3em">Add To Cart</a></div>
					</div>


		</div>
	</div>
	</div>

	<!-- Content -->
	

	<div class="paddingtop paddingbottom">
		<div class="grid">
		<div class="row gutters">
			<div class="col-sm-12 col-md-6">
				
				<h2>Description</h2><?= $row->description ?>
				</div>
			<div class="col-sm-1">
			</div>
			<div class="col-sm-12 col-md-5">
				<h2>Highlights</h2>
					<div class="lgnone">
					<li>- Approximate Burn Time: <?= $row->burn_time ?></li>
					<li>- Dimensions: <?= $row->dimensions ?></li>
					</div>
					
					<li>- Other: <?= $row->other_highlights ?></li>
				</div>
		</div>
		</div>
	</div>

	<?php
	}

	?>

</div>


<?php include "parts/footer.php"?>

</body>
</html>