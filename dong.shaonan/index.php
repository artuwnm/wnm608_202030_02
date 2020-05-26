
<head>
<link href="https://fonts.googleapis.com/css?family=Montserrat|Poppins|Roboto&display=swap" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<?php include "parts/meta.php" ?>
</head>


<script src="js/products.js"></script>

<body>

<main>
  <div class="logo">
     <a href="index.php" style="height: 80px;">
        <img src="images/logo.png" style="height: 70px">
      </a>
  </div>
 
  <ul class="museum" role="navigation">
    <li class="active"><a href="index.php">Home</a></li>
    <li><a href="product_list.php">Store</a></li>
    <li><a href="about.php">About</a></li>
    <li><a href="product_cart.php">Cart</a></li>
    <li><a href="admin/index.php">Admin</a></li>
  </ul>
</main>
<div class="slideshow-container">

<div class="mySlides fade">
  <img src="images/a.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="images/b.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="images/c.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="images/d.jpg" style="width:100%">
</div>
<div class="centered" style="color: white"><h1>Explore <br> Film Roll <br> World</h1></div>

</div>
<br>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
  <span class="dot"></span> 
</div>
<script src="js/slideshow.js"></script>

<br>
<br>
<div class="container">
<div class="grid gap">
        <div class="col-lg-4 col-xs-12">
          <div class="card">
           <figure class="product-figure soft">  
            <a href="product_item.php?id=1" class="display-block">
             <img src="images/Tri-X400.jpg" alt>
           </a>
        <figcaption class="product-description">
          <div class="product-price">$6.49</div>
          <div class="product-title">Kodak Professional Tri-X 400</div>

        </figcaption> 
      </figure>
    </div>
  </div>
        <div class="col-lg-4 col-xs-12">
          <div class="card">
           <figure class="product-figure soft">  
            <a href="product_item.php?id=2" class="display-block">
             <img src="images/Ektar100.jpg" alt>
           </a>
        <figcaption class="product-description">
          <div class="product-price">$8.99</div>
          <div class="product-title">Kodak Professional Ektar 100</div>

        </figcaption> 
      </figure>
    </div>
  </div>
  <div class="col-lg-4 col-xs-12">
          <div class="card">
           <figure class="product-figure soft">  
            <a href="product_item.php?id=3" class="display-block">
             <img src="images/Ilford Delta 400.jpg" alt>
           </a>
        <figcaption class="product-description">
          <div class="product-price">$7.99</div>
          <div class="product-title">Ilford Delta 400</div>

        </figcaption> 
      </figure>
    </div>
  </div>
</div>
</div>

<?php include "parts/footer.php" ?>
</body>
</html>