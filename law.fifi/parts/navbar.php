<?php include_once "parts/templates.php" ?>

	
		<div class="navbar">
			
				<div class="container">
					<div class="flex-stretch text-align-center logo center-logo">
						<a href="index.php" style="padding:0;"><img src="images/Meowie-logo.svg" alt=""></a>
					</div>
					<div class="ham-icon">
						<div class="line line-1"></div>
						<div class="line line-2"></div>
						<div class="line line-3"></div>
					</div>
					
						<nav class="nav-breadcrumb">
							<ul class="flex-justify-center">
								<li class="uppercase"><a href="index.php">Home</a></li>
								<li class="uppercase"><a href="product_list.php">Products</a></li>
								<li class="uppercase"><a href="about.php">About</a></li>
								
							</ul>
						</nav>
					
				</div>
					
			
	
		<div class="icons display-flex">


			<a href="product_cart.php"><svg class="cart-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29.2 28.64"><defs></defs><title>cart-icon</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M29.2,21.55V20.26H25.52L24.8,8.32H22.13C21.55,3.61,18.31,0,14.4,0S7.25,3.61,6.68,8.32H3.89L3.5,20.26H0v1.29H3.45l0,1.21H0v1.29H3.37l-.15,4.59H26l-.28-4.59H29.2V22.76H25.67l-.08-1.21ZM14.67,14.4h-.13L9.92,8.32H8.58c.55-3.4,2.95-6,5.82-6s5.27,2.57,5.83,6H19Z"/></g></g></svg></a>
			<span class="cart-badge"><?=makeCartBadge() ?></span>
		</div>
	</div>
</div>