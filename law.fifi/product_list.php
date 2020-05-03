<?php

include_once "lib/php/function.php";


 ?><!DOCTYPE html>
<html>
<head>
	<title>Products</title>
	<?php include "parts/meta.php" ?>

	<script src="lib/js/functions.js"></script>
	<script src="js/templates.js"></script>
	<script src="js/list.js"></script>
</head> 
<body>

	<?php include "parts/navbar.php" ?>
	
	<div class="container">
		<div class="nav-breadcrumb2 uppercase margin-top-2">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="product_list.php">Products</a></li>
			</ul>
		</div>
	</div>


	<div class="container title">
		<h2 class=" text-align-center uppercase">Products</h2>
		<p>All our products are originally designed and made with passion. Get your Meowie products today!</p>

		<div class="form-control">
			<form class="hotdog" id="product-search">
				<div class="flex-none hotdog-icon"><img src="images/search-icon.svg" alt=""></div>
				
				<input type="search" placeholder="Search products..." class="search">
				
			</form>
		</div>
		
	
	</div>
	
	<div class="container">
		<div class="grid gap">
			<div class="col-md-3" >
									
					<div class="card flat filter-form form-control">
						<div class="uppercase filter-form-title">
							<h2>Filter by</h2>						
						</div>
						<div class="uppercase">
							<h3>Categories</h3>						
						</div>
						<form class="">
							<a class="form-link products_filter" data-column="category" data-value="" >All</a>
							<a class="form-link products_filter" data-column="category" data-value="pillow" >Pillow</a>
							<a class="form-link products_filter" data-column="category" data-value="stickers" >Stickers</a>
							<a class="form-link products_filter" data-column="category" data-value="phone case" >Phone Case</a>
							
						</form>

						<div class="uppercase">
							<h3>Colors</h3>
						</div>					
						<form>
							<a class="form-link products_filter" data-column="colors" data-value="">All</a>
							<a class="form-link products_filter" data-column="colors" data-value="yellow">Yellow</a>
							<a class="form-link products_filter" data-column="colors" data-value="white">White</a>
							<a class="form-link products_filter" data-column="colors" data-value="beige">Beige</a>
						</form>
					</div>
					<div class="card flat filter-form form-control">
						<div class="uppercase filter-form-title">
							<h2>Sort by</h2>						
						</div>
						<div class="uppercase">
							<h3>Price</h3>
						</div>
						<form>
							<a class="form-link products_sort" data-column="price" data-value="1">High to Low</a>
							<a class="form-link products_sort" data-column="price" data-value="2">Low to High</a>
						</form>
						<div class="uppercase">
							<h3>Date</h3>
						</div>
							<form>
								<a class="form-link products_sort" data-column="date_created" data-value="3">New to Old</a>
								<a class="form-link products_sort" data-column="date_created" data-value="4">Old to New</a>
							</form>
					</div>
					
				</div>

			
			<div class="card transparent col-md-9">
				<div class="grid gap productlist">
					
				</div>
			</div>
		</div>
			
	</div>


<footer>
		<?php include "parts/footer.php" ?>
	

</footer>

		<script type="text/javascript" src="styleguide/index.js"></script>
	</body>
</html>