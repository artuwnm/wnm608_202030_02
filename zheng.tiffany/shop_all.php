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

 ?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Shop All - Stylista</title>

	<?php include "parts/meta.php" ?>

</head>
<body>

	<?php include "parts/header.php" ?>

	<div class="container">
		<h1 class="center">All Collections</h1>
		<div class="grid gap">
			<?php 

			echo array_reduce($result,'productListTemplate');

			?>
		</div>
	</div>
	
	<?php include "parts/footer.php" ?>
	
</body>
</html>