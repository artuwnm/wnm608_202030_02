<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Learning PHP - Tiffany Zheng</title>
</head>
<body>
	<?php

	// phpinfo();

	echo "Hello World";

	echo "<div>Hello World</div>";

	// Variables

	$a = 5;

	echo $a;

	// String Interpolation

	echo "<div>I have $a things</div>";
	echo '<div>I have $a things</div>';

	?>

	<hr>
	<div>Here's some other stuff</div>

	<?php

	// Value Types

		// Numbers (number literal)

			// Float
			$b = 0.333333;

			// Integer
			$b = 15;

		// String (string literal)
		$name = "Tiffany8";

		// Boolean
		$isYes = true;

	// Math

		// PEMDAS (Order of Operations)
		echo (5 - 4) * 2;

	// Concatenation
	echo "<div>b + a" . " = c</div>"; // b + a =c
	echo "<div>$b + $a = $a + $b</div>"; // 15 + 5 = 5 + 15
	echo "<div>$b + $a = " . ($a + $b) . "</div>"; // 15 + 5 = 20

	?>

	<hr>
	<div>This is my name</div>
	<div>
		<?php

		$firstname = "Tiffany";
		$lastname = "Zheng";
		$fullname = "$firstname $lastname";

		echo $fullname;

		?>
	</div>

	<hr>

	<div>
		<a href="?name=Tiffany">Tiffany</a>
		<a href="?name=Justin">Justin</a>
	</div>

	<?php

	// Superglobal
	echo "<div>My name is {$_GET['name']}</div>";

	?>

	<div>
		<a href="?name=Ham&type=h1">H1</a>
		<a href="?name=Ham&type=textarea">Text Area</a>
	</div>

	<?php

	// Superglobal
	echo "<{$_GET['type']}>My name is {$_GET['name']}</{$_GET['type']}>";

	?>

	<hr>

	<?php 

	// Array
	$colors = array("red", "green", "blue");

	echo $colors[1];

	echo "
		<br>$colors[0]
		<br>$colors[1]
		<br>$colors[2]
		";

	echo count($colors);

	?>

	<hr>

	<?php

		// Associative Array (string-indexed array)

		$colorsAssociative = [
			"red"=>"#f00",
			"green"=>"#0f0",
			"blue"=>"#00f"
		];

		echo $colorsAssociative['red']."<br>";

	?>

	<div style="color:<?= $colorsAssociative['green'] ?>">
		This text is green.
	</div>

	<?php

	// Casting
	$c = "$a";
	$d = $c*1;

	$colorsObject = (object)$colorsAssociative;

	echo "<hr>";

	// Array Index Notation

	echo $colors[0]."<br>";
	echo $colorsAssociative['red']."<br>";
	echo $colorsAssociative[$colors[0]]."<br>";

	// Object Property Notation

	echo $colorsObject->red."<br>";
	echo $colorsObject->{$colors[0]}."<br>";

	echo "<hr>";

	print_r($colors);

	echo "<hr>";

	print_r($colorsAssociative);

	echo "<hr>";

	echo "<pre>",print_r($colorsObject),"</pre>";

	// Functions

	function print_p($v) {
		echo "<pre>",print_r($v),"</pre>";
	}

	print_p($_GET);


	?>























</body>
</html>