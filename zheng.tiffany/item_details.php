<!DOCTYPE html>
<html lang="en">
<head>
	<title>Item Details - Stylista</title>

	<?php include "parts/meta.php" ?>

</head>
<body>
	
	<?php include "parts/header.php" ?>

	<hr class="center container">

	<div class="container">
		<h1>Item Name</h1>
		<div>
			This is Product <?= $_GET['id'] ?> 
		</div>
	</div>

	<?php include "parts/footer.php" ?>
	
</body>
</html>