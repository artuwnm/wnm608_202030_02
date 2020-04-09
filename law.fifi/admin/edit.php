<?php

include "../lib/php/function.php";
// require "users.php";

$users = getData("../data/users.json");
// print_p($users[$_GET['id']]);

function showEditPage($user){

// 	print_p($user->classes);
$classes = $user['classes'];

if (is_array($classes)== true) {
	# code...
$classes = implode(",", $user['classes']);
}else{
$classes = $user['classes'];

}
// if (is_array($user->classes)==true) {
// 	# code...
// 	$classes = implode(",", $user->classes);

// }else{
	
// 	$classes = explode(",", $user->classes);
// 	print_p(explode(",", $user->classes));
// }


echo <<<HTML

<h2>Edit User: {$user['name']} </h2>
	
	<form action="" class="form form-control" method="post">
		<label for="name">Name:</label>
		<input  class="form-basic" type="text" id="name" name="name" value="{$user['name']}">
		<label for="type">Type:</label>
		<input  class="form-basic" type="text" id="type" name="type" value="{$user['type']}">
		<label for="email">Email:</label>
		<input  class="form-basic" type="text" id="email" name="email" value="{$user['email']}">
		<label for="classes">Classes:</label>
		<input  class="form-basic" type="text" id="classes" name="classes" value="$classes">
		<input class="form-basic-button uppercase" type="submit" name="submit" value="submit">

	</form>
HTML;

if($_SERVER['REQUEST_METHOD'] === 'POST'){

	// $users = getData("../data/users.json");
	
	// $classes = explode(",", $_POST['classes']);
	print_p($_GET['id']);

	
	// $_POST = array_merge($user->classes,explode(",", $_POST['classes']) );
	// print_p($_POST);
	// print_p($_SERVER);

	// $newData = json_encode($_POST);

	updateUser($_POST,$_GET['id']);
	
}

}
?><!DOCTYPE html>
<html>
	<head>
		<?php include "../parts/meta.php" ?>
		
		<title>User Admin</title>
	</head>
	<body>

		<div class="navbar">
			<div class="container display-flex ">
				<div class="flex-stretch">
					<h1>User Admin</h1>
				</div>
				<nav class="nav-flex">
					<ul class="display-flex flex-justify-center">
						<li><a href="admin/users.php">USER LIST</a></li>
					</ul>
				</nav>
			</div>
		</div>
		
		<div class="container">
			<div class="card">

<?php

if (isset($_GET['id'])) {

	showEditPage($users[$_GET['id']]);
}


?>				
			</div>
		</div>


	</body>

</html>