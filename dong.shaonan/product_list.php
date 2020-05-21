<?php

include_once "lib/php/functions.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Store: Product List</title>

	<?php include "parts/meta.php" ?>
	
    <script src="lib/js/functions.js"></script>

    <script src="js/list.js"></script>
     <script src="js/templates.js"></script>
    
	
<link href="https://fonts.googleapis.com/css?family=Montserrat|Poppins|Roboto&display=swap" rel="stylesheet">
</head>

<main>
  <div class="logo">
     <a href="index.php" style="height: 80px;">
        <img src="images/logo.png" style="height: 70px">
      </a>
  </div>
    <ul class="museum" role="navigation">
  	<li><a href="index.php">Home</a></li>
    <li class="active"><a href="product_list.php">Store</a></li>
    <li><a href="about.php">About</a></li>
    <li><a href="product_cart.php">Cart</a></li>
    <li><a href="admin/index.php">Admin</a></li>
  </ul>

</main>

<div class="container">
		<div class="card soft">
			<div class="product_list_title">
				<h2>Film Roll</h2>
			</div>

			<div class="form-control">
				<form class="hotdog light" id="product-search">
					<input type="search" class="search" placeholder="Search Products">
				</form>
			</div>

			<div class="form-control display-flex">
			<div class="flex-none">
				<button type="button" class="form-button js-filter" data-column="category" data-value="">All</button>
			</div>
			<div class="flex-none">
				<button type="button" class="form-button js-filter" data-column="category" data-value="35mm">35mm</button>
			</div>
			<div class="flex-none">
				<button type="button" class="form-button js-filter" data-column="category" data-value="Color">Color</button>
			</div>
			<div class="flex-none">
				<button type="button" class="form-button js-filter" data-column="brand" data-value="Kodak">Kodak</button>
			</div>
			<div class="flex-none">
				<button type="button" class="form-button js-filter" data-column="brand" data-value="Ilford">Ilford</button>
			</div>
			<div class="flex-none">
				<button type="button" class="form-button js-filter" data-column="mode" data-value="black&white">black&white</button>
			</div>

		</div>

			
			
			<div class="grid gap productlist">
			  
	</div>
	
 
</div>
</div>

<?php include "parts/footer.php" ?>
</body>
</html>