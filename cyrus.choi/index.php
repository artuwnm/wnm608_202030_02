<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>GameStore</title>

  <?php include "parts/meta.php" ?>
  
</head>
<body>
  
    <?php include "parts/navbar.php" ?>



<div class="view-window hero-image display-flex flex-direction-column flex-align-center flex-justify-center" style="background-image:url(images/sl2.jpg)">
		<div class="hpt">
      <h2>There are good deals on Game Store everyday!</h2>
    </div>
    <div class="order">
       <a class="btn dark display-inline-block" href="product_list.php"><h2>SHOP NOW</h2></a>
		</div>
	</div>

<div class="main_title">
<h1>Categories</h1>
</div>
<hr width="50%">
<br>



<br>

   <div class="container">  
     <div class="grid gap productlist">  
      <div class="col-xs-6 col-md-4">
        <a href="product_list.php" class="display-block">
        <figure class="product-figure soft">
        <div class="product-image">
          <img src="images/logo2.png" class="hover-image">
          <img src="images/ca1.jpg" alt="Product Item" width="100%"></div>
        <figcaption class="product-description">
            <div><h3 class="title">Playstations</h3></div>
        </figcaption>
        </figure>
       </a>
      </div>

      <div class="col-xs-6 col-md-4">
        <a href="product_list.php" class="display-block">
        <figure class="product-figure soft">
        <div class="product-image">
          <img src="images/logo1.png" class="hover-image">          
          <img src="images/ca2.jpg" alt="Product Item" width="100%"></div>
        <figcaption class="product-description">
            <div><h3 class="title">Nintendo Switch</h3></div>
        </figcaption>
        </figure>
       </a>
      </div>

      <div class="col-xs-6 col-md-4">
        <a href="product_list.php" class="display-block">
        <figure class="product-figure soft">
        <div class="product-image">
          <img src="images/logo3.png" class="hover-image">               
          <img src="images/ca3.jpg" alt="Product Item" width="100%"></div>
        <figcaption class="product-description">
            <div><h3 class="title">Game Accessories</h3></div>
        </figcaption>
        </figure>
       </a>
      </div>            
     </div>

    </div>

<div class="main_title">
<h1>Good Deals</h1>
</div>
<hr width="50%">
<br>



<br>

   <div class="container">  
     <div class="grid gap productlist">  
      <div class="col-xs-6 col-md-4">
        <a href="product_item.php?id=1" class="display-block">
        <figure class="product-figure soft">
        <div class="product-image">
          <img src="images/ps1.jpg" alt="Product Item" width="100%"></div>
        <figcaption class="product-description">
            <div><h3 class="title">Gang Beasts</h3></div>
        </figcaption>
        </figure>
       </a>
      </div>

      <div class="col-xs-6 col-md-4">
        <a href="product_item.php?id=5" class="display-block">
        <figure class="product-figure soft">
        <div class="product-image">
          <img src="images/ps5.jpg" alt="Product Item" width="100%"></div>
        <figcaption class="product-description">
            <div><h3 class="title">Monster Hunter: World</h3></div>
        </figcaption>
        </figure>
       </a>
      </div>

      <div class="col-xs-6 col-md-4">
        <a href="product_item.php?id=6" class="display-block">
        <figure class="product-figure soft">
        <div class="product-image">
          <img src="images/ps6.jpg" alt="Product Item" width="100%"></div>
        <figcaption class="product-description">
            <div><h3 class="title">Pro Evolution Soccer 2018</h3></div>
        </figcaption>
        </figure>
       </a>
      </div>    

      <div class="col-xs-6 col-md-4">
        <a href="product_item.php?id=7" class="display-block">
        <figure class="product-figure soft">
        <div class="product-image">
          <img src="images/sw1.jpg" alt="Product Item" width="100%"></div>
        <figcaption class="product-description">
            <div><h3 class="title">Pokémon Shield</h3></div>
        </figcaption>
        </figure>
       </a>
      </div>  

       <div class="col-xs-6 col-md-4">
        <a href="product_item.php?id=9" class="display-block">
        <figure class="product-figure soft">
        <div class="product-image">
          <img src="images/sw3.jpg" alt="Product Item" width="100%"></div>
        <figcaption class="product-description">
            <div><h3 class="title">Mario Kart 8 Deluxe</h3></div>
        </figcaption>
        </figure>
       </a>
      </div>  
      
      <div class="col-xs-6 col-md-4">
        <a href="product_item.php?id=10" class="display-block">
        <figure class="product-figure soft">
        <div class="product-image">
          <img src="images/sw4.jpg" alt="Product Item" width="100%"></div>
        <figcaption class="product-description">
            <div><h3 class="title">The Legend of Zelda: Breath of the Wild</h3></div>
        </figcaption>
        </figure>
       </a>
      </div>  
                               
     </div>

    </div>




<br>
<br>
<br>
<br>


 


      <hr width="50%">
<br>

  <br>

  <div class="main_title">
      <h3>©2020 Cyrus Choi All Rights Reserved</h3>
  </div>
   
  </body>



</html>

