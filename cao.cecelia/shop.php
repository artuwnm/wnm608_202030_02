<?php

include_once "lib/php/function.php";
include_once "parts/templates.php";

$result = getRows(
	makeConn(),
	"SELECT *
	FROM `product`
	ORDER BY `date_create` DESC
	LIMIT 12
	"
);

// print_p($result);

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Store: Product List</title>

	<?php include "parts/meta.php" ?>

</head>
<?php include "parts/navbar.php" ?>
	
	<div class="homebgimage">

	<div class="advertisement">
	<h1>HAVE AN EXCLAMATION POINT FOR YOU</h1>
	<h4>Enjoy every moment in your life</h4>
	</div>
	</div>
<body>
	<div class="selectbox" align="right">
			<div class="dropdown">
    <select name="one" class="dropdown-select">
      <option value="">Filter By</option>
      <option value="1">Option #1</option>
      <option value="2">Option #2</option>
      <option value="3">Option #3</option>
    </select>
  </div>
		</div>

	<div class="container">
	


		<div class="grid gap">
		<?php

		echo array_reduce($result,'productListTemplate');

		?>
		</div>
	</div>
	
</body>
<?php include "parts/footer.php" ?>
</html>