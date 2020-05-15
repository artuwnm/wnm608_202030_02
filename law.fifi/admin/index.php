<?php 

include "../lib/php/function.php";
include "../parts/templates.php";

$empty_product =(object)[
	"productName"=>"",
	"category"=>"",
	"description"=>"",
	"price"=>"",
	"quantity"=>"",
	"thumbnail"=>"",
	"images"=>"",
	"colors"=>"",
	"weight"=>""
];

function makeProductForm($o){

$id = $_GET['id'];
$addoredit = $id =='new' ? 'Add': 'Edit';
$createorupdate= $id=='new'?'Create':'Update';
$deletebutton = $id == 'new' ? "": "<a href='{$_SERVER['PHP_SELF']}?id=$id&action=delete' class='flex-none' style='padding-right:0;'>Delete</a>";
$images = array_reduce(explode(",",$o->images),function($r,$o){return $r."<img src='images/$o'>";});

$data_show = $id=='new'?"":<<<HTML

<div class="card soft" style="margin-top: 0;">
	
	
	<div class="product-main">
		<img src="/images/store/$o->thumbnail" alt="">
	</div>
	<div class="product-thumbs">$images</div>



	<div>
	<h4>Product Name</h4>
	<span>$o->productName</span>
	</div>
	
	<div>
	<h4>Category</h4>
	<span>$o->category</span>
	</div>

	
	<div>
	<h4>Price</h4>
	<span>$o->price</span>
	</div>

	<div>
	<h4>Quantity</h4>
	<span>$o->quantity</span>
	</div>
	
	<div>
	<h4>Colors Available</h4>
	<span>$o->colors</span>
	</div>

	<div>
	<h4>Description</h4>
	<span>$o->description</span>
	</div>
</div>

HTML;

echo <<<HTML

<div class="display-flex card transparent" style="margin-bottom: 0;">
	
	<a href="{$_SERVER['PHP_SELF']}" style="padding-left:0;" class="flex-none">&larr; BACK</a>	
	<a class="flex-stretch"></a>
	$deletebutton

</div>

<div class="grid gap">

	<div class=" col-md-5 col-sm-12" >$data_show</div>
	<div class="card flat col-md-7 col-sm-12" style="margin-top: 0;">
		<h2>$addoredit Product</h2>
		<form class="form" action="{$_SERVER['PHP_SELF']}?id=$id&action=$createorupdate">
			<div class="form-control">
				<label for="product-name" class="form-label">Product Name</label>
				<input type="text" class="form-input" type="text" placeholder="Product Name" id="product-name" name="product-name" value="$o->productName">
			</div>
			<div class="form-control">
				<label for="product-category" class="form-label">Category</label>
				<input type="text" class="form-input" type="text" placeholder="Category" id="product-category" name="product-category" value="$o->category">
			</div>
			<div class="form-control">
				<label for="product-description" class="form-label">Description</label>
				<textarea class="form-input" type="text" placeholder="Description" id="product-description" name="product-description">$o->description</textarea>
			</div>
			<div class="form-control">
				<label for="product-price" class="form-label">Price</label>
				<input type="number" class="form-input" type="text" placeholder="Price" id="product-price" name="product-price" value="$o->price">
			</div>
			<div class="form-control">
				<label for="product-quantity" class="form-label">Quantity</label>
				<input type="number" class="form-input" type="text" placeholder="Quantity" id="product-quantity" name="product-quantity" value="$o->quantity">
			</div>
			<div class="form-control">
				<label for="product-thumbnail" class="form-label">Thumbnail</label>
				<input type="text" class="form-input" type="text" placeholder="Thumbnail" id="product-thumbnail" name="product-thumbnail" value="$o->thumbnail">
			</div>
			<div class="form-control">
				<label for="product-images" class="form-label">Images</label>
				<input type="text" class="form-input" type="text" placeholder="Images" id="product-images" name="product-images" value="$o->images">
			</div>
			<div class="form-control">
				<label for="product-colors" class="form-label">Colors</label>
				<input type="text" class="form-input" type="text" placeholder="Colors" id="product-colors" name="product-colors" value="$o->colors">
			</div>
			<div class="form-control">
				<label for="product-weight" class="form-label">Weight (kg)</label>
				<input type="text" class="form-input" type="text" placeholder="Weight" id="product-weight" name="product-weight" value="$o->weight">
			</div>

			<div class="form-control">
				<button type="submit" class="form-button uppercase">Submit</button>
			</div>
		</form>
	</div>
</div>



HTML;
	
}


?><!DOCTYPE html>
<html>
	<head>
		<?php include "../parts/meta.php" ?>
		
		<title>Product Admin</title>
	</head>
	<body>

		<div class="navbar">
			<div class="container display-flex ">
				<div class="flex-stretch">
					<h2>Product Admin</h2>
				</div>
				<nav class="nav-flex">
					<ul class="display-flex flex-justify-center">
						<li><a href="#">Store</a></li>
						<li><a href="<?= $_SERVER['PHP_SELF'] ?>">Product List</a></li>
					</ul>
				</nav>
			</div>
		</div>
		
		<div class="container">
			
				
				<?php 
					$conn = makeConn();

					if (isset($_GET['id'])) {
						
						if($_GET['id']=="new"){
							makeProductForm($empty_product);
						}else{
							$rows=getRows($conn, "SELECT * FROM `products` WHERE `id` = '{$_GET['id']}'");
							makeProductForm($rows[0]);
						}

					}else{

				 ?>

				<div class="display-flex">
					<h2 class="flex-stretch margin-auto">Products</h2>
					<h3 class="flex-none"> <a class="btn dark" href="<?= $_SERVER['PHP_SELF'] ?>?id=new">Add New Product</a> </h3>
				</div>

				<div>
					<?php 
					
						$rows = getRows($conn,"SELECT * FROM `products`");
						echo array_reduce($rows,'makeListItemTemplate');
																				
				}
					
					?>

				
			
			</div>
		</div>

	</body>
</html>