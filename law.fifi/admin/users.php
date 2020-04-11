<?php

include "../lib/php/function.php";

$users = getData("../data/users.json");

// print_p($users);

function showUserPage($user){

$classes = $user->classes;

$classes = implode(",", $user->classes);

echo <<<HTML

<h6>
	<a href="admin/users.php" style="padding-left: 0;">&larr; BACK</a>
</h6>

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

<div class="actions-panel">
	<span> <a href="admin/edit.php?id={$_GET['id']}">Edit</a></span>
	<span><a href="admin/remove.php?id={$_GET['id']}">Remove</a></span>
</div>


HTML;
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
						
						showUserPage($users[$_GET['id']]);


					}else{

				 ?>

				<h2 class="display-inline-block">User List</h2>
				<h3 class="add-new btn light display-inline-block"> <a href="admin/edit.php?id=new">Add New User</a> </h3>

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