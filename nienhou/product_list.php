  <?php

  include_once "lib/php/functions.php";

  ?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <title>FenFong: Handsoaps</title>

    <?php include "parts/meta.php" ?>
    <script src="lib/js/functions.js"></script>
    <script src="js/templates.js"></script>
    <script src="js/list.js"></script>

  </head>

  <body>

    <?php include "parts/header.php" ?>



    <div class="container">
      <div class="card">
        <h2>All Hand Soaps</h2>


        <div class="row">
          <div class="dropdown">
            <button class="dropbtn">Categories</button>
            <div class="dropdown-content">
              <a href="#" class="form-button js-filter" data-column="category" data-value="">All</a>
              <a href="#" class="form-button js-filter" data-column="category" data-value="Handmade Soap">Handmade Soap</a>
              <a href="#" class="form-button js-filter" data-column="category" data-value="Hand Wash">Hand Wash</a>
              <a href="#" class="form-button js-filter" data-column="category" data-value="Candles">Candles</a>
            </div>
          </div>
       
          <div class="form-control">
            <!-- .form-select>select>option -->
            <div class="form-select">
              <strong>Sort by</strong>
              <select class="js-sort">
                <option value="1">Newest</option>
                <option value="2">Oldest</option>
                <option value="3">High Price</option>
                <option value="4">Low Price</option>
              </select>
            </div>
          </div>
        </div>
        </br>


        <div class="grid gap productlist"></div>
      </div>
    </div>

    <?php include "parts/footer.php" ?>

  </body>

  </html>