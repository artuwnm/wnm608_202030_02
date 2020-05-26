<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	//phpinfo();
	echo "<div>Hello world</div>";
	//Variables
	$a=5;
	echo $a;
	echo "<div>I have $a things</div>";
	echo '<div>I have $a things</div>';
	?>
	<hr>
	<div>Here's some other stuff.</div>
	<<?php 
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

	$firstname="Han";
	$lastname="Li";
	$fullname=$firstname . " " . $lastname;
	echo $fullname . " " . " ";

	?>
	<hr>

	<?php

	// Superglobal
	echo "<div>My name is {$_GET['name']}</div>";

	?>

	</div>
</body>
</html>