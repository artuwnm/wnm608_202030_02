<?php 

include "../lib/php/function.php";
include "../parts/templates.php";

$empty_product =(object)[
	"productName"=>"",
	"category"=>"",
	"description"=>"",
	"price"=>"",
	"quantity"=>"",
	"colors"=>"",
	"weight"=>"",
	"thumbnail"=>"",
	"images"=>"",
	"suggestedProducts"=>"",
	"isactive"=>""
];

if(isset($_GET['id'])){
try{
$conn = makePDOConn();

switch (@$_GET['action']) {
	case 'update':
		
		$statement = $conn->prepare("UPDATE
			`products`
			SET
				`productName`=?,
				`category`=?,
				`description`=?,
				`price`=?,
				`quantity`=?,
				`colors`=?,
				`weight`=?,
				`thumbnail`=?,
				`images`=?,
				`suggestedProducts`=?,
				`isactive`=?,
				`date_modified`=NOW()
			WHERE `id`= ?
			");
		$statement->execute([
			$_POST["product-productName"],
			$_POST["product-category"],
			$_POST["product-description"],
			$_POST["product-price"],
			$_POST["product-quantity"],
			$_POST["product-colors"],
			$_POST["product-weight"],
			$_POST["product-thumbnail"],
			$_POST["product-images"],
			$_POST["product-suggestedProducts"],
			$_POST["product-isactive"],
			$_GET['id']
		]);
		header("location:{$_SERVER['PHP_SELF']}?id={$_GET['id']}");
		break;
	case 'create':
		// print_p([$_GET,$_POST]);
		// die;
		$statement = $conn->prepare("INSERT INTO
			`products`
			(
				`productName`,
				`category`,
				`description`,
				`price`,
				`quantity`,
				`colors`,
				`weight`,
				`thumbnail`,
				`images`,
				`suggestedProducts`,
				`isactive`,
				`date_modified`,
				`date_created`
				)
			VALUES 
			(?,?,?,?,?,?,?,?,?,?,?,NOW(),NOW())
			
			");
		$statement->execute([
			$_POST["product-productName"],
			$_POST["product-category"],
			$_POST["product-description"],
			$_POST["product-price"],
			$_POST["product-quantity"],
			$_POST["product-colors"],
			$_POST["product-weight"],
			$_POST["product-thumbnail"],
			$_POST["product-images"],
			$_POST["product-suggestedProducts"],
			$_POST["product-isactive"]
		]);
		$id = $conn->lastInsertId();

		header("location:{$_SERVER['PHP_SELF']}?id=$id");
		
		break;
	case 'delete':
		$statement = $conn->prepare("DELETE FROM `products` WHERE `id` =?");
		$statement->execute([$_GET['id']]);

		header("location:{$_SERVER['PHP_SELF']}");
		break;
	
	default:
		# code...
		break;
}

}catch(PDOException $e){
	die($e->getMessage());
}
}














function makeProductForm($o){

$id = $_GET['id'];
$addoredit = $id =='new' ? 'Add': 'Edit';
$createorupdate= $id=='new'?'create':'update';
$deletebutton = $id == 'new' ? "": "<a href='{$_SERVER['PHP_SELF']}?id=$id&action=delete' class='flex-none' style='padding-right:0;'>Delete</a>";

$name = $id =='new' ? 'Scratching Meow Phone Case': $o->productName;
$category = $id =='new' ? 'Phone Case': $o->category;
$description = $id =='new' ? 'Cat Scratches the phone case': $o->description;
$price = $id =='new' ? '30': $o->price;
$quantity = $id =='new' ? '20': $o->quantity;
$thumbnail = $id =='new' ? 'scratching_meow_phonecase.png': $o->thumbnail;
$o->images = $id =='new' ? 'scratching_meow_phonecase.png,scratching_meow_phonecase_2.png,scratching_meow_phonecase_3.png,scratching_meow_phonecase_4.png': $o->images;
$colors = $id =='new' ? 'white,yellow': $o->colors;
$weight = $id =='new' ? '0.8': $o->weight;
$suggestedProducts = $id =='new' ? 'Iconic Meow Phone Case,Warning Meowie Phone Case,Meowie Logo Phone Case': $o->suggestedProducts;
$isactive = $id =='new' ? '1': $o->isactive;

$images = array_reduce(explode(",",$o->images),function($r,$o){return $r."<img src='images/$o'>";});
$data_show = $id=='new'?"":<<<HTML

<div class="card flat" style="margin-top: 0;">
	
	
<div class="display-flex">

	
<div class="flex-stretch">
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
	<span>&dollar; $o->price</span>
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
	
	<div>
	<h4>Suggested Products</h4>
	<span>$o->suggestedProducts</span>
	</div>

	<div>
	<h4>Active Products</h4>
	<span>$o->isactive</span>
	</div>
</div>

	<div class="flex-none">
		<div class="product-main">
			<img src="images/$o->thumbnail" alt="">
		</div>
		<div class="product-thumbs">$images</div>
	</div>
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

	<div class=" col-md-12 col-sm-12" >$data_show</div>
	<div class="card flat col-md-12 col-sm-12" style="margin-top: 0;">
		<h2>$addoredit Product</h2>
		<form method="post" class="form" action="{$_SERVER['PHP_SELF']}?id=$id&action=$createorupdate">
			<div class="form-control">
				<label for="product-productName" class="form-label">Product Name</label>
				<input type="text" class="form-input" type="text" placeholder="Scratching Meow Phone Case" id="product-productName" name="product-productName" value="{$name}">
			</div>
			<div class="form-control">
				<label for="product-category" class="form-label">Category</label>
				<input type="text" class="form-input" type="text" placeholder="Phone Case" id="product-category" name="product-category" value="{$category}">
			</div>
			<div class="form-control">
				<label for="product-description" class="form-label">Description</label>
				<textarea class="form-input" type="text" placeholder="Cat Scratches the phone case" id="product-description" name="product-description">{$description}</textarea>
			</div>
			<div class="form-control">
				<label for="product-price" class="form-label">Price</label>
				<input type="number" class="form-input" type="text" placeholder="30" id="product-price" name="product-price" value="{$price}">
			</div>
			<div class="form-control">
				<label for="product-quantity" class="form-label">Quantity</label>
				<input type="number" class="form-input" type="text" placeholder="20" id="product-quantity" name="product-quantity" value="{$quantity}">
			</div>
			<div class="form-control">
				<label for="product-thumbnail" class="form-label">Thumbnail</label>
				<input type="text" class="form-input" type="text" placeholder="scratching_meow_phonecase.png" id="product-thumbnail" name="product-thumbnail" value="{$thumbnail}">
			</div>
			<div class="form-control">
				<label for="product-images" class="form-label">Images</label>
				<input type="text" class="form-input" type="text" placeholder="" id="product-images" name="product-images" value="$o->images">
			</div>
			<div class="form-control">
				<label for="product-colors" class="form-label">Colors</label>
				<input type="text" class="form-input" type="text" placeholder="" id="product-colors" name="product-colors" value="{$colors}">
			</div>
			<div class="form-control">
				<label for="product-weight" class="form-label">Weight (kg)</label>
				<input type="text" class="form-input" type="text" placeholder="0.8" id="product-weight" name="product-weight" value="{$weight}">
			</div>
			<div class="form-control">
				<label for="product-suggestedProducts" class="form-label">Suggested Products</label>
				<input type="text" class="form-input" type="text" placeholder="Iconic Meow Phone Case,Warning Meowie Phone Case,Meowie Logo Phone Case" id="product-suggestedProducts" name="product-suggestedProducts" value="{$suggestedProducts}">
			</div>
			<div class="form-control">
				<label for="product-isactive" class="form-label">Active Product</label>
				<input type="number" class="form-input" type="text" placeholder="1" id="product-isactive" name="product-isactive" value="{$isactive}">
			</div>

			<div class="form-control">
				<input type="submit" value="submit" class="form-button uppercase">
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
					<h2 class="flex-stretch margin-auto uppercase medium-color">Product list</h2>
					<h3 class="flex-none"> <a class="btn dark" href="<?= $_SERVER['PHP_SELF'] ?>?id=new">Add New Product</a> </h3>
				</div>


				<div>
					<p>Choose a product to edit, or click to view their individual pages.</p>
					<?php 
					
						$rows = getRows($conn,"SELECT * FROM `products`");
						echo array_reduce($rows,'makeListItemTemplate');
																				
				}
					
					?>

				
			
			</div>
		</div>

	</body>
</html>