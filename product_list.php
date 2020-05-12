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
      <title>FenFong: Product List</title>

      <?php include "parts/meta.php" ?>

  </head>

  <body>

      <?php include "parts/header.php" ?>


      <div class="container">
          <div class="card soft">
              <h2>Product List</h2>

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