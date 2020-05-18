 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
 <?php include_once "parts/templates.php" ?>
 <?php include "parts/meta.php" ?>

 <header>
 	

<nav>
  <ul class="menu">
    <li class="logo"><a href="index.php" style="flex: 1 1 auto;"><img src="images/horizontallogo.png" alt="Nature"></a></li>
    <li class="item"><a href="shop.php">SHOP</a></li>
    <li class="item"><a href="read.php">READ</a></li>
    <li class="item"><a href="store.php">STORE</a></li>
    <li class="item"><div class="animated-search-form" id="product-search">
			<!-- <input type="text" name="search" placeholder="SEARCH"> -->
			<input type="search" class="search" placeholder="SEARCH">
						</div>
</li>
<!-- <div class="display-flex flex-justify-end"> -->
    <li class="item" style="">
    	<a href="cart.php">
    		<div class="text">CART</div>
    		<div class="cart">
    			<?= makeCartBadge() ?>   				
    		</div>
    	</a>
    </li>
    
   
    <li class="toggle"><a><i class="fas fa-bars"></i></a></li>
</div>
  </ul>
</nav>



<script type="text/javascript">
	$(function() {
    $(".toggle").on("click", function() {
        if ($(".item").hasClass("active")) {
            $(".item").removeClass("active");
            $(this).find("a").html("<i class='fas fa-bars'></i>");
        } else {
            $(".item").addClass("active");
            $(this).find("a").html("<i class='fas fa-times'></i>");
        }
    });
});
</script>
 </header>