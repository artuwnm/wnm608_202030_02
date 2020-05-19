<?php

include "../lib/php/functions.php";
include "../parts/templates.php";
include "../parts/meta.php";

$users = getData("../data/users.json");

// CRUD = CREATE READ UPDATE DELETE

// file_put_contents, json_encode, explode, $_POST


function showUserPage($user) {
$classes = implode(", ",$user->classes);
echo <<<HTML
<div>
	<a href="admin/users.php">Back</a>
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
HTML;
}



?><!DOCTYPE html>
<html lang="en">
<head>
	<title>User Admin</title>

	<?php include "../parts/meta.php" ?>
</head>
<body>

	<header class="navbar">
		<div class="container display-flex">
			<div class="flex-stretch">
				<h1>User Admin</h1>
			</div>
			<nav class="nav flex-none">
				<ul class="display-flex">
					<li><a href="admin/users.php">User List</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<div class="container">
		<div class="card soft">

			<?php

			if(isset($_GET['id'])) {

				showUserPage($users[$_GET['id']]);

			} else {


			?>

			<h2 class="display-inline-block">User List</h2>
			<h3 class="add-new btn light display-inline-block"> <a href="admin/edit.php">Add New User</a> </h3>

			<ol>
			<?php

			foreach($users as $i=>$user) {
				echo "<li>Cyrus Choi
					<a href='admin/users.php?id=0'>View Details</a>
					</span></li>
					<li>Cecelia Cao
					<span>
					<a href='admin/users.php?id=1'>View Details</a>
					</span></li>
					<li>Yuezhou Yu
					<span>
					<a href='admin/users.php?id=1'>View Details</a>
					</span></li>
					<li>Huan Meng
					<span>
					<a href='admin/users.php?id=1'>View Details</a>
					</span></li>										
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