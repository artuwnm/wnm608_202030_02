<?php	

include "../lib/php/functions.php";

// $filename = "notes.json";
// $file = file_get_contents($filename);
// $notes = json_decode($file);

// $filename = "../data/users.json";
// $file = file_get_contents($filename);
// $users = json_decode($file);

$notes = getData("notes.json");
$users = getData("../data/users.json");

// print_p($users);

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin: Notes</title>

	<?php include "../parts/meta.php" ?>

</head>
<body>
	
	<?php include "../parts/header.php" ?>

	<div class="container">
		<h1 class="center">Notes</h1>
		<ul>
			<?php
			
			for($i=0; $i<count($notes->notes); $i++) {
				echo "<li>{$notes->notes[$i]}</li>";
			}

			?>
		</ul>
		<h1 class="center">Users</h1>
		<ul>
			<?php
			
			for($i=0; $i<count($users); $i++) {
				echo "<li>
						<strong>{$users[$i]->name}</strong>
						<span>, {$users[$i]->type}</span>
					</li>";
			}

			?>
		</ul>
	</div>

	<?php include "../parts/footer.php" ?>

</body>
</html>