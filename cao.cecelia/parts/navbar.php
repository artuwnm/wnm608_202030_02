 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<header class="navbar">
		<nav class="nav-right-flex">
			<div class="topnav" id="myTopnav">
			
			<a href="index.php"><img  src="images/horizontallogo.png" alt="Nature" class="responsiveimage logo"></a>
				<ul >
				<li>
				<div class="animated-search-form" id="product-search">
			<!-- <input type="text" name="search" placeholder="SEARCH"> -->
			<input type="search" class="search" placeholder="SEARCH">
						</div>
				</li>
				<li>
				 <a href="cart.php"><span class="cart"></span></a>
				 </li>

				 </ul>
				<ul id="displaynone">
					<li>
				 <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    					 <i class="fa fa-bars"></i>
  						 </a>
					</li>
					<li>
						<a href="shop.php">SHOP</a>
					</li>
					<li>
						<a href="read.php">READ</a>
					</li>
					<li>
						<a href="store.php">STORE</a>
					</li>

					
				</ul>
				
			</div>
			</nav>
			<script>
			function myFunction() {
			  var x = document.getElementById("myTopnav");
			  if (x.className === "topnav") {
			    x.className += " responsive";
			  } else {
			    x.className = "topnav";
			  }
			}
			</script>

	</header>