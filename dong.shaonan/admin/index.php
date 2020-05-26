<?php

include "../lib/php/functions.php";
include "../parts/templates.php";

$empty_product = (object) [
	"name"=>"",
	"price"=>"",
	"category"=>"",
	"mode"=>"",
	"description"=>"",
	"thumbnail"=>"",
	"images"=>"",
	"brand"=>""
];

try {

$conn = makeConn();
switch(@$_GET['action']) {
	case "update":
		$statement = $conn->prepare("
        UPDATE
		    `products`
		SET
		    name = ?,
		    price = ?,
		    category = ?,
		    mode = ?,
		    description = ?,
		    thumbnail = ?,
		    images = ?,
		    brand = ?
	    WHERE `id`=?
		");
		$statement->bind_param("sdssssssi",
            $_POST['product-title'],
            $_POST['product-price'],
            $_POST['product-category'],
            $_POST['product-mode'],
            $_POST['product-description'],
            $_POST['product-thumbnail'],
            $_POST['product-images'],
            $_POST['product-brand'],
            $_GET['id']);

        $statement->execute();
        //echo $statement;
        header("location:{$_SERVER['PHP_SELF']}?id={$_GET['id']}");
		break;
	case "create":
		$statement = $conn->prepare("INSERT INTO
		`products`
		(
			`name`,
			`price`,
			`category`,
			`mode`,
			`description`,
			`thumbnail`,
			`images`,
			`brand`,
			`expiration`,
			`date_create`,
			`date_modify`,
			`url`
		)
		VALUES
		(?,?,?,?,?,?,?,?,?,?,?,?)
		");
		$date = date("Y-m-d H:i:s");
		$url = "";
        $statement->bind_param("sdssssssssss",
            $_POST['product-title'],
            $_POST['product-price'],
            $_POST['product-category'],
            $_POST['product-mode'],
            $_POST['product-description'],
            $_POST['product-thumbnail'],
            $_POST['product-images'],
            $_POST['product-brand'],
            $date,
            $date,
            $date,
            $url
        );
        print_r($_POST);
        $statement->execute();
        $id = mysqli_insert_id($conn);
        print_r($id);
		header("location:{$_SERVER['PHP_SELF']}?id=$id");
		break;



	case "delete":
		$statement = $conn->query("DELETE FROM `products` WHERE id=".$_GET['id']);


		header("location:{$_SERVER['PHP_SELF']}");
		break;
}


} catch(PDOException $e) {
	die($e->getMessage());
}
       /////////
       /////////





function makeProductForm($o) {


$id = $_GET['id'];
$addoredit = $id=="new" ? 'Add' : 'Edit';
$createorupdate = $id=="new" ? 'create' : 'update';
$deletebutton = $id=="new" ? '' : <<<HTML
<li class="flex-none"><a href="{$_SERVER['PHP_SELF']}?id=$id&action=delete">Delete</a></li>
HTML;

$images = array_reduce(explode(",",$o->images),function($r,$o){
	return $r."<img src='$o'>";
});

$data_show = $id=='new' ? "" : <<<HTML
<div class="card soft">
<div class="product-main">
	<img src="$o->thumbnail" alt="">
</div>
<div class="product-thumbs">$images</div>
<h2>$o->name</h2>
<div>
	<strong>Price</strong>
	<span>&dollar;$o->price</span>
</div>
<div>
	<strong>Category</strong>
	<span>$o->category</span>
</div>
<div>
	<strong>Description</strong>
	<div>$o->description</div>
</div>
</div>
HTML;



echo <<<HTML
	<nav class="nav-pills">
		<ul>
			<div class="flex-none"><a href="{$_SERVER['PHP_SELF']}">Back</a></div>
			<div class="flex-stretch"></div>
			$deletebutton
		</ul>
	</nav>
</div>
<form method="post" action="{$_SERVER['PHP_SELF']}?id=$id&action=$createorupdate">
	<div class="grid gap">
		<div class="col-xs-12 col-md-5">
			$data_show
		</div>
		<div class="col-xs-12 col-md-7">
			<div class="card soft">
			<h2>$addoredit Product</h2>
			<div class="form-control">
				<label class="form-label" for="product-title">Title</label>
				<input class="form-input" id="product-title" name="product-title" value="$o->name">
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
			<label for="product-mode" class="form-label">Mode</label>
			<input type="text" class="form-input" placeholder="A Product Mode" id="product-mode" name="product-mode" value="$o->mode">
		</div>
		<div class="form-control">
			<label for="product-description" class="form-label">Description</label>
			<textarea class="form-input" placeholder="A Product Description" id="product-description" name="product-description">$o->description</textarea>
		</div>
		<div class="form-control">
			<label for="product-thumbnail" class="form-label">Thumbnail</label>
			<input type="text" class="form-input" placeholder="A Product Thumbnail" id="product-thumbnail" name="product-thumbnail" value="$o->thumbnail">
		</div>
		<div class="form-control">
			<label for="product-images" class="form-label">Images</label>
			<input type="text" class="form-input" placeholder="A Product Images" id="product-images" name="product-images" value="$o->images">
		</div>
		<div class="form-control">
			<label for="product-brand" class="form-label">Brand</label>
			<input type="text" class="form-input" placeholder="A Product Brand" id="product-brand" name="product-brand" value="$o->brand">
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
				<h1>Product Admin</h1>
			</div>
			<nav class="nav flex-none">
				<ul class="display-flex">
					<li><a href="./product_list.php">Home</a></li>


				

					<li><a href="admin/index.php">Product List</a></li>
					<li><a href="admin/index.php?id=new">Add New Product</a></li>
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
		</div>
	</div>
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