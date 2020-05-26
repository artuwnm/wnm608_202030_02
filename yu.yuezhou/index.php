<!DOCTYPE html>
<html>
<head>
    <title>Sports Sniper</title>
    <?php include "parts/meta.php" ?>
</head>
<body>
<?php include "parts/navbar.php" ?>
<div class= "slideshow-container" style="width: 95%;">
    <div class="pictures">
        <img src="img/1.jpg" style="width:90%;">
        <a class="button" href="product_list.php?n=2">SHOP</a>

    </div>
</div>
<br>
<br>
<br>

<div class="grid gap" style="width: 95%;">
    <div class="col-xs-12 col-md-4">
        <figure class="product-figure overlay">
            <img src="img/2.jpg" alt="">
            <figcaption>
                <h4>BAGS</h4>
            </figcaption>
        </figure>
    </div>
    <div class="col-xs-12 col-md-4">
        <figure class="product-figure overlay">
            <img src="img/3.jpg" alt="">
            <figcaption>
                <h4>SHOES</h4>
            </figcaption>
        </figure>
    </div>
    <div class="col-xs-12 col-md-4">
        <figure class="product-figure overlay">
            <img src="img/4.jpg" alt="">
            <figcaption>
                <h4>SPORTSWEAR</h4>
            </figcaption>
        </figure>
    </div>
</div>
<div class="view-window display-flex flex-align-center flex-justify-center" style="background-image:url(./img/5.jpg); width: 95%; margin: 0 auto;">
    <div class="background-image">
    </div>
</div>
<?php include "parts/footer.php" ?>
</body>
</html>
