<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Vivi's Yard Sale</title>

	<?php include "parts/meta.php" ?>

</head>
<body>

	<?php include "parts/navbar.php" ?>

  <div class ="float-cart"><a href="product_cart.php"><img src="images/cart.png"></div></a>

	<div class="grid">
		<div class="col-6">
		<h1>Welcome to Vivi's Yard Sale</h1>
		<h3>Shop bags, shoes Jewleries and More</h3>
		</div>
		<div class="col-5">

	<div class="slideshow-container">
  			<div class="mySlides fade">
    		<img src="images/lg/b_lv_cmh_m.jpg">
    		<div class="slide-btn"><a href="product_list.php">Shop Now</a></div>
  			</div>

  			<div class="mySlides fade">
    		<img src="images/lg/b_lv_d_m.jpg">
    		<div class="slide-btn"><a href="product_list.php">Shop Now</a></div>
  			</div>

  			<div class="mySlides fade">
    		<img src="images/lg/b_cn_wb_m.jpg">
    		<div class="slide-btn"><a href="product_list.php">Shop Now</a></div>
  			</div>

  			<a class="slide-prev" onclick="plusSlides(-1)">❮</a>
  			<a class="slide-next" onclick="plusSlides(1)">❯</a>
			</div>

			<div style="text-align:center">
  			<span class="dot" onclick="currentSlide(1)"></span>
  			<span class="dot" onclick="currentSlide(2)"></span>
  			<span class="dot" onclick="currentSlide(3)"></span>
			</div>
		</div>

<script>let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}</script>

		</section>

</body>
</html>