
<?php 

include "db_connect.php";

$query_string = "
INSERT INTO `products`
(
	`id`,
	`name`,
	`image`,
	`date_create`,
	`category`,
	`fragrant`,
	`dimensions`,
	`container_material`,
	`burn_time`,
	`price`,
	`other_highlights`,
	`description`
)
VALUES
(
	NULL,
	'Glade Nutcracker',
	'img/13.jpg',
	NOW(),
	'Non-Floral',
	'Hazelnut',
	'3.25 inches(H) X 3.25 inches(W) X 3.25 inches (D)',
	'glass',
	'60 hours',
	2.99,
	'Enhance the atmosphere of any room with the comforting glow of candlelight. Glade Jar Candles quickly fill your home with a combination of alluring fragrance and warm light. Warm. Indulgent. Swirls of roasted hazelnuts and sweet pralines. Dusted with notes of creamy vanilla bean upon dollops of almond butter. Delight in the sweetness of the season.',

	'Do not use if glass is chipped or cracked. Trim wick to 1/4 inch before each lighting. Keep candle free of matches and all material. Do not burn on cold, wet or unstable surface. Burn away from drafts. Never touch or move while lit, or until wax hardens. Never burn more than four hours. Stop use when 1/4 inch of wax remains. Do not extinguish with water. Do not reuse. Discard glass jar after use. Lead-free wick.'
)
";

$result = $conn->query($query_string);

if($conn->errno) die($conn->error);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add New Product</title>
	<?php include "parts/head.php" ?>
</head>
<body>
	<div class="paddingtopmiddle"></div>
	<div class="card linecenter" style=" max-width:400px; margin-right: auto; margin-left: auto;">
		<h1 style="color:var(--color-dark);">Congratulations!</h1>
		<p style="color:var(--color-dark);">You have added a new product to product list.</p>
				<div class="grid">
				<div class="row gutters">
					<div class="col-sm-1"></div>
					<div class="col-sm-10 linecenter">
						<img src="img/13.jpg" class="media-image">
					</div>
					<div class="col-sm-1"></div>
					<div class="col-sm-1"></div>
					<div class="col-sm-5" style="text-align: left">Glade Nutcracker</div>
					<div class="col-sm-5" style="text-align: right">Fragrant: Hazelnut</div>
					<div class="col-sm-1"></div>
					<div class="col-sm-1"></div>
					<div class="col-sm-5" style="text-align: left">Category: Non-Floral</div>
					<div class="col-sm-5" style="text-align: right">Price: $2.99</div>
				</div>
				</div>
		<div class="button paddingtopmiddle paddingbottommiddle linecenter"><a href="product_list.php" style="padding: 1.5em 8em">Confirm</a></div>
	</div>
</body>
</html>