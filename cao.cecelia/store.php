<?php

include_once "lib/php/function.php";
include_once "parts/templates.php";


$result = getCartItems();

// print_p($result);

?><!DOCTYPE html>
<html lang="en">
<head>
	
	<title>Store</title>
	<?php include "parts/meta.php" ?>


</head>

<body>
		<?php include "parts/navbar.php" ?>

		<div class="container">
		<h2>Find Our Store!</h2>
		<div class="grid gap">
			
			<div class="col-xs-12 col-xl-6">
			<div class="imagealign flex-start">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.2304147757163!2d-122.40866428468206!3d37.784639579757595!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085816a9105e97d%3A0x1e394bd7f371deb!2sAPM%20Monaco%20San%20Francisco!5e0!3m2!1szh-CN!2sus!4v1589178675707!5m2!1szh-CN!2sus"  frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
		</div>
			</div>
			<div class="col-xs-12 col-xl-6">
			<h3>San Francisco</h3>
			<p style="font-size: 15px">Flagship Store</p>
			<h4>350 Post Street<br>San Francisco, CA 94108</h4>
			<p style="font-size: 15px">**Effective March 17, 2020, this location is closed until further notice
				<br>Mon.-Sat.: 10:00AM - 7:00PM
				<br>Sun.: 11:00AM - 6:00PM</p>
			<p style="font-size: 15px">(415) 781 7000
				<br>info@pilesonpearls.com</p>
			
		</div>
			</div>
		</div>
		<?php include "parts/footer.php" ?>
</body>
</html>