<?php

// include require include_once require_once
require_once "db_connect.php";
include "lib/php/print_o.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product Cart</title>

	<?php include "parts/head.php" ?>

<script>

$(function(){
	getCartList()
})

</script>
</head>
<body>

<div class="container">	
	<?php include "parts/Header_white.php"?>


	 	
	<!-- Product-->

	<div class="container paddingbottom paddingtop">
			<h2>Cart</h2>
			<hr>
			<div class="cart-list"></div>
	</div>
</div>

<?php include "parts/footer.php"?>



</body>
</html>