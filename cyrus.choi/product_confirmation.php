<?php
include_once "lib/php/functions.php";
include_once "parts/templates.php";

$result = getCartItems();
$_SESSION['cart'] = [];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Store: Purchase Confirmation</title>

	<?php include "parts/meta.php" ?>

</head>
<body>

	<?php include "parts/navbar.php" ?>

	<div class="container">
		<div class="card soft">

			<h2>Purchase Confirmation</h2>

			<div>Thank you for buying</div>
			<?php
				echo array_reduce($result,'cartListCompleteTemplate');
				?>
			<div>
						<a href="product_list.php">
						<button type="button" class="form-button">Back to shopping
						</button></a>				
			</div>
		
		</div>
	</div>
	
</body>
</html>