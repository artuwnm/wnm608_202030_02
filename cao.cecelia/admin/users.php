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



			<?php

			if(isset($_GET['id'])) {

				showUserPage($users[$_GET['id']]);

			} else {


			?>

			

			<ol>
			<?php

			foreach($users as $i=>$user) {
				echo "<li>
					<a href='admin/users.php?id=$i'>$user->name</a>
				</li>";
			}

			?>
			</ol>

			<?php

			}

			?>


		</div>

		
	</div>
	
</body>
</html>