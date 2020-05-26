<?php
include_once "lib/php/functions.php";
$_SESSION['cart'] = [];
?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Store: Purchase Confirmation</title>

	<?php include "parts/meta.php" ?>

</head>
<body>

	<?php include "parts/navbar.php" ?>

	<div class="container">
		<div class="card soft flex-align-center text-align-center">
			<br>
			<h2>Purchase Confirmation</h2>

			<div>Thank you for trust in my skills. I will do my best to fulfil your expextations. 💪</div>

			<div>
				<a href="product_list.php" class="form-button margin-top-5">Back to shopping</a>
			</div>
			<br>
		
		</div>
	</div>
	<footer>
	<?php include "parts/footer.php" ?>
	
	</footer>

	
</body>
</html>