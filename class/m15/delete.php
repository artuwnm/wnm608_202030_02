<?php

include "db_connect.php";

$query_string = "
			DELETE FROM products
			WHERE name = 'Glade Nutcracker'
		";
$result = $conn->query($query_string);