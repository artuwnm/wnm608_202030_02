<?php

include "../lib/php/functions.php";

$users = getData("../data/users.json");

function showUserPage($user) {
$classes = implode(", ",$user->classes);
$i = $user;
echo <<<HTML
<div class="back-link">
	<a href="admin/users.php"><span class="chevron left"></span> Back</a>
</div>
<div class="padding">
	<span class="user-name">$user->name</span>
	<input class="inline-button" type="submit" value="Save Changes">
</div>
<div class="row container">
	<table class="admin-form-table">
		<tbody>
			<tr>
				<td><label for="input-type" class="admin-form-label">Type</label></td>
				<td><input type="text" class="admin-form-input" value="$user->type" id="input-type"></td>
			</tr>
			<tr>
				<td><label for="input-type" class="admin-form-label">Email</label></td>
				<td><input type="text" class="admin-form-input" value="$user->email" id="input-type"></td>
			</tr>
			<tr>
				<td><label for="input-type" class="admin-form-label">Classes</label></td>
				<td><input type="text" class="admin-form-input" value="$classes" id="input-type"></td>
			</tr>
		</tbody>
	</table>
</div>
HTML;
}

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin: User</title>

	<?php include "../parts/meta.php" ?>

</head>
<body>

<header class="store-header">
	<div class="row container">
		<div class="logo">
			<a href="index.php">
				<img src="images/stylista.png" alt="Stylista">
			</a>
		</div>
		<ul class="ctas display-flex">
			<li><a href="admin/users.php">User List</a></li>
		</ul>
	</div>
</header>

<div class="container admin">
	<div class="card soft user-list">
		<?php 

		if(isset($_GET['id'])) {

			showUserPage($users[$_GET['id']]);

		} else {

		?>

			<h1>User Admin</h1>
			<ol>
				<?php
				
				foreach($users as $i=>$user) {
					echo "<li>
							<h6>$user->name</h6><span class='inline-button'><a href='admin/users.php?id=$i'>View User</a></span>
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