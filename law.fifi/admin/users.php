<?php


include "../lib/php/function.php";

$users = getData("../data/users.json");

// print_p($users);

function showUserPage($user){
$classes = implode(",", $user->classes);

echo <<<HTML

<div>
<h2>$user->name</h2>
</div>

<div>
<h4>Classes</h4>
<span>$classes</span>
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

	<div class="navbar display-flex">
		<div class="container display-flex ">
			<div class="flex-stretch text-align-center logo">
				<h2>User Admin</h2>
			</div>
				<nav class="nav-breadcrumb flex-scretch ">
					<ul class="display-flex flex-justify-between">
						<li class="uppercase"><a href="admin/users.php">User List</a></li>
						
						
					</ul>
				</nav>
				
		</div>
		</div>
		

		<div class="container">
			<div class="card">
				
				<?php 

					if (isset($_GET['id'])) {
						# code...

						showUserPage($users[$_GET['id']]);
							// echo "User";

					}else{



				 ?>


				<h2>User List</h2>

				<ol>
					<?php 
					
							// for ($i=0; $i<count($users); $i++) { 
							// 	echo "<li>{$users[$i]->name}</li>";
							// };
					
						foreach ($users as $i=>$user) {
							echo "<li><a href='admin/users.php?id=$i'>$user->name </a></li>";
						}
					
						 ?>
					
						 <?php 
					
					
						 } 
					
					?>
						 	
				</ol>
			
			</div>
		</div>

	</body>
</html>