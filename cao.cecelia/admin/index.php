<?php

include "../lib/php/function.php";
include "../parts/templates.php";

$empty_product = (object) [
	"name"=>"",
	"price"=>"",
	"category"=>"",
	"description"=>"",
	"thumbnail"=>"",
	"images"=>"",
	"quantity"=>""
];



if(isset($_GET['id'])) {
try{

$conn = makePDOConn();

switch(@$_GET['action']) {


	case "update":
		$statement = $conn->prepare("UPDATE
		`product`
		SET
			`name`=?,
			`price`=?,
			`category`=?,
			`description`=?,
			`thumbnail`=?,
			`images`=?,
			`quantity`=?,
			`date_modify`=NOW()
		WHERE `id`=?
		");
		$statement->execute([
			$_POST["product-name"],
			$_POST["product-price"],
			$_POST["product-category"],
			$_POST["product-description"],
			$_POST["product-thumbnail"],
			$_POST["product-images"],
			$_POST["product-quantity"],
			$_GET['id']
		]);

		header("location:{$_SERVER['PHP_SELF']}?id={$_GET['id']}");
		break;
	case "create":
		$statement = $conn->prepare("INSERT INTO
		`product`
		(
			`name`,
			`price`,
			`category`,
			`description`,
			`thumbnail`,
			`images`,
			`quantity`,
			`date_create`,
			`date_modify`
		)
		VALUES
		(?,?,?,?,?,?,?,NOW(),NOW())
		");
		$statement->execute([
			$_POST["product-name"],
			$_POST["product-price"],
			$_POST["product-category"],
			$_POST["product-description"],
			$_POST["product-thumbnail"],
			$_POST["product-images"],
			$_POST["product-quantity"]
		]);
		$id = $conn->lastInsertId();

		header("location:{$_SERVER['PHP_SELF']}?id=$id");
		break;

	case "delete":
		$statement = $conn->prepare("DELETE FROM `product` WHERE `id`=?");
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
	return $r."<img src='$o'>";
});

$data_show = $id=='new' ? "" : <<<HTML

<div class="card soft">

<div class="big-image">
	<img src="$o->thumbnail" alt="">
</div>
<div class="thumb-images"><img src="$o->thumbnail" alt=""></div>
<div class="thumb-images">$images</div>

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
	<strong>Quantity</strong>
	<span>$o->quantity</span>
</div>
<div>
	<strong>Description</strong>
	<div>$o->description</div>
</div>
</div>

HTML;




echo <<<HTML

	<div class="form-control display-flex" style="font-size:1em">
		<div class="flex-none">
		<a class="form-button" href="{$_SERVER['PHP_SELF']}">Back</a>
		</div>
		<div class="flex-stretch"></div>
		<div class="flex-none">
		<div class="form-button" style="list-style-type:none;">$deletebutton</div>
		</div>
		</div>
	

<div class="grid gap">
	<div class="col-xs-12 col-md-5">$data_show</div>
	<form method="post" action="{$_SERVER['PHP_SELF']}?id=$id&action=$createorupdate" class="col-xs-12 col-md-7">
		<div class="card soft">
		<h2>$addoredit Product</h2>
		<div class="form-control">
			<label for="product-name" class="form-label">Name</label>
			<input type="text" class="form-input" placeholder="A Product Name" id="product-name" name="product-name" value="$o->name">
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
			<label for="product-quantity" class="form-label">Quantity</label>
			<input type="number" class="form-input" placeholder="A Product Quantity" id="product-quantity" name="product-quantity" value="$o->quantity">
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

 <!--  <div class="sidenav">
  <img  src="images/horizontallogowhite.png" alt="Nature" style="width: 80%">
  <h3 style="padding-left: 16px; color: white">Product Admin</h3>
  <a href="<?= $_SERVER['PHP_SELF'] ?>">Product List</a>
  <a href="<?= $_SERVER['PHP_SELF'] ?>?id=new">Add New Product</a>
</div> -->


<style>

.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #d1af94;
  position: fixed;
  height: 100%;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
  color: white;
}
 
.sidebar a:active {
  background-color: #555;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

.sidebar img{
	width: 180px;
    margin: 1em 0;
}

div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {
  	float: left;
	font-size: 10px;
  }
  .sidebar img{width:100px;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 200px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
</style>
</head>
<body>

<div class="sidebar">
	<a href="index.php"><img  src="images/logoblack.png" alt="Nature"></a>	
    <a class="active" href="<?= $_SERVER['PHP_SELF'] ?>">Product List</a>
    <a href="<?= $_SERVER['PHP_SELF'] ?>?id=new">Add New Product</a>
</div>

	<!-- <header class="navbar">
		<div class="display-flex">
			
			<div class="flex-stretch">
				<h1>User Admin</h1>
			</div>
			<nav class="nav flex-none">
				<ul class="display-flex">
					<li><a href="admin/users.php">User List</a></li>
				</ul>
			</nav>
		</div>
	</header> -->
<div class="content">
	<div class="container">
		
		<?php

		$conn = makeConn();

		if(isset($_GET['id'])) {

			if($_GET['id']=="new") {
				makeProductForm($empty_product);
			} else {
				$rows = getRows($conn,"SELECT * FROM `product` WHERE `id`='{$_GET['id']}'");
				makeProductForm($rows[0]);
			}

		} else {


		?>
		

		
		
		
		<h2>Product</h2>

		<div class="itemlist">
		<?php

		$rows = getRows($conn,"SELECT * FROM `product`");

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