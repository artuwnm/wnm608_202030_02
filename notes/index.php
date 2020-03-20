<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Learning PHP</title>
</head>
<body>
	<?php

	// phpinfo();

	// php is a loosely typed, backend (server-side) scripting language

	echo "<div>Hello World</div>";

	// Variables
	$a = 5;

	echo $a;



	// String Interpolation
	echo "<div>I have $a things</div>";
	echo '<div>I have $a things</div>';

	?>

	<hr>
	<div>Here's some other stuff.</div>

	<?php

	// Value Types


	// Numbers
	// Float
	$b = 0.33333;
	// Integer
	$b = 15;

	// String
	$name = "Yerguy2";

	// Boolean
	$isYes = true;


	// Math
	// PEMDAS (Order of Operation)
	echo (5 - 4) * 2;

	// Concatenation
	echo "<div>b + a " . " = c</div>";
	echo "<div>$b + $a = " . ($a+$b) . "</div>";

	?>


	<hr>
	<div>This is my name</div>
	<div>

	<?php

	$firstname = "Heewon";
	$lastname = "Moon";
	$fullname = "$firstname $lastname";
	echo $fullname; 

	?>
	</div>


</body>
</html>