<?php include_once "parts/templates.php" ?>
<div class="tnav-drop">
  <div class="tnav-container">
    <div class="logo"><a href="">Home</a></div>
  <a href="product_cart.php">
    <span>Cart</span>
    <span class="badge"><?= makeCartBadge() ?></span>
  </a>
  	<a href="about.php">About</a>
  		<div class="tnav-dropdown">
    		<button class="tnav-btn"><a href="product_list.php">Product</a></button>
    			<div class="tnav-drop-content">
      			<a href="product_list.php">Bags</a>
      			<a href="product_list.php">Jewleries</a>
      			<a href="product_list.php">Shoes</a>
      			<a href="product_list.php">Toys</a>
    	    </div>
    </div>

  </div>
</div>