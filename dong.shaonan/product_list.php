
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
    <script src="js/products.js"></script>
	
	<script src="js/templates.js"></script>
	
<link href="https://fonts.googleapis.com/css?family=Montserrat|Poppins|Roboto&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="lib/css/gridsystem.css">
<link rel="stylesheet" type="text/css" href="lib/css/styleguide.css">
<link rel="stylesheet" type="text/css" href="lib/css/style.css">
<link rel="stylesheet" type="text/css" href="css/storetheme.css">
</head>




<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="js/products.js"></script>
<body>
<main>
  <div class="logo">
     <a href="index.php" style="height: 80px;">
        <img src="images/logo.png" style="height: 70px">
      </a>
  </div>
  <!-- <nav class="museum">Asian Art Museum</nav> -->
  <ul class="museum" role="navigation">
  	<li><a href="index.php">Home</a></li>
    <li class="active"><a href="product_list.php">Store</a></li>
    <li><a href="about.php">About</a></li>
    <li><a href="product_cart.php">Cart</a></li>
  </ul>
<!-- slideshow -->
</main><!-- 
<script src="js/index.js"></script> -->

	

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
				<button type="button" class="form-button js-filter" data-column="category" data-value="filmroll">filmroll</button>
			</div>
			<div class="flex-none">
				<button type="button" class="form-button js-filter" data-column="category" data-value="35mm">35mm</button>
			</div>
			<div class="flex-none">
				<button type="button" class="form-button js-filter" data-column="category" data-value="Color">Color</button>
			</div>
		</div>

			<!-- <div class="form-control display-flex filter-bar">
				<div class="flex-none filter-item">
					<p class="filter-text">Sort by</p>
					<p class="filter-text num-sort-item"></p>
				</div>
				<div class="filter-item">
					<button type="button" class="filter-button form-button js-sort" data-value="1">Newest</button>
				</div>
				<div class="filter-item">
					<button type="button" class="filter-button form-button js-sort" data-value="2">Oldest</button>
				</div>
			</div> -->
			
			<div class="grid gap productlist">
			  <div class="col-xs-6 col-md-4">
			  <a href="product_item.php?id=1" class="display-block">
			  <figure class="product-figure soft">
			  <div class="product-image">
			  <img src="images/PORTRA800.jpg" alt>
			  </div>
			  <figcaption class="product-description">
			  	<div class="product-price">$3.99</div>
			  	<div class="product-title">Kodak 800</div>

			  </figcaption>	
			</figure>
		</a>
	</div>
	       <!-- <div class="grid gap productlist"> -->
			  <div class="col-xs-6 col-md-4">
			  <a href="product_item.php?id=2" class="display-block">
			  <figure class="product-figure soft">
			  <div class="product-image">
			  <img src="images/ILFORD.jpg" alt>
			  </div>
			  <figcaption class="product-description">
			  	<div class="product-price">$3.99</div>
			  	<div class="product-title">ILFORD</div>

			  </figcaption>	
			</figure>
		</a>
	</div>
	      <!-- <div class="grid gap productlist"> -->
			  <div class="col-xs-6 col-md-4">
			  <a href="product_item.php?id=3" class="display-block">
			  <figure class="product-figure soft">
			  <div class="product-image">
			  <img src="images/GOLD200.jpg" alt>
			  </div>
			  <figcaption class="product-description">
			  	<div class="product-price">$3.98</div>
			  	<div class="product-title">Kodak Gold 200</div>

			  </figcaption>	
			</figure>
		</a>
	</div>
	<div class="col-lg-4 col-xs-12">
          <div class="card">
           <figure class="product-figure soft">  
            <a href="product_item.php?id=4" class="display-block">
             <img src="images/Rollei Retro 80S.jpg" alt>
           </a>
        <figcaption class="product-description">
          <div class="product-price">$7.99</div>
          <div class="product-title">Rollei Retro 80S</div>

        </figcaption> 
      </figure>
    </div>
    <div class="col-lg-4 col-xs-12">
          <div class="card">
           <figure class="product-figure soft">  
            <a href="product_item.php?id=5" class="display-block">
             <img src="images/Ilford Delta 100.jpg" alt>
           </a>
        <figcaption class="product-description">
          <div class="product-price">$5.99</div>
          <div class="product-title">Ilford Delta 100</div>

        </figcaption> 
      </figure>
    </div>
    <div class="col-lg-4 col-xs-12">
          <div class="card">
           <figure class="product-figure soft">  
            <a href="product_item.php?id=6" class="display-block">
             <img src="images/Ilford XP2.jpg" alt>
           </a>
        <figcaption class="product-description">
          <div class="product-price">$8.49</div>
          <div class="product-title">Ilford XP2</div>

        </figcaption> 
      </figure>
    </div>
  </div>
  </div>
</div>
</div>
</div>
</div>
</div>
</div>

<?php include "parts/footer.php" ?>
</body>
</html>





</html>