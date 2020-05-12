  <?php

    include_once "lib/php/functions.php";
    include_once "parts/templates.php";
    
    $result = getRows(
        makeConn(),
        "SELECT *
	FROM `products`
	ORDER BY `date_create` DESC
	LIMIT 12
	"
    );

    // print_p($result);

    ?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
      <title>FenFong: Handsoaps</title>

      <?php include "parts/meta.php" ?>

  </head>

  <body>

      <?php include "parts/header.php" ?>




      <div class="container">
		<div class="nav-crumbs uppercase margin-top-2">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="product_list.php">Products</a></li>
				<li><a href="product_item.php">Hand Soaps
					</a></li>
			</ul>
		</div>
    </div>
    
      <div class="container">
          <div class="card">
              <h2>All Hand Soaps</h2>

              <div class="grid gap">
                  <?php

                    echo array_reduce($result, 'productListTemplate');

                    ?>
              </div>
          </div>
      </div>

      <?php include "parts/footer.php" ?>

  </body>

  </html>