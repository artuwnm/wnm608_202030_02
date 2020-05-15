 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
 <?php include_once "parts/templates.php" ?>
 <header>
 	
 		

	
		
		<input type="checkbox" id="overlay-input" />
		<label for="overlay-input" id="overlay-button"><span></span></label>

  		<div id="overlay">

   			 <ul>
      			<li><a href="#">Home</a></li>
      			<li><a href="#">About</a></li>
      			<li><a href="#">Contact</a></li>
    		</ul>
    
  		</div>
  		
  		
  		
<a href="index.php" style="flex: 1 1 auto;">
				<img src="images/horizontallogo.png" alt="Nature" class="responsiveimage logo">
		</a>
	
  </div>
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
