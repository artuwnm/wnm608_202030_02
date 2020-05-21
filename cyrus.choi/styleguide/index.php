

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CSS Styleguide</title>

	<meta name="viewport" content="width=device-width">

    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Raleway&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="lib/css/styleguide.css">
	<link rel="stylesheet" href="lib/css/gridsystem.css">
	<link rel="stylesheet" href="css/storetheme.css">
</head>
<body>

	<header class="container">
		<div class="card">
			<h1>CSS Style Guide</h1>
		</div>
	</header>

	<div class="container">
		<h2>Table of Contents</h2>

		<ul>
			<li><a href="#typography">Typography</a></li>
			<ul>
				<li><a href="#headings">Headings</a></li>
				<li><a href="#paragraphs">Paragraphs</a></li>
			</ul>
			<li><a href="#colorscheme">Color Scheme</a></li>
			<li><a href="#images">Images</a></li>
			<li><a href="#cards">Cards</a></li>
			<li><a href="#viewwindow">View Window</a></li>
			<li><a href="#navigations">Navigations</a></li>
			<ul>
				<li><a href="#navs">Navs</a></li>
				<li><a href="#navbar">Navbar</a></li>
			</ul>
			<li><a href="#checboxes">Checkboxes</a></li>		
			<li><a href="#forms">Forms</a></li>
			<li><a href="#tables">Tables</a></li>
			<li><a href="#grid">Grid System</a></li>
			<li><a href="#tables">Figures</a></li>
		</ul>
	</div>

	<hr>

	<section id="typography" class="container">
		<h2>Typography</h2>

		
		<div class="card">

			<!-- h$*6>{Heading $} -->
			<h1>Heading 1</h1>
			<h2>Heading 2</h2>
			<h3>Heading 3</h3>
			<h4>Heading 4</h4>
			<h5>Heading 5</h5>
			<h6>Heading 6</h6>
		</div>

		<code>
&lt;h1>Heading 1&lt;/h1>
&lt;h2>Heading 2&lt;/h2>
&lt;h3>Heading 3&lt;/h3>
&lt;h4>Heading 4&lt;/h4>
&lt;h5>Heading 5&lt;/h5>
&lt;h6>Heading 6&lt;/h6>
		</code>


		<div class="card">
			<h3 id="paragraphs">Paragraphs</h3>
			<!-- p*3>lorem40 -->
			<p>A new generation of Pokémon is coming to the Nintendo Switch system. Become a Pokémon Trainer and embark on a new journey in the new Galar region Choose from one of three new partner Pokémon: Grookey, Scorbunny, or Sobble. </p>
			<p>In this all new adventure, you'll encounter new and familiar Pokémon as you catch, battle, and trade Pokémon while exploring new areas and uncovering an all-new story. </p>
			<p>Get ready for the next Pokémon adventure in the Pokémon Sword and Pokémon Shield games.</p>
		</div>
	</section>

	<section id="color" class="container">
		<h2>Color Scheme</h2>
		<div class="grid gap ">
		<div class="col-8 ">
		<div class="grid">		
	    <div class="col-3 ">
        <div class="square"></div>
        <p> #e01f3cff </p>
        </div>
        <div class="col-3 ">
        <div class="square1"></div>
        <p> #b21c1cff </p>       
        </div>
        <div class="col-3 ">
        <div class="square2"></div>
        <p> #e2909cff </p>        
        </div>
        </div>
        </div>
        <div class="col-4 ">
        </div>
		<div class="col-8 ">
		<div class="grid">		 
        <div class="col-3 ">
        <div class="square4"></div>
        <p> #f7f6f6 </p>       
        </div>
        <div class="col-3 ">
        <div class="square5"></div>
        <p> #aaa8a9ff </p>        
        </div>
        <div class="col-3 ">
        <div class="square6"></div>
        <p> #000000ff </p>        
        </div>
         <div class="col-3 ">
        <div class="square3"></div>
        <p> #ffffffff </p>        
        </div>       
        </div>        
        </div>
         <div class="col-4 ">
        </div>       
       </div>
		
	</section>



	<section id="navigations" class="container">
		<h2>Navigations</h2>

		<script>
		const makeNav = (classes="") => {
			const links = ["Playstation Games","Nintendo Switch Games","Game Accessories"];
			let ran = Math.floor(Math.random()*links.length);
			return `
			<div class="card soft">
			<nav class="${classes}">
				<ul>
					${links.reduce((r,o,i)=>r+`<li ${i===ran?'class="active"':''}>
						<a href="#">${o}</a>
					</li>`,'')}
					
				</ul>
			</nav>
			</div>
			`
		}
		</script>

		<div class="card">
			<h3>Basic Nav</h3>

			<!-- nav.nav>ul>li*3>a[href=#]>{Link $} -->
			<script>document.write(makeNav("nav"))</script>
		</div>

		<div class="card">
			<h3>Categories Bar</h3>
		   <div class="container">
			
		     <div class="form-control display-flex">
			 <div class="flex-none">
				<button type="button" class="form-button js-filter" data-column="category" data-value="">All</button>
			 </div>
			 <div class="flex-none">
				<button type="button" class="form-button js-filter" data-column="category" data-value="PS4 Games">PS4 Games</button>
			 </div>
			 <div class="flex-none">
				<button type="button" class="form-button js-filter" data-column="category" data-value="Nintendo Switch Games">Nintendo Switch Games</button>
			 </div>
			 <div class="flex-none">
				<button type="button" class="form-button js-filter" data-column="category" data-value="Games Accessories">Games Accessories</button>
			 </div>			
		   </div>
		</div>
    </div>

		<div class="card">
			<h3>Search Bar</h3>
		<div class="form-control">
			<form class="hotdog light" id="product-search">
				<input type="search" class="search" placeholder="Search Products">
			</form>
		</div>
		</div>
	
	<section id="checkboxes" class="container">
		<h2>Checkboxes</h2>

		<div class="card">
			<h3>Basic Checkbox</h3>

			<div class="form-control">
				<label for="check-example1">Label</label>
				<label>
					<input type="checkbox" id="check-example1">
					Label
				</label>
			</div>

			<h3>Favourite</h3>

			<div class="form-control">
				<div class="heart-toggle">
					<input type="checkbox" id="heart-example1" class="hidden">
					<label for="heart-example1">&hearts;</label>
				</div>
			</div>

			<h3>Toggle</h3>

			<div class="form-control">
				<div class="toggle">
					<input type="checkbox" id="toggle1" class="hidden">
					<label for="toggle1"></label>
				</div>
				<div class="toggle" style="font-size:2em">
					<input type="checkbox" id="toggle2" class="hidden">
					<label for="toggle2"></label>
				</div>
			</div>
		</div>
	</section>


			<div class="form-select">
				<select class="js-sort">
					<option value="1">Newest</option>
					<option value="2">Oldest</option>
					<option value="3">Most Expensive</option>
					<option value="4">Least Expensive</option>
				</select>
			</div>


		<h2>Figures</h2>
		<div class="card">
    <h3>Gridded Figure</h3>
   <div class="container">  
     <div class="grid gap productlist">  
      <div class="col-xs-6 col-md-4">
        <figure class="product-figure soft">
        <div class="product-image">
          <img src="https://via.placeholder.com/300" alt="Product Item" width="100%"></div>
        <figcaption class="product-description">
            <div><h3 class="title">Name</h3></div>
        </figcaption>
        </figure>
       </a>
      </div>

      <div class="col-xs-6 col-md-4">
        <figure class="product-figure soft">
        <div class="product-image">
          <img src="https://via.placeholder.com/300" alt="Product Item" width="100%"></div>
        <figcaption class="product-description">
            <div><h3 class="title">Name</h3></div>
        </figcaption>
        </figure>
       </a>
      </div>

      <div class="col-xs-6 col-md-4">
        <figure class="product-figure soft">
        <div class="product-image">
          <img src="https://via.placeholder.com/300" alt="Product Item" width="100%"></div>
        <figcaption class="product-description">
            <div><h3 class="title">Name</h3></div>
        </figcaption>
        </figure>
       </a>
      </div>  
      </div>
    </div>

 <div class="card">
    <h3>Product Admin Figure</h3>
<div class="itemlist-item display-flex">
	<div class="flex-none">
		<div class="image-square">
			<img src="https://via.placeholder.com/300">
		</div>
	</div>
	<div class="flex-stretch">
		<div><strong>name</strong></div>
		<div><span>category</span></div>
	</div>
	<div class="flex-none display-flex">
		<div><a href="admin/?id=$o->id" class="form-button">Edit</a></div>
		<div><a href="product_item.php?id=$o->id" class="form-button">Visit</a></div>
	</div>
</div>
    </div>

		<div class="card">
			<h3>Product Item Figure</h3>
		<div class="grid gap">
			<div class="col-xs-12 col-md-7">
				<div class="card soft">
					<div class="product-main">
						<img src="https://via.placeholder.com/300" alt="">
					</div>
				</div>
			</div>

	</div>






	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

	<script>
	$("[class*='nav'] a").on("click",function(e){
		e.preventDefault();
		$(this).parent().addClass("active")
			.siblings().removeClass("active")
	})
	</script>
	
</body>
</html>