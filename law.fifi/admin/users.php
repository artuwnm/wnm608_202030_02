<?php

include "../lib/php/function.php";

$users = getData("../data/users.json");
$empty_user= (object)[
	"name"=> "",
	"type"=> "",
	"email"=> "",
	"classes"=> []

];

// print_p($users);

if(isset($_GET['action'])){

	if($_GET['action']=='update'){

		$users[$_GET['id']]->name= $_POST['user-name'];
		$users[$_GET['id']]->type= $_POST['user-type'];
		$users[$_GET['id']]->email= $_POST['user-email'];
		$users[$_GET['id']]->classes= explode(",",$_POST['user-classes']);

		file_put_contents("../data/users.json", json_encode($users));

		// print_p($users);

		header("location:{$_SERVER['PHP_SELF']}?id={$_GET['id']}");

	}

	if($_GET['action']== 'create'){

		$empty_user->name= $_POST['user-name'];
		$empty_user->type= $_POST['user-type'];
		$empty_user->email= $_POST['user-email'];
		$empty_user->classes= explode(",",$_POST['user-classes']);

		$users[]= $empty_user;

		file_put_contents("../data/users.json", json_encode($users));

		$id = count($users);

		header("location:{$_SERVER['PHP_SELF']}?id=$id");

	}

	if($_GET['action'] == 'delete'){

		array_splice($users, $_GET['id'], 1);

		file_put_contents($filename, json_encode($users));

		header("location:{$_SERVER['PHP_SELF']}");
	}
}



function showUserPage($user){
$id = $_GET['id'];


$classes = implode(",", $user->classes);

$createorupate = $id =='new'?"create":"update";
$deletebutton = $id =='new'? "":"<a href='{$_SERVER['PHP_SELF']}?id=$id&action=delete'>Delete</a>";
$addoredit= $id == 'new'?"Add":"Edit";

$show_user = $id =='new'?" ":<<<HTML
<div class="card">
<div>
<h2>User Details</h2>
</div>

<div>
<h4>Name</h4>
<span>$user->name</span>
</div>

<div>
<h4>Type</h4>
<span>$user->type</span>
</div>

<div>
<h4>Email</h4>
<span>$user->email</span>
</div>

<div>
<h4>Classes</h4>
<span>$classes</span>
</div>
</div>

HTML;

echo <<<HTML

<div class="display-flex card transparent" style="margin: 0;">
	
	<a href="{$_SERVER['PHP_SELF']}"  class="flex-none">&larr; BACK</a>	
	<a class="flex-stretch"></a>
	$deletebutton
</div>

<div>$show_user</div>

<form class="form card flat" action="{$_SERVER['PHP_SELF']}?id=$id&action=$createorupate" method="post">
	<h2>$addoredit User</h2>
	<div class="form-control">
		<label for="user-name" class="form-label">Name</label>
		<input class="form-input" type="text" placeholder="User's Name" id="user-name" name="user-name" value="$user->name">
	</div>
	<div class="form-control">
		<label for="user-type" class="form-label">Type</label>
		<input class="form-input" type="text" placeholder="User's Type" id="user-type" name="user-type" value="$user->type">
	</div>
	<div class="form-control">
		<label for="user-email" class="form-label">Email</label>
		<input class="form-input" type="text" placeholder="User's Email" id="user-email" name="user-email" value="$user->email">
	</div>
	<div class="form-control">
		<label for="user-classes" class="form-label">Classes</label>
		<input class="form-input" type="text" placeholder="User's Classes" id="user-classes" name="user-classes" value="$classes">
	</div>
	<div class="form-control">
		<input class="form-button uppercase" type="submit" value="submit">
	</div>
</form>

HTML;


};


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
			
				
				<?php 

					if (isset($_GET['id'])) {
						
						showUserPage(
							$_GET['id']=="new" ?
							$empty_user :
							$users[$_GET['id']]
						);



					}else{

				 ?>
			
				<div class="card">
					<div class="display-flex ">
						<h2 class="flex-stretch margin-auto uppercase medium-color">User list</h2>
						<h3 class="flex-none"> <a class="btn light" href="<?= $_SERVER['PHP_SELF'] ?>?id=new">Add New User</a> </h3>
					</div>
					
					<ol>
						<?php 
						
								// for ($i=0; $i<count($users); $i++) { 
								// 	echo "<li>{$users[$i]->name}</li>";
								// };
						
							foreach ($users as $i=>$user) {
								// echo "<li><a href='admin/users.php?id=$i'>$user->name </a></li>";
							echo 	"<li>$user->name
										<span>
										<a href='admin/users.php?id=$i'>View Details</a>
										</span></li>";		
							}
										
						}
						
						?>
							 	
					</ol>
				</div>
			
			
		</div>

	</body>
</html>