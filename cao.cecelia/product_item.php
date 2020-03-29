<!DOCTYPE html>
<html lang="en">
<head>
	<title>Shop</title>

	
	<?php include "parts/meta.php" ?>
</head>
<body>

	<?php include "parts/navbar.php" ?>

	<div class="container">
		<div class="grid gap large">
			
			<div class="col-xs-12 col-xl-6">
			<div class="imagealign flex-start">

			<div class="film">
	
	<div class="thumb-images">
		
			<img class="thumbmain" src="https://via.placeholder.com/400x500.png?text=shopping">
			<img class="thumbsecondary" src="https://via.placeholder.com/400x500.png?text=style">
	
	</div>
	<div class="big-image">
		<img src="https://via.placeholder.com/400x500.png?text=shopping">
		
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
			
			<div class="col-xs-12 col-xl-6">
			<div>
				<h3>This is Product <?=$_GET['id']?></h3>
			</div>
		
		<div id="accordion">
			<ul class="a-container">
  <!-- item01 -->
  <li class="a-items">
    <input type="radio" name="ac" id="a1" class="hidden" />
    <label for="a1">About Us</label>
    <div class="a-content">
      
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam beatae maiores possimus sequi non quidem ad necessitatibus fugiat consectetur veritatis laboriosam ut soluta quis deleniti deserunt! Voluptate qui excepturi architecto.</p>
    </div>
  </li>
  
    <!-- item02 -->
    <li class="a-items">
    <input type="radio" name="ac" id="a2" class="hidden"/>
    <label for="a2">Our Services</label>
    <div class="a-content">
      
      <p>Lorem ipsum dolor sit amet, quidem ad necessitatibus fugiat consectetur veritatis laboriosam ut soluta quis deleniti deserunt! Voluptate qui excepturi architecto.</p>
    </div>
  </li>
  
    <!-- item03 -->  
    <li class="a-items">
    <input type="radio" name="ac" id="a3" class="hidden"/>
    <label for="a3">Keep In Touch</label>
    <div class="a-content">
     
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam beatae maiores possimus sequi non quidem ad necessitatibus fugiat consectetur veritatis laboriosam ut soluta.</p>
    </div>
  </li>
</ul>

		</div>
		<div class="display-flex flex-justify-center">
			<a href="cart.php" class="linkbutton">
				ADD TO CART $98

			</a>
			</div>
	</div>
</div>
</div>

<div class="containershop">
	<div class="grid gap">
			<!-- .col-xs-6*2>.card.soft>lorem30 -->

			<div class="col-xs-12 col-xl-4">
				<div class="display-flex flex-align-center flex-justify-center">
				<div class="imagedecorarionrecommendation display-flex flex-align-center flex-justify-center">
					<h3>RECOMMENDATIONS</h3>
					
				</div>
				
				</div>	
		</div>

			
				<div class="col-xs-12 col-xl-4">
				<div class="display-flex flex-align-center flex-justify-center">
				<div id="rectangle">
				<div class="imagedecorarion display-flex flex-align-center flex-justify-center">
					
				</div>
				<div class="form-control display-flex">
				<div class="flex-none">
					<h4>Baby Earings</h4>
				</div>
				<div class="flex-stretch"></div>
				<div class="flex-none">
					<h4>$98.00</h4>
				</div>
			</div>	
				</div>
				</div>	
		</div>

				<div class="col-xs-12 col-xl-4 ">
				<div class="display-flex flex-align-center flex-justify-center">
				<div id="rectangle" >
				<div class="imagedecorarion display-flex flex-align-center flex-justify-center">
					
				</div>	
				<div class="form-control display-flex">
				<div class="flex-none">
					<h4>Baby Earings</h4>
				</div>
				<div class="flex-stretch"></div>
				<div class="flex-none">
					<h4>$98.00</h4>
				</div>
			</div>
			</div>

			</div>
				
			</div>

			</div>
		</div>

	
</body>
<?php include "parts/footer.php" ?>
</html>