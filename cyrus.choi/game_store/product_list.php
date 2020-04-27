<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

$result = getRows(
	makeConn(),
	"SELECT *
	FROM `products`
	ORDER BY `date_create` DESC
	LIMIT 12
	"
);

// print_p($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Store: Product List</title>

	<?php include "parts/meta.php" ?>

</head>

<body>

	<?php include "parts/navbar.php" ?>


	<div class="container">
		<div class="card soft">
			<h2>Playstations Games</h2>

			<!-- ul>li*10>a[href="#$"]>{Product $} -->
			<ul>
				<li><a href="product_item.php?id=1">Gang Beasts</a></li>
				<li><a href="product_item.php?id=2">Jump force</a></li>
				<li><a href="product_item.php?id=3">Dissidia Final Fantasy NT</a></li>
				<li><a href="product_item.php?id=4">Dynasty Warriors 8: Xtreme Legends</a></li>
				<li><a href="product_item.php?id=5">Monster Hunter: World</a></li>
				<li><a href="product_item.php?id=6">Pro Evolution Soccer 2018</a></li>
			</ul>
		</div>

				<div class="card soft">
			<h2>Nintendo Switch Games</h2>

			<!-- ul>li*10>a[href="#$"]>{Product $} -->
			<ul>
				<li><a href="product_item.php?id=7">Pokémon Shield</a></li>
				<li><a href="product_item.php?id=8">Super Smash Bros. Ultimate</a></li>
				<li><a href="product_item.php?id=9">Mario Kart 8 Deluxe</a></li>
				<li><a href="product_item.php?id=10">The Legend of Zelda: Breath of the Wild</a></li>
			</ul>
		</div>

		<div class="grid gap">
		<?php

		echo array_reduce($result,'productListTemplate');

		?>
		</div>
	</div>
	
	      <hr width="50%">
<br>

  <br>

  <div class="main_title">
      <h3>©2020 Cyrus Choi All Rights Reserved</h3>
  </div>
	
</body>
</html>