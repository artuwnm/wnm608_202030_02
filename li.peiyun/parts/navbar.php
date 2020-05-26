<?php include_once "parts/templates.php" ?>
<div class="tnav-drop">
  <div class="tnav-container">
    <div class="logo"><a href="">Home</a></div>
  <a href="product_cart.php">
    <span>Cart</span>
    <span class="badge"><?= makeCartBadge() ?></span>
  </a>
  	<a href="about.php">About</a>
    <a href="product_list.php">Shop</a>
  </div>
</div>