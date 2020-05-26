<?php


include "../lib/php/function.php";

$notes = getData("note.json");
$users = getData("../data/users.json");

// print_p($users);

?><!DOCTYPE html>
<html>
	<head>
		<?php include "../parts/meta.php" ?>
		
		<title>Admin Reading Data</title>
	</head>
	<body>
	
		<?php include "../parts/navbar.php" ?>

		<div class="container">
			<div class="card">
				<h2>Notes</h2>
				<ul>
					<?php 

						for ($i=0; $i<count($notes->notes); $i++) { 
							echo "<li>{$notes->notes[$i]}</li>";
						};

					 ?>
				</ul>
			</div>
		</div>

	</body>
</html>