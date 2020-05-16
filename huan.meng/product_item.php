 <!DOCTYPE html>
<html lang="en">
<head>
		<title>Product Item</title>
		<?php include "parts/meta.php" ?>
</head>
<body>
	<?php include "parts/navbar.php" ?>
	<div class="container">
		<div class="space"></div>
		<div class="row">
			<div class="col-sm-12 col-lg-6">
				<img src="img/row_2_1.png" style="width: 100%; height: 100%">
				<div class="flex-parent">
					<img class="flex-child-gutter" src="img/row_2_1.png" style="width: 100px; height: 100px;">
					<img class="flex-child-gutter" src="img/row_2_1.png" style="width: 100px; height: 100px;">
					<img class="flex-child-gutter" src="img/row_2_1.png" style="width: 100px; height: 100px;">
					<img class="flex-child-gutter" src="img/row_2_1.png" style="width: 100px; height: 100px;">
				</div>
			</div>
			<div class="col-sm-12 col-lg-6 ">
				<h2>Fruit Party Ice cream Cake</h2>
				<p>The orange flavor ice cream topping and a strawberry ice cream ball cone give more fun experience to the traval of taste.</p>
				<hr>
					<div class="description-price">$55.00</div>
					<div class="qty-input">
						<i class="less">-</i>
						<input type="text" value="1">
						<i class="more">+</i>
					</div>
					<button type="button" class="main-button" id="js-increase-cart">Add to Cart
					</button>
			</div>

		</div>
	</div>
	<div class="space"></div>
		<footer>
		<div class="container">
				<div style="text-align: center; margin-top: 100px;">
						©Designed and Coded by Huan Meng
				</div>
		</div>
	</footer>
</body>
</html>
