<?php

include "../lib/php/functions.php";

$users = getData("../data/users.json");




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

<div class="tnav-drop">
  <a href="">Back</a>
  <a href="">User List</a>

</div>

	<div class="container">
		<div class="card">

			<?php

			if(isset($_GET['id'])) {

				showUserPage($users[$_GET['id']]);

			} else {


			?>

			<h2>User List</h2>

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