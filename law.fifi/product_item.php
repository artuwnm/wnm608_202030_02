<!DOCTYPE html>
<html>
	<head>
		<?php include "parts/meta.php" ?>
		<?php 
				$productName = $_GET['id'];
				$productName = str_replace("_", " ", $productName);
			 ?>
		<title><?php echo ucwords($productName); ?></title>
	</head>
	<body>
	
		<?php include "parts/navbar.php" ?>

			
		<div class="container">
			<div class="nav-breadcrumb2 uppercase margin-top-2">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="product_list.php">Products</a></li>
					<li><a href="#"><?php echo $productName; ?></a></li>
				</ul>
			</div>
		</div>
	
		<div class="container">
			
			<div class="card transparent">
				<div class="grid gap">
					<div class="col-md-6 image-picker">
						

						
							<div class="main-image">
								<?php 
									$productImage = "<img src = 'images/".$_GET['id'].".png'>";
									echo $productImage;
								 ?>
								
							</div>
							<div class="thumbstrip ">
								<?php echo $productImage; ?>
								<?php echo "<img src = 'images/".$_GET['id']."_2.png'>" ?>
								<?php echo "<img src = 'images/".$_GET['id']."_3.png'>" ?>
								<?php echo "<img src = 'images/".$_GET['id']."_4.png'>" ?>

							</div>
						
						 	
					</div>

					 <div class="col-md-6 color-dark position-relative" >
					 	<h2 class="">
							<?php 

								echo ucwords($productName);
							 ?>
						</h2>
						<h3 class="margin-bottom-2">
							$30
						</h3>
						
						<h5>Choose your phone:</h5>
						<select name="dropdown-selection" id="dropdown-selection" class="dropdown-selection display-block margin-bottom-5">
							<option  class="options"  value="option1">iPhone 11</option>
							<option  class="options" value="option2">iPhone 11 Pro</option>
							<option  class="options" value="option3">iPhone 11 Pro Max</option>
							<option  class="options" value="option4">iPhone X</option>
						</select>
						<a href="#" class="btn dark uppercase">Add to Cart</a>
					 </div>
				</div>
			</div>
		</div>
		<hr>
		<div class="container">
			
				<h2 class="uppercase color-dark">You may also like:</h2>
			
		

				<?php 
					$allProducts = array("iconic_meow_phone_case", "meowie_logo_phone_case", "multi-meow_phone_case", "iconic_meow_stickers", "iconic_meow_pillow", "multi-meow_pillow", "meow_warning_phone_case", "meowie_logo_stickers", "meowie_logo_pillow", "meow_paws_pillow", "meow_paws_phone_case", "meow_paws_stickers");

					$randomProduct = array_rand($allProducts, 4);

					// $searchProduct = array_search("$productName", $randomProduct);
					// if ($searchProduct !== FALSE){
					// 	unset($randomProduct[$searchProduct]);
					// 	var_dump($randomProduct);
					// };


					$allProductsName = str_replace("_", " ", $allProducts);

				 ?>

		
			<div class="grid">
				<?php
				echo "<a href='product_item.php?id=". $allProducts[$randomProduct[0]]."'>
					<div class='card transparent col-md-4'>";
						 
							echo "<div><img src = 'images/".$allProducts[$randomProduct[0]].".png'></div>";
					
							echo "<h4>" .ucwords($allProductsName[$randomProduct[0]]) ."</h4>";
						 
				echo	"</div></a>";
				?>
				<?php
				echo "<a href='product_item.php?id=". $allProducts[$randomProduct[1]]."'>
					<div class='card transparent col-md-4'>";
						 
							echo "<div><img src = 'images/".$allProducts[$randomProduct[1]].".png'></div>";
					
							echo "<h4>" .ucwords($allProductsName[$randomProduct[1]]) ."</h4>";
						 
				echo	"</div></a>";
				?>
				<?php
				echo "<a href='product_item.php?id=". $allProducts[$randomProduct[2]]."'>
					<div class='card transparent col-md-4'>";
						 
							echo "<div><img src = 'images/".$allProducts[$randomProduct[2]].".png'></div>";
					
							echo "<h4>" .ucwords($allProductsName[$randomProduct[2]]) ."</h4>";
						 
				echo	"</div></a>";
				?>
				
				
			</div>
		</div>

<footer>
		<?php include "parts/footer.php" ?>
	

</footer>

		<script type="text/javascript" src="styleguide/index.js"></script>
	</body>
</html>