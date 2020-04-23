

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product List</title>

	<?php include "parts/head.php" ?>

<script>

$(function(){
	getProductList('',showProductList);
})

</script>

</head>
<body>

	<?php include "parts/productlist_head.php" ?>

	<div class="paddingtop container paddingbottomsmall">
	<div class="grid">
			<form id="main-search">
				<div class="flex-parent">
					<div class="flex-child">
					<input type="search" class="form-search searchbar" id="main-search" placeholder="  Search..">
					</div>
					<div>
						<input type="submit"  class="searchbar searchbutton" value="Click" style="border: 1px;">
					</div>
				</div>
			</form>
	</div>
</div>


		<nav class="nav nav-tabs linecenter">
			<div class="container">
			<ul>
				<li class="js-filter active" data-filter="category" data-value=""><a href="#">All</a></li>
				<li class="js-filter" data-filter="category" data-value="Floral"><a href="#">Floral</a></li>
				<li class="js-filter" data-filter="category" data-value="Non-Floral"><a href="#">Non-Floral</a></li>
			</ul>
			</div>
		</nav>

		
<!-- Product-->

 		<div class="product-list"></div>
 		<hr class="container">
 		<div class="paddingtopmiddle"></div>
 		<div class="button_product_list paddingbottom linecenter">
		<a href="add_new_product.php" style="padding: 1.5em 5em">Add New Product</a>
		</div>

 		<?php include "parts/footer.php"?>
</body>
</html>