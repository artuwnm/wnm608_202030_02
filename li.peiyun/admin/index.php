<?php

include "../lib/php/functions.php";
include "../parts/templates.php";

$empty_product = (object) [
	"product_name"=>"",
	"category"=>"",
	"price"=>"",
	"brand"=>"",
	"style"=>"",
	"color"=>"",
	"material"=>"",
	"year_bought"=>"",
	"box"=>"",
	"thumbnail_a"=>"",
	"thumbnail_b"=>"",
	"images"=>"",
	"amount"=>""
];



if(isset($_GET['id'])) {
try{

$conn = makePDOConn();

switch(@$_GET['action']) {


	case "update":
		$statement = $conn->prepare("UPDATE
		`products`
		SET
			`product_name`=?,
			`category`=?,
			`price`=?,
			`brand`=?,
			`style`=?,
			`color`=?,
			`material`=?,
			`year_bought`=?,
			`thumbnail_a`=?,
			`thumbnail_b`=?,
			`images`=?,
			`amount`=?,
			`date_modify`=NOW()
		WHERE `id`=?
		");
		$statement->execute([
			$_POST["product-name"],
			$_POST["product-category"],
			$_POST["product-price"],
			$_POST["product-brand"],
			$_POST["product-style"],
			$_POST["product-color"],
			$_POST["product-material"],
			$_POST["product-yearbought"],
			$_POST["product-thumbnaila"],
			$_POST["product-thumbnailb"],
			$_POST["product-images"],
			$_POST["product-amount"],
			$_GET['id']
		]);

		header("location:{$_SERVER['PHP_SELF']}?id={$_GET['id']}");
		break;
	case "create":
		$statement = $conn->prepare("INSERT INTO
		`products`
		(
			`product_name`,
			`category`,
			`price`,
			`brand`,
			`style`,
			`color`,
			`material`,
			`year_bought`,
			`thumbnail_a`,
			`thumbnail_b`,
			`images`,
			`amount`,
			`date_create`,
			`date_modify`
		)
		VALUES
		(?,?,?,?,?,?,?,NOW(),NOW())
		");
		$statement->execute([
			$_POST["product-name"],
			$_POST["product-category"],
			$_POST["product-price"],
			$_POST["product-brand"],
			$_POST["product-style"],
			$_POST["product-color"],
			$_POST["product-material"],
			$_POST["product-yearbought"],
			$_POST["product-thumbnaila"],
			$_POST["product-thumbnailb"],
			$_POST["product-images"],
			$_POST["product-amount"]
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
$addoredit = $id=='new' ? 'Add' : 'Edit';
$createorupdate = $id=='new' ? 'create' : 'update';
$deletebutton = $id=='new' ? "" : "<li class='flex-none'><a href='{$_SERVER['PHP_SELF']}?id=$id&action=delete'>Delete</a></li>";


$images = array_reduce(explode(",",$o->images),function($r,$o){
	return $r."<img src='images/sm/$o'>";
});

$data_show = $id=='new' ? "" : <<<HTML
<div class="card soft">

<div class="product-thumbs">$images</div>

<h2>$o->product_name</h2>
<div>
	<strong>Category</strong>
	<span>$o->category</span>
</div>
<div>
	<strong>Price</strong>
	<span>&dollar;$o->price</span>
</div>

<div>
	<strong>Style</strong>
	<div>$o->style</div>
</div>
<div>
	<strong>Color</strong>
	<div>$o->color</div>
</div>
<div>
	<strong>Amount</strong>
	<span>$o->amount</span>
</div>

</div>
HTML;



echo <<<HTML
<div class="card soft">
	<nav class="nav-pills">
		<ul>
			<li class="flex-none"><a href="{$_SERVER['PHP_SELF']}">Back</a></li>
			<li class="flex-stretch"></li>
			$deletebutton
		</ul>
	</nav>
</div>
<div class="grid gap">
	<div class="col-xs-12 col-md-5">$data_show</div>
	<form method="post" action="{$_SERVER['PHP_SELF']}?id=$id&action=$createorupdate" class="col-xs-12 col-md-7">
		<div class="card soft">
		<h2>$addoredit Product</h2>
		<div class="form-control">
			<label for="product-name" class="form-label">Name</label>
			<input type="text" class="form-input" placeholder="A Product Name" id="product-name" name="product-name" value="$o->product_name">
		</div>
		<div class="form-control">
			<label for="product-price" class="form-label">Price</label>
			<input type="number" class="form-input" placeholder="A Product Price" id="product-price" name="product-price" value="$o->price" step="0.01" min="0.01" max="1000">
		</div>
		<div class="form-control">
			<label for="product-category" class="form-label">Category</label>
			<input type="text" class="form-input" placeholder="A Product Category" id="product-category" name="product-category" value="$o->category">
		</div>
		<div class="form-control">
			<label for="product-brand" class="form-label">Brand</label>
			<textarea class="form-input" placeholder="Product Brand" id="product-brand" name="product-brand">$o->brand</textarea>
		</div>
		<div class="form-control">
			<label for="product-style" class="form-label">Style</label>
			<input type="text" class="form-input" placeholder="Product Style" id="product-style" name="product-style" value="$o->style">
		</div>
		<div class="form-control">
			<label for="product-color" class="form-label">Color</label>
			<input type="text" class="form-input" placeholder="Product Color" id="product-color" name="product-color" value="$o->color">
		</div>
		<div class="form-control">
			<label for="product-category" class="form-label">Material</label>
			<input type="text" class="form-input" placeholder="Product Material" id="product-material" name="product-material" value="$o->material">
		</div>
		<div class="form-control">
			<label for="product-yearbought" class="form-label">Year Bought</label>
			<input type="text" class="form-input" placeholder="Year Bought" id="product-yearbought" name="product-yearbought" value="$o->year_bought">
		</div>
		<div class="form-control">
			<label for="product-thumbnaila" class="form-label">Thumbnail A</label>
			<input type="text" class="form-input" placeholder="Product Thumbnail A" id="product-thumbnaila" name="product-thumbnaila" value="$o->thumbnail_a">
		</div>
		<div class="form-control">
			<label for="product-thumbnailb" class="form-label">Thumbnail B</label>
			<input type="text" class="form-input" placeholder="Product Thumbnail B" id="product-thumbnailb" name="product-thumbnailb" value="$o->thumbnail_b">
		</div>
		<div class="form-control">
			<label for="product-images" class="form-label">Images</label>
			<input type="text" class="form-input" placeholder="Product Images" id="product-images" name="product-images" value="$o->images">
		</div>
		<div class="form-control">
			<label for="product-amount" class="form-label">Amount</label>
			<input type="number" class="form-input" placeholder="Product Amount" id="product-amount" name="product-amount" value="$o->amount">
		</div>
		<div class="form-control">
			<input type="submit" value="Submit" class="form-button">
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

	<header class="navbar">
		<div class="container display-flex">
			<div class="flex-stretch">
				<h>Product Admin</h>
			</div>
			<nav class="nav flex-none">
				<ul class="display-flex">
					<li><a href="./">Store</a></li>
					<li><a href="<?= $_SERVER['PHP_SELF'] ?>">Product List</a></li>
					<li><a href="<?= $_SERVER['PHP_SELF'] ?>?id=new">Add New Product</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<div class="container">

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
		<div class="card soft">
		<p>Choose a product to edit, or click to view their individual pages.</p>

		<div class="itemlist">
		<?php

		$rows = getRows($conn,"SELECT * FROM `products`");

		echo array_reduce($rows,'makeListItemTemplate');

		?>
		</div>
		</div>
		<?php

		}

		?>
	</div>
	
</body>
</html>