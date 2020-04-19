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

// print_p($result);

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
					 	<h2 class="">
							<?= $o->productName  ?>
						</h2>
						<h3 class="margin-bottom-2">
							$ <?= $o->price  ?>
						</h3>
						
						<h5>Choose your phone:</h5>
						<select name="dropdown-selection" id="dropdown-selection" class="dropdown-selection display-block margin-bottom-5">
							<option  class="options"  value="option1">iPhone 11</option>
							<option  class="options" value="option2">iPhone 11 Pro</option>
							<option  class="options" value="option3">iPhone 11 Pro Max</option>
							<option  class="options" value="option4">iPhone X</option>
						</select>
						<a href="product_addedtocart.php?id=<?= $o->id ?>" class="btn dark uppercase">Add to Cart</a>
					 </div>
				</div>
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