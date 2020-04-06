<?php

include "../lib/php/function.php";

$users = getData("../data/users.json");




function showUserPage($user) {
$classes = implode(", ",$user->classes);
echo <<<HTML
<div>
	<a href="admin/users.php"><h4 style="color: white">&lt; BACK</h4></a>
</div>
<div>
	<h2>$user->name</h2>
	<div>
		<strong>Type</strong>
		<span>$user->type</span>
	</div>
	<div>
		<strong>Email</strong>
		<span>$user->email</span>
	</div>
	<div>
		<strong>Classes</strong>
		<span>$classes</span>
	</div>
</div>
<div>
	<a href="admin/edit.php" class="linkeditusers">EDIT</a>
</div>

HTML;
}

//CRUD
//file_put_contents, json_encode, explode, $_POST


?><!DOCTYPE html>
<html lang="en">
<head>
	<title>User Admin</title>

	<?php include "../parts/meta.php" ?>
</head>
<body>

	<div class="sidenav">
  <img  src="images/horizontallogowhite.png" alt="Nature" style="width: 80%">
  <h3 style="padding-left: 16px; color: white">User Admin</h3>
  <a href="admin/users.php">User List</a>
  <a href="index.php">Back</a>
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

	<div class="container">
		<h2 style="margin-left: 180px">User List</h2>

	

		<div class="card side">
			<?php $referer = filter_var($_SERVER['HTTP_REFERER'], FILTER_VALIDATE_URL);
	
	if (!empty($referer)) {
		
		echo '<a href="'. $referer .'" title="Return to the previous page"><h4 style="color: white">&lt; BACK</h4></a>';
		
	} else {
		
		echo '<p><a href="javascript:history.go(-1)" title="Return to the previous page">&laquo; Go back</a></p>';
		
	}
?>

<form action="edit.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr> 
				<td>Classes</td>
				<td><input type="text" name="classes"></td>
			</tr>
		</table>
		<a href="admin/edit.php" class="linkeditusers">ADD</a>
	</form>

		</div>

		
	</div>
	
</body>
</html>