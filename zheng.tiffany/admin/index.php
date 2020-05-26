<?php

include "../lib/php/functions.php";
include "../parts/templates.php";

$empty_product = (object) [
	"name"=>"",
	"price"=>"",
	"description"=>"",
	"material"=>"",
	"thumbnail"=>"",
	"images"=>"",
	"category"=>"",
	"type"=>"",
	"color"=>"",
	"featured"=>""
];








if(isset($_GET['id'])) {
try{

$conn = makePDOConn();

switch(@$_GET['action']) {


	case "update":

	// print_p([$_GET,$_POST]); 
	// die;

		$statement = $conn->prepare("UPDATE
		`products`
		SET
			`name`=?,
			`price`=?,
			`description`=?,
			`material`=?,
			`thumbnail`=?,
			`images`=?,
			`category`=?,
			`type`=?,
			`color`=?,
			`featured`=?,
			`date_modify`=NOW()
		WHERE `id`=?
		");
		$statement->execute([
			$_POST["product-name"],
			$_POST["product-price"],
			$_POST["product-description"],
			$_POST["product-material"],
			$_POST["product-thumbnail"],
			$_POST["product-images"],
			$_POST["product-category"],
			$_POST["product-type"],
			$_POST["product-color"],
			$_POST["product-featured"],
			$_GET['id']
		]);

		header("location:{$_SERVER['PHP_SELF']}?id={$_GET['id']}");
		break;
	case "create":
		$statement = $conn->prepare("INSERT INTO
		`products`
		(
			`name`,
			`price`,
			`description`,
			`material`,
			`thumbnail`,
			`images`,
			`category`,
			`type`,
			`color`,
			`featured`,
			`date_create`,
			`date_modify`
		)
		VALUES
		(?,?,?,?,?,?,?,?,?,?,NOW(),NOW())
		");
		$statement->execute([
			$_POST["product-name"],
			$_POST["product-price"],
			$_POST["product-description"],
			$_POST["product-material"],
			$_POST["product-thumbnail"],
			$_POST["product-images"],
			$_POST["product-category"],
			$_POST["product-type"],
			$_POST["product-color"],
			$_POST["product-featured"]
		]);
		$id = $conn->lastInsertId();

		header("location:{$_SERVER['PHP_SELF']}?id=$id");
		break;

	case "delete":
		$statement = $conn->prepare("DELETE FROM `products` WHERE `id`=?");
		$statement->execute([$_GET['id']]);

		header("location:{$_SERVER['PHP_SELF']}");
		break;
}

} catch(PDOException $e) {
	die($e->getMessage());
}
}







function makeProductForm($o) {

$id = $_GET['id'];
$addoredit = $id=='new' ? 'Add New' : 'Edit';
$createorupdate = $id=='new' ? 'create' : 'update';
$deletebutton = $id=='new' ? "" : "<a href='{$_SERVER['PHP_SELF']}?id=$id&action=delete'><button class='hollow-button neutral round'><h4>Delete Product</h4></button></a>";
$newproductorchanges = $id=='new' ? 'New Product' : 'Changes';

$o->name = $id=='new' ? 'Clouds Sweater' : $o->name;
$o->price = $id=='new' ? '78.00' : $o->price;
$o->description = $id=='new' ? 'A sweater so soft you will even want to sleep in it! Our Clouds Sweater is made with extra fine Italian merino wool, with a flattering turtleneck design. The sweater fits true to size, with some stretch.' : $o->description;
$o->material = $id=='new' ? '100% Merino Wool' : $o->material;
$o->thumbnail = $id=='new' ? 'images/clouds_sweater_full_1.jpg' : $o->thumbnail;
$o->images = $id=='new' ? 'images/clouds_sweater_full_1.jpg, images/clouds_sweater_full_2.jpg, images/clouds_sweater_full_3.jpg, images/clouds_sweater_full_4.jpg' : $o->images;
$o->category = $id=='new' ? 'Men' : $o->category;
$o->type = $id=='new' ? 'Top' : $o->type;
$o->color = $id=='new' ? 'Neutral' : $o->color;
$o->featured = $id=='new' ? '0' : $o->featured;


$images = array_reduce(explode(",",$o->images),function($r,$o){
	return $r."<img src='$o'>";
});

$data_show = $id=='new' ? "" : <<<HTML
<div class="admin-preview">
	<h2>Preview</h2>
	<div class="product-images display-flex">
		<div class="product-thumbs flex-none">$images</div>
		<div class="product-main">
			<img src="$o->thumbnail" alt="">
		</div>
	</div>
	<h1 class="margin-top">$o->name</h1>
	<h3 class="product-price">&dollar;$o->price</h3>
	<p class="description">$o->description</p>
	<h5>Details</h5>
	<p class="small-p">$o->material</p>
</div>
HTML;



echo <<<HTML
<hr class=" center">

<div class="back-link">
	<a href="{$_SERVER['PHP_SELF']}"><span class="chevron left"></span> Back</a>
</div>

<div class="row">
	<h1 class="flex-none margin-top">$addoredit Product</h1>
	<div class="flex-none margin-top right">$deletebutton</div>
</div>

<div class="grid gap">
	<form method="post" action="{$_SERVER['PHP_SELF']}?id=$id&action=$createorupdate" class="col-xs-12 col-md-8">
		<div class="card soft margin-right">

			<h2>Basic Info</h2>
			<table class="admin-form-table">
				<tbody>
					<tr>
						<td><label for="product-name" class="admin-form-label">Name</label></td>
						<td><input type="text" class="admin-form-input" placeholder="Name of Product" id="product-name" name="product-name" value="$o->name"></td>
					</tr>
					<tr>
						<td><label for="product-price" class="admin-form-label">Price</label></td>
						<td><input type="number" class="admin-form-input" placeholder="0.00" id="product-price" name="product-price" value="$o->price" step="1.00" min="0.00" max="1000"></td>
					</tr>
					<tr>
						<td><label for="product-description" class="admin-form-label">Description</label></td>
						<td><textarea class="admin-form-input" placeholder="Write a short blurb (2-3 sentences)" id="product-description" name="product-description">$o->description</textarea></td>
					</tr>
					<tr>
						<td><label for="product-material" class="admin-form-label">Material</label></td>
						<td><textarea class="admin-form-input" placeholder="Info found on the clothing tag" id="product-material" name="product-material">$o->material</textarea></td>
					</tr>
				</tbody>
			</table>

			<h2>Advanced Info</h2>
			<table class="admin-form-table">
				<tbody>
					<tr>
						<td><label for="product-thumbnail" class="admin-form-label">Thumbnail</label></td>
						<td><input type="text" class="admin-form-input" placeholder="Thumbnail URL" id="product-thumbnail" name="product-thumbnail" value="$o->thumbnail"></td>
					</tr>
					<tr>
						<td><label for="product-images" class="admin-form-label">Images</label></td>
						<td><textarea class="admin-form-input" placeholder="Image URLs" id="product-images" name="product-images">$o->images</textarea></td>
					</tr>
					<tr>
						<td><label for="product-category" class="admin-form-label">Category</label></td>
						<td><input type="text" class="admin-form-input" placeholder="Men or Women" id="product-category" name="product-category" value="$o->category"></td>
					</tr>
					<tr>
						<td><label for="product-type" class="admin-form-label">Type</label></td>
						<td><input type="text" class="admin-form-input" placeholder="i.e. Top, Bottom, Dress" id="product-type" name="product-type" value="$o->type"></td>
					</tr>
					<tr>
						<td><label for="product-color" class="admin-form-label">Color</label></td>
						<td><input type="text" class="admin-form-input" placeholder="Neutral, Warm, or Cool" id="product-color" name="product-color" value="$o->color"></td>
					</tr>
					<tr>
						<td><label for="product-featured" class="admin-form-label">Featured</label></td>
						<td><input type="text" class="admin-form-input" placeholder="0 or 1" id="product-featured" name="product-featured" value="$o->featured"></td>
					</tr>
				</tbody>
			</table>

			<div class="center padding-bottom">
				<button class="hollow-button round" value="submit" type="submit"><h4>Save $newproductorchanges</h4></button>
			</div>

		</div>
	</form>

	<div class="col-xs-12 col-md-4">$data_show</div>

</div>
HTML;
}




?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Product Admin</title>

	<?php include "../parts/meta.php" ?>

</head>
<body>

<header class="store-header admin">
	<div class="row container">
		<div class="flex-none hover">
			<a href="index.php">Store Home</a>
		</div>
		<div class="logo flex-stretch center">
			<a href="index.php">
				<img src="images/stylista.png" alt="Stylista">
			</a>
		</div>
		<div class="flex-none hover right">
			<a href="<?= $_SERVER['PHP_SELF'] ?>">Product List</a>
		</div>
	</div>
</header>

<div class="container admin">

	<?php

	$conn = makeConn();

	if(isset($_GET['id'])) {

		if($_GET['id']=="new") {
			makeProductForm($empty_product);
		} else {
			$rows = getRows($conn,"SELECT * FROM `products` WHERE `id`='{$_GET['id']}'");
			makeProductForm($rows[0]);
		}

	} else {


	?>
		<div class="row">
			<h1 class="flex-none margin-top">Admin: Product List</h1>
			<div class="flex-none margin-top right">
				<a href="<?= $_SERVER['PHP_SELF'] ?>?id=new">
					<button class="hollow-button neutral round">
						<h4>&#43  New Product</h4>
					</button>
				</a>
			</div>
		</div>
		
		<div class="itemlist">
			<?php
			
			$rows = getRows($conn, "SELECT * FROM `products`");

			echo array_reduce($rows,'makeListItemTemplate');


			?>
		</div>

	<?php 

		}

	?>

</div>

</body>
</html>