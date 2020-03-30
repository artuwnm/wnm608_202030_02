<!DOCTYPE html>
<html>
	<head>
		<title>Products</title>
		<?php include "parts/meta.php" ?>
		
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
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam ea vitae molestias quam, necessitatibus doloremque pariatur fugit. Voluptates explicabo nulla rerum odit debitis placeat illum est, eligendi beatae ea laborum?</p>
	</div>

	<?php 

	/**
	 * 
	 */
	class Product
	{
		var $name;
		var $price;
		var $photo;

		function print_product($name, $price, $photo)
		{
			$this->name = $name;
			$this->price = $price;
			$this->photo = $photo;

			echo "<figure class='product-figure col-md-4'>";
			echo	"<a href='product_item.php?id={$this->photo}>";
			echo			"<img src='images/{$this->photo}.png>";			
			echo		"<figcaption>";
			echo			"<h5> ${$this->name} </h5>";
			echo			"<p>{$this->price}</p>";
			echo		"</figcaption>";
			echo	"</a>";
			echo "</figure>";
		}

	}
		$product = new Product;

	 ?>
	<div class="container">
		<div class="display-flex">
			<div class="card accordion-card" >
				<div class="accordion">
					<div class="display-flex accordion-header">
						<div class="accordion-section flex-stretch uppercase">Categories</div>
						<div class="flex-none accordion-icon">+</div>
					</div>
					<div class="nav nav-accordion">
						<ul>
							<li><a href="#">Pillow</a></li>
							<li><a href="#">Stickers</a></li>
							<li><a href="#">Phone Case</a></li>
						</ul>
					</div>
				</div>
				<div class="accordion">
					<div class="display-flex accordion-header">
						<div class="accordion-section flex-stretch uppercase">Colors</div>
						<div class="flex-none accordion-icon">+</div>
					</div>
					<div class="nav nav-accordion">
						<ul>
							<li><a href="#">Link#</a></li>
							<li><a href="#">Link#</a></li>
							<li><a href="#">Link#</a></li>
						</ul>
					</div>
				</div>
				<div class="accordion">
					<div class="display-flex accordion-header">
						<div class="accordion-section flex-stretch uppercase">Price</div>
						<div class="flex-none accordion-icon">+</div>
					</div>
					<div class="nav nav-accordion">
						<div class="number-slider-value">
							<h5>Price</h5>
							<input type="range" name="range" value="0" min="0" max="50" step="1" class="number-slider-bar">
						</div>
		
					</div>
				</div>
			</div>

			
			<div class="card transparent">
				<div class="grid gap">
					<figure class="product-figure col-md-4">
						<a href="product_item.php?id=iconic_meow_phone_case">
						<img src="images/iconic_meow_phone_case.png" alt="">
									
						<figcaption>
							<h5>Iconic Meow Phone Case</h5>
							<p>price</p>
						</figcaption>
						</a>
					</figure>
					
					<figure class="product-figure col-md-4">
						<a href="product_item.php?id=meowie_logo_phone_case">
						<img src="images/meowie_logo_phone_case.png" alt="">
									
						<figcaption>
							<h5>Meowie Logo Phone Case</h5>
							<p>$30</p>
						</figcaption>
						</a>
					</figure>
					<figure class="product-figure col-md-4">
						<a href="product_item.php?id=multi-meow_phone_case">
						<img src="images/multi-meow_phone_case.png" alt="">
									
						<figcaption>
							<h5>Multi-meow Phone Case</h5>
							<p>price</p>
						</figcaption>
						</a>
					</figure>
					<figure class="product-figure col-md-4">
						<a href="product_item.php?id=iconic_meow_stickers">
						<img src="images/iconic_meow_stickers.png" alt="">
									
						<figcaption>
							<h5>Iconic Meow Stickers</h5>
							<p>price</p>
						</figcaption>
						</a>
					</figure>
					<figure class="product-figure col-md-4">
						<a href="product_item.php?id=iconic_meow_pillow">
						<img src="images/iconic_meow_pillow.png" alt="">
									
						<figcaption>
							<h5>Iconic Meow Pillow</h5>
							<p>$30</p>
						</figcaption>
						</a>
					</figure>
					<figure class="product-figure col-md-4">
						<a href="product_item.php?id=multi-meow_pillow">
						<img src="images/multi-meow_pillow.png" alt="">
									
						<figcaption>
							<h5>Multi-meow Pillow</h5>
							<p>price</p>
						</figcaption>
						</a>
					</figure>
					<figure class="product-figure col-md-4">
						<a href="product_item.php?id=meow_warning_phone_case">
						<img src="images/meow_warning_phone_case.png" alt="">
									
						<figcaption>
							<h5>Meow Warning Phone Case</h5>
							<p>price</p>
						</figcaption>
						</a>
					</figure>
					<figure class="product-figure col-md-4">
						<a href="product_item.php?id=meowie_logo_stickers">
						<img src="images/meowie_logo_stickers.png" alt="">
									
						<figcaption>
							<h5>Meowie Logo Stickers</h5>
							<p>$30</p>
						</figcaption>
						</a>
					</figure>
					<figure class="product-figure col-md-4">
						<a href="product_item.php?id=meowie_logo_pillow">
						<img src="images/meowie_logo_pillow.png" alt="">
									
						<figcaption>
							<h5>Meowie Logo Pillow</h5>
							<p>price</p>
						</figcaption>
						</a>
					</figure>
					<figure class="product-figure col-md-4">
						<a href="product_item.php?id=meow_paws_pillow">
						<img src="images/meow_paws_pillow.png" alt="">
									
						<figcaption>
							<h5>Meow Paws Pillow</h5>
							<p>price</p>
						</figcaption>
						</a>
					</figure>
					<figure class="product-figure col-md-4">
						<a href="product_item.php?id=meow_paws_phone_case">
						<img src="images/meow_paws_phone_case.png" alt="">
									
						<figcaption>
							<h5>Meow Paws Phone Case</h5>
							<p>$30</p>
						</figcaption>
						</a>
					</figure>
					<figure class="product-figure col-md-4">
						<a href="product_item.php?id=meow_paws_stickers">
						<img src="images/meow_paws_stickers.png" alt="">
									
						<figcaption>
							<h5>Meow Paws Stickers</h5>
							<p>price</p>
						</figcaption>
						</a>
					</figure>
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