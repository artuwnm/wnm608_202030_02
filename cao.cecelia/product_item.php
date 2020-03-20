<!DOCTYPE html>
<html lang="en">
<head>
	<title>Store: Product List</title>

	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width">

	<link rel="stylesheet" href="lib/css/styleguide.css">
	<link rel="stylesheet" href="lib/css/gridsystem.css">
	<link rel="stylesheet" href="css/storetheme.css">
</head>
<body>

	<?php include "parts/navbar.php" ?>

	<div class="container">
		<div class="card soft">
			<h2>Product Item</h2>

			<!-- ul>li*10>a[href="#$"]>{Product $} -->
			<div>
				This is Product <?=$_GET['id']?>
			</div>
		</div>
	</div>
	
</body>
</html>