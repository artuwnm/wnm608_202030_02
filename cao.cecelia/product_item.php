<?php

include_once "lib/php/function.php";
include_once "parts/templates.php";

$result = getRows(
	makeConn(),
	"SELECT *
	FROM `product`
	WHERE `id` = '{$_GET['id']}'
	"
);
$o = $result[0];

$thumbs = explode(",", $o->images);

// print_p($result);

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Store: Product Item</title>

	<?php include "parts/meta.php" ?>

</head>
<body>

	<?php include "parts/navbar.php" ?>

	<div class="container">
		<div class="grid gap">
			<div class="col-xs-12 col-md-7">
			<div class="imagealign flex-start">

			<div class="film">
	
	<div class="thumb-images">
		
			<img class="thumbmain" src="<?= $o->thumbnail ?>" alt="">
			<img class="thumbsecondary" src="https://via.placeholder.com/400x500.png?text=style">
	
	</div>
	<div class="big-image">
		<img src="<?= $o->thumbnail ?>" alt="">
		
	</div>
	<script>
		let chosen = 0;
let page = 0;

function scrollDiv() {
	$(".thumbs").animate({
		scrollLeft:748*page
	})
}

function showImage(){
	let chose = $(".thumb-images img").eq(chosen);
	$(".big-image img").attr({src:chose.attr("src")})
	chose.addClass("active").siblings().removeClass("active")
}

$(".thumb-images img").on("click",function(){
	chosen = $(this).index();
	showImage();
})

	</script>
	</div>	
		</div>
			</div>
			
			<div class="col-xs-12 col-md-5">
			<div>
				<h2><?= $o->name ?></h2>
				<div class="product-description">
				<h4><?= $o->description ?></h4>
			</div>
			</div>
		
		<div id="accordion">
			<ul class="a-container">
  <!-- item01 -->
  <li class="a-items">
    <input type="radio" name="ac" id="a1" class="hidden" />
    <label for="a1">DESCRIPTION</label>
    <div class="a-content">
      
    <div class="product-description">
				<?= $o->description ?>
			</div>
    </div>
  </li>
  
    <!-- item02 -->
    <li class="a-items">
    <input type="radio" name="ac" id="a2" class="hidden"/>
    <label for="a2">SHIPPING & RETURNING</label>
    <div class="a-content">
      
     Lorem ipsum dolor sit amet, quidem ad necessitatibus fugiat consectetur veritatis laboriosam ut soluta quis deleniti deserunt! Voluptate qui excepturi architecto.
    </div>
  </li>
  
    <!-- item03 -->  
    <li class="a-items">
    <input type="radio" name="ac" id="a3" class="hidden"/>
    <label for="a3">Keep In Touch</label>
    <div class="a-content">
     
     Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam beatae maiores possimus sequi non quidem ad necessitatibus fugiat consectetur veritatis laboriosam ut soluta.
    </div>
  </li>
</ul>

		</div>
		<div class="display-flex flex-justify-center">
			<a href="cart.php" class="linkbutton">
				ADD TO CART <div class="product-price">&dollar;<?= $o->price ?></div>

			</a>
			</div>
	</div>
</div>
</div>

<div class="container">
<div class="grid gap">
	<div class="col-xs-6 col-md-4">
	<a href="product_item.php?id=$o->id" class="display-block">
		<figure class="product-figure">
			<div class="imagedecorarionrecommendation display-flex flex-align-center flex-justify-center">
					<h3>RECOMMENDATIONS</h3>
					
				</div>
			
		</figure>
	</a>
</div>

	<div class="col-xs-6 col-md-4">
	<a href="product_item.php?id=$o->id" class="display-block">
		<figure class="product-figure">
			<div class="product-image">
				<img src="images/babyearings_thumbnail.jpg" alt="">
			</div>
			<div class="form-control display-flex">
				<div class="flex-none">Baby Earings</div>
				<div class="flex-stretch"></div>
				<div class="flex-none">$98.98</div>
			</div>
			
		</figure>
	</a>
</div>
	
	<div class="col-xs-6 col-md-4">
	<a href="product_item.php?id=$o->id" class="display-block">
		<figure class="product-figure">
			<div class="product-image">
				<img src="images/babyearings_thumbnail.jpg" alt="">
			</div>
			<div class="form-control display-flex">
				<div class="flex-none">Baby Earings</div>
				<div class="flex-stretch"></div>
				<div class="flex-none">$98.98</div>
			</div>
			
		</figure>
	</a>
</div>
		</div>
</div>
	
</body>
<?php include "parts/footer.php" ?>
</html>