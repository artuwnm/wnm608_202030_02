<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

$result = getRows(
	makeConn(),
	"SELECT *
	FROM `products`
	ORDER BY `category` DESC
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
  
  <br>

  <div class="main_title">
      <h2>All</h2>
  </div>
<br>


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