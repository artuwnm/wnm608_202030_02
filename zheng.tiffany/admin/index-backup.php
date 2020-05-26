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

	print_p([$_GET,$_POST]); 
	die;

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

		// print_p([$_GET,$_POST]); 
		// die;

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
$deletebutton = $id=='new' ? "" : "<a href='{$_SERVER['PHP_SELF']}?id=$id&action=delete'>Delete Product</a>";
$newproductorchanges = $id=='new' ? 'New Product' : 'Changes';

$images = array_reduce(explode(", ",$o->images),function($r,$o){
	return $r."<img src='$o'>";
});

echo <<<HTML

<hr class="container center">

<div class="back-link">
	<a href="{$_SERVER['PHP_SELF']}"><span class="chevron left"></span> Back</a>
</div>

<div class="medium-container">

	<div class="row">
		<h1 class="flex-none margin-top">$addoredit Product</h1>
		<div class="flex-none margin-top padding-top hover">$deletebutton</div>
	</div>

	
	<form method="post" action="{$_SERVER['PHP_SELF']}?id=$id&action=$createorupdate">

		<div class="card soft">

			<h2>Basic Info</h2>
			<table class="admin-form-table">
				<tbody>
					<tr>
						<td><label for="product-name" class="admin-form-label">Name</label></td>
						<td><input type="text" class="admin-form-input" value="$o->name" id="product-name" name="product-name"></td>
					</tr>
					<tr>
						<td><label for="product-price" class="admin-form-label">Price</label></td>
						<td><input type="text" class="admin-form-input" value="$o->price" id="product-price" name="product-price"></td>
					</tr>
					<tr>
						<td><label for="product-description" class="admin-form-label">Description</label></td>
						<td><textarea type="text" class="admin-form-input" id="product-description" name="product-description" wrap="soft">$o->description</textarea></td>
					</tr>
					<tr>
						<td><label for="product-material" class="admin-form-label">Material</label></td>
						<td><input type="text" class="admin-form-input" value="$o->material" id="product-material" name="product-material"></td>
					</tr>
				</tbody>
			</table>

			<h2>Advanced Info</h2>
			<table class="admin-form-table">
				<tbody>
					<tr>
						<td><label for="product-thumbnail" class="admin-form-label">Thumbnail</label></td>
						<td><input type="text" class="admin-form-input" value="$o->thumbnail" id="product-thumbnail" name="product-thumbnail"></td>
					</tr>
					<tr>
						<td><label for="product-images" class="admin-form-label">Images</label></td>
						<td><textarea type="text" class="admin-form-input" id="product-description" name="product-description" wrap="soft">$o->images</textarea></td>
					</tr>
					<tr>
						<td><label for="product-category" class="admin-form-label">Category</label></td>
						<td><input type="text" class="admin-form-input" value="$o->category" id="product-category" name="product-category"></td>
					</tr>
					<tr>
						<td><label for="product-type" class="admin-form-label">Type</label></td>
						<td><input type="text" class="admin-form-input" value="$o->type" id="product-type" name="product-type"></td>
					</tr>
					<tr>
						<td><label for="product-color" class="admin-form-label">Color</label></td>
						<td><input type="text" class="admin-form-input" value="$o->color" id="product-color" name="product-color"></td>
					</tr>
					<tr>
						<td><label for="product-featured" class="admin-form-label">Featured</label></td>
						<td><input type="text" class="admin-form-input" value="$o->featured" id="product-featured" name="product-featured"></td>
					</tr>
				</tbody>
			</table>

			<div class="center padding-bottom">
				<button class="hollow-button round" value="submit" type="submit"><h4>Save $newproductorchanges</h4></button>
			</div>

		</div>

	</form>

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