<?php

include "../lib/php/functions.php";

$filename = "../data/users.json";
$users = getData($filename);

// file_put_contents, json_encode, explode, $_POST

// print_p([$_GET,$_POST]);

$empty_user = (object)[
	"name"=>"",
	"type"=>"",
	"email"=>"",
	"classes"=>[]
];


if(isset($_GET['action'])) {
	if($_GET['action']=="update") {
		$users[$_GET['id']]->name = $_POST['user-name'];
		$users[$_GET['id']]->type = $_POST['user-type'];
		$users[$_GET['id']]->email = $_POST['user-email'];
		$users[$_GET['id']]->classes = explode(", ",$_POST['user-classes']);

		file_put_contents($filename, json_encode($users));

		header("location:{$_SERVER['PHP_SELF']}?id={$_GET['id']}");
	}
	if($_GET['action']=="create") {
		$empty_user->name = $_POST['user-name'];
		$empty_user->type = $_POST['user-type'];
		$empty_user->email = $_POST['user-email'];
		$empty_user->classes = explode(", ",$_POST['user-classes']);

		$id = count($users);

		$users[] = $empty_user;
		// array_push($users,$empty_user);

		file_put_contents($filename, json_encode($users));

		header("location:{$_SERVER['PHP_SELF']}?id=$id");
	}
	if($_GET['action']=="delete") {

		array_splice($users, $_GET['id'], 1);

		file_put_contents($filename, json_encode($users));

		header("location:{$_SERVER['PHP_SELF']}");
	}
}



function showUserPage($user) {

$id = $_GET['id'];
$classes = implode(", ",$user->classes);
$addoredit = $id=='new' ? 'Add' : 'Edit';
$createorupdate = $id=='new' ? 'create' : 'update';

echo <<<HTML
<div class="back-link">
	<a href="{$_SERVER['PHP_SELF']}"><span class="chevron left"></span> Back</a>
</div>
<form method="post" action="{$_SERVER['PHP_SELF']}?id=$id&action=$createorupdate">
	<div class="padding">
		<span class="user-name">$addoredit User</span>
		<span class="inline-button"><a href="{$_SERVER['PHP_SELF']}?id=$id&action=delete">Delete User</a></span>
	</div>
	<div class="row container">
		<table class="admin-form-table">
			<tbody>
				<tr>
					<td><label for="user-name" class="admin-form-label">Name</label></td>
					<td><input type="text" class="admin-form-input" value="$user->name" id="user-name" name="user-name"></td>
				</tr>
				<tr>
					<td><label for="user-type" class="admin-form-label">Type</label></td>
					<td><input type="text" class="admin-form-input" value="$user->type" id="user-type" name="user-type"></td>
				</tr>
				<tr>
					<td><label for="user-email" class="admin-form-label">Email</label></td>
					<td><input type="text" class="admin-form-input" value="$user->email" id="user-email" name="user-email"></td>
				</tr>
				<tr>
					<td><label for="user-classes" class="admin-form-label">Classes</label></td>
					<td><input type="text" class="admin-form-input" value="$classes" id="user-classes" name="user-classes"></td>
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
			<li><a href="<?= $_SERVER['PHP_SELF'] ?>">User List</a></li>
			<li><a href="<?= $_SERVER['PHP_SELF'] ?>?id=new">Add New User</a></li>
		</ul>
	</div>
</header>

<div class="container admin">
	<div class="card soft user-list">
		<?php 

		if(isset($_GET['id'])) {

			// Conditional Ternary
			showUserPage(
				$_GET['id']=="new" ?
				$empty_user :
				$users[$_GET['id']]
			);

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