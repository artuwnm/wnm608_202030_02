<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php

	//phpinfo();

	//php is a loosely type, backend (server-side) scripting language
	//javascript is frontend, client-side
	//ehco is the only thing will show on screen
	//can write html in php

	echo "<div>Hello World</div>";


	//Variables
	//$ in front of every variable name

	$a = 5;

	echo $a;


	//string interpolation, only use double quote, single quote dose not work with smart thing
	//A string has quotation marks

	echo "<div>I have $a things</div>"

	?>

	<hr>

	<div> Here is some other stuff. </div>


	<?php

	//Value Types

	//Numbers
	//Float (小数); integer
	//php dose not care if float 
	$b = 0.3333;

	//String
	$name = "Peiyun";

	//Boolean
	$isYes = true;


	//Math
	//PEMDAS (Order of Operation) 括号 乘除 加减
	echo 5 - 4 * 2;

	//Concatenation
	echo "<div>b + a" . "=c</div>";
	echo "<div>$b + $a = " . ($a+$b) . "</div>";

	?>

	<hr>

	<div>This is my name</div>
	<div>
	<?php

	$firstname = "Peiyun";
	$lastname = "Li";
	$fullname = $firstname . " " . $lastname;



	echo $fullname;

	?>
	</div>

	<hr>

	<?php

	//superglobal, commonly used varibles, php.net
	// use {} around complex variable
	//interactive through changing url

	echo "<div>My name is {$_GET['name']}</div>";

	?>

	<hr>

	<?php

	//Array
	//string can be mult line
	$colors = array("red","green","blue");

	echo $colors[1];

	echo count($colors);

	?>

	<hr>

	<?php
	//Associative Array
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
	

	<hr>



	<?php
	//casting: changing value type
	$c  = "$a";

	$colorsObject = (object)$colorsAssociative;

	echo $colorsObject->red.
	//object has a red property

	

	//print_r <pre></pre>

	//function

	function print_p($v) {
		echo ""
	}
?>
</body>
</html>