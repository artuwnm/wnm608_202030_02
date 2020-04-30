<?php

include_once "lib/php/function.php";
include_once "parts/templates.php";

$result = getRows(
	makeConn(),
	"SELECT *
	FROM `products`
	WHERE `id` = '{$_GET['id']}'
	"
);

$randProducts = getRows(
	makeConn(),
	"
	SELECT *
	FROM `products`
	WHERE `id`IN (2,5,8)
	"
);

$o = $result[0];
$thumbs = explode(",",$o->images);

// print_p($_SESSION);

?><!DOCTYPE html>
<html>
	<head>
		<?php include "parts/meta.php" ?>

		<title><?= $o->productName  ?></title>
	</head>
	<body>
	
		<?php include "parts/navbar.php" ?>			
		<div class="container">
			<div class="nav-breadcrumb2 uppercase margin-top-2">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="product_list.php">Products</a></li>
					<li><a href="product_item.php?id=<?= $o->id ?>"><?= $o->productName  ?></a></li>
				</ul>
			</div>
		</div>
	
		<div class="container">
			
			<div class="card transparent">
				<div class="grid gap">
					<div class="col-md-6 image-picker">
												
							<div class="main-image">
									<img src = images/<?= $o->thumbnail?>>
																	
							</div>
							<div class="thumbstrip">
								<?php

								echo array_reduce($thumbs,function($r,$o){
									return $r."<img src='images/$o'>";
								})
								?>

							</div>						
						 	
					</div>

					 <div class="col-md-6 color-dark position-relative" >
					 	<form action="data/form_actions.php" method="get">
					 		<h2 class="">
 									<?= $o->productName  ?>
 								</h2>
 								<h3>
 									$ <?= $o->price  ?>
 								</h3>
 								
 								<label class="form-label">Phone:</label>
 								<select name="phone" class="dropdown-selection display-block ">
 									<option>iPhone 11</option>
 									<option>iPhone 11 Pro</option>
 									<option>iPhone 11 Pro Max</option>
 									<option>iPhone X</option>
 								</select>

 								<div class="card-section">
 									<label class="form-label">Color:</label>
 									<select name="color" class="dropdown-selection display-block ">
 										<option >Yellow</option>
 										<option >White</option>
 										<option >Beige</option>
 									</select>
 								</div>
 										
 								<div class="card-section">
 									<label class="form-label">Quantity:</label>
 									<select name="amount" class="dropdown-selection display-block">
 										<!-- option*10>{$} -->
 										<option>1</option>
 										<option>2</option>
 										<option>3</option>
 										<option>4</option>
 										<option>5</option>
 										<option>6</option>
 										<option>7</option>
 										<option>8</option>
 										<option>9</option>
 										<option>10</option>
 									</select>
 								</div>								
 							 		
 							
 									<div class="card-section">
 										<input type="hidden" name="action" value="add-to-cart">
 										<input type="hidden" name="id" value="<?= $o->id ?>">
 										<input type="hidden" name="price" value="<?= $o->price ?>">
 										<input type="submit" class="btn dark uppercase" value="Add To Cart">
 									</div>
 								
					 	</form>
						<!-- <a href="product_addedtocart.php?id=<?= $o->id ?>" class="btn dark uppercase">Add to Cart</a> -->
					 </div>
				</div>
			</div>

			<div class="card soft">
				<h3>Description</h3>
				<p><?= $o->description ?></p>
			</div>
		</div>
		<hr>
		<div class="container">
			
				<h2 class="uppercase color-dark">You may also like:</h2>					
			
		
			<div class="grid">
				<?php
					echo array_reduce($randProducts, 'productListTemplate');
				?>
								
			</div>
		</div>

<footer>
		<?php include "parts/footer.php" ?>
	

</footer>

		<script type="text/javascript" src="styleguide/index.js"></script>
	</body>
</html>