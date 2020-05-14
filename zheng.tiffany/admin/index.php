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
	"featured"=>"",
];

try{

$conn = makePDOConn();

switch(@$_GET['action']) {
	case "update":
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





function makeProductForm($o) {

$id = $_GET['id'];
$addoredit = $id=='new' ? 'Add' : 'Edit';
$createorupdate = $id=='new' ? 'create' : 'update';
$deletebutton = $id=='new' ? "" : "<li class='flex-none'><a href='{$_SERVER['PHP_SELF']}?id=$id&action=delete'>Delete</a></li>";

$images = array_reduce(explode(", ",$o->images),function($r,$o){
	return $r."<img src='$o'>";
});

echo <<<HTML
<div class="back-link">
	<a href="{$_SERVER['PHP_SELF']}"><span class="chevron left"></span> Back</a>
</div>
<form method="post" action="{$_SERVER['PHP_SELF']}?id=$id&action=$createorupdate">
	<div class="padding">
		<span class="user-name">$addoredit Product</span>
		<span class="inline-button"><a href="{$_SERVER['PHP_SELF']}?id=$id&action=delete">Delete Product</a></span>
	</div>
	<div class="row container">
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
					<td><input type="text" class="admin-form-input" value="$o->description" id="product-description" name="product-description"></td>
				</tr>
				<tr>
					<td><label for="product-material" class="admin-form-label">Material</label></td>
					<td><input type="text" class="admin-form-input" value="$o->material" id="product-material" name="product-material"></td>
				</tr>
				<tr>
					<td><label for="product-thumbnail" class="admin-form-label">Thumbnail</label></td>
					<td><input type="text" class="admin-form-input" value="$o->thumbnail" id="product-thumbnail" name="product-thumbnail"></td>
				</tr>
				<tr>
					<td><label for="product-images" class="admin-form-label">Images</label></td>
					<td><input type="text" class="admin-form-input" value="$o->images" id="product-images" name="product-images"></td>
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
				<tr>
					<td class="submit padding"><input class="inline-button" type="submit" value="Save Changes"></td>
				</tr>
			</tbody>
		</table>
	</div>
</form>
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
		<div>
			<a href="<?= $_SERVER['PHP_SELF'] ?>">Products List</a>
		</div>
		<div class="logo">
			<a href="index.php">
				<img src="images/stylista.png" alt="Stylista">
			</a>
		</div>
		<div>
			<a href="<?= $_SERVER['PHP_SELF'] ?>?id=new">
				<button class="hollow-button neutral round">
					<h4>&#43  New Product</h4>
				</button>
			</a>
		</div>
	</div>
</header>

<div class="container admin">
	<div class="products-list">
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

			<h1>Admin: Products List</h1>
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
</div>

</body>
</html>