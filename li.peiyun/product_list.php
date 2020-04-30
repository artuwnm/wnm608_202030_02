<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

$result = getRows(
	makeConn(),
	"SELECT *
	FROM `products`
	LIMIT 16
	"
);


// print_p($result);

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Store: Product List</title>

	<?php include "parts/meta.php" ?>

</head>
<body>

	<?php include "parts/navbar.php" ?>
	


	<div class="container">

		<div class="grid gap">
		<?php

		echo array_reduce($result,'productListTemplate');

		?>
		</div>
	</div>
	
</body>
</html>