  <?php

	include_once "lib/php/functions.php";
	$p = cartItemByID($_GET['id']);
	$o = getRows(makeConn(), "SELECT * FROM products WHERE id = '{$_GET['id']}'")[0];
	?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
      <title>Item Added to Cart</title>

      <?php include "parts/meta.php" ?>

  </head>

  <body>

     <?php include "parts/navbar.php" ?>

      <div class="container">
          <div class="nav-crumbs uppercase margin-top-2">
              <ul>
                  <li><a href="home.php">Home</a></li>
                  <li><a href="product_cart.php">My Cart</a></li>

              </ul>
          </div>
          <div class="card">
              <div class="card">
                  <h2>Cart Confirmation</h2>
                  <div>
                      Thank you for adding <?= $p->amount ?> of the <?= $o->name ?> to the cart.
                  </div>
              </div>

              <div class="card">
                  <div class="display-flex">
                      <div class="flex-none">
                          <form action="product_list.php">
                              <input type="submit" class="site-button" value="Back to Shopping" />
                          </form>

                      </div>
                      <div class="flex-stretch"></div>
                      <div class="flex-none">
                          <form action="product_cart.php">
                              <input type="submit" class="site-button" value="Check Cart" />
                          </form>

                      </div>
                  </div>
              </div>
          </div>
      </div>
<!-- 
      <?php include "parts/footer.php" ?> -->

  </body>

  </html>