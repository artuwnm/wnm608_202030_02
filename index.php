<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Landing Page</title>

	<!-- meta:vp -->
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

	<link rel="stylesheet" href="lib/css/styleguide.css">
	<link rel="stylesheet" href="css/storetheme.css">
	<link rel="stylesheet" href="lib/css/gridsystem.css">

	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

	<link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">
</head>
<body>
	
	<!-- header.navbar>h1+nav.nav -->
	<header class="navbar">
		<div class="container display-flex">
			<div class="flex-stretch">
				<h1>Skillbank</h1>
			</div>
			<nav class="nav flex-none">
				<!-- ul>li*3>a[href=#]>{Link $} -->
				<ul class="display-flex">
					<li><a href="#">Home</a></li>
					<li><a href="#">Store</a></li>
					<li><a href="#">About</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<div class="view-window display-flex flex-align-center flex-justify-center" style="background-image:url(img/welcome2.jpg)">
	</div>

	<div class="container">
		<h3 class="text-align-center flex-stretch margin-top-5 margin-bottom-5">
		You Need a Hand?
		<br>
		Let Me Help You With My Skills

		</h3>
	</div>

	<!-- .container>p*2>lorem40 -->
	<div class="container">
		<div class="card soft">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt tempora laboriosam suscipit consequuntur nemo vitae eos, obcaecati doloribus rem labore animi porro necessitatibus mollitia autem sequi accusantium facere minima ducimus. Fugiat dignissimos quod perspiciatis mollitia facere voluptas culpa eligendi praesentium.</p>
			<p>Sequi asperiores ex mollitia reiciendis libero, maxime eum cumque beatae rerum provident tempore recusandae odio assumenda minima laudantium impedit illum aliquam accusamus autem architecto, rem molestiae, tempora voluptatibus a? Id excepturi, doloremque eius amet hic, nobis harum et praesentium a!</p>
		</div>
		<div class="card dark">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt tempora laboriosam suscipit consequuntur nemo vitae eos, obcaecati doloribus rem labore animi porro necessitatibus mollitia autem sequi accusantium facere minima ducimus. Fugiat dignissimos quod perspiciatis mollitia facere voluptas culpa eligendi praesentium.</p>
			<p>Sequi asperiores ex mollitia reiciendis libero, maxime eum cumque beatae rerum provident tempore recusandae odio assumenda minima laudantium impedit illum aliquam accusamus autem architecto, rem molestiae, tempora voluptatibus a? Id excepturi, doloremque eius amet hic, nobis harum et praesentium a!</p>
		</div>
	</div>

	<div class="container">
		<div class="display-flex">
			<div class="flex-stretch">
				<div class="card soft">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste recusandae deserunt vel, explicabo nostrum tempora tenetur quod amet sequi eum sit, rem aliquam placeat cumque nam adipisci nemo! Expedita, quia!</p>
					<p>Alias rerum sapiente voluptates saepe, corrupti animi, delectus veniam nisi, maiores eos soluta iste at reprehenderit placeat obcaecati illum dolore architecto natus amet porro. Ullam dicta voluptatum soluta, qui eligendi.</p>
				</div>
			</div>
			<div class="flex-none" style="width:1em;">&nbsp;</div>
			<div class="flex-stretch">
				<div class="card soft">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam nihil deserunt in numquam nobis, sapiente delectus corrupti quisquam reprehenderit odio sit commodi aperiam cupiditate ipsa accusantium hic. Consectetur, laborum, eligendi.</p>
					<p>Culpa veniam pariatur ex illo tenetur, possimus alias! Sed, aliquid cupiditate doloremque voluptate labore voluptatem? Consequuntur aperiam corporis debitis, sapiente amet itaque culpa eligendi praesentium voluptatibus blanditiis neque, possimus rerum.</p>
				</div>
			</div>
		</div>
	</div>


	<div class="container">
		<div class="grid gap">
			<!-- .col-6*2>.card.soft>lorem20 -->
			<div class="col-6">
				<div class="card soft">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore non quis similique, sit, doloremque hic excepturi dolorum odit explicabo mollitia?</div>
			</div>
			<div class="col-6">
				<div class="card soft">Hic modi, soluta quasi? Consequuntur necessitatibus autem aspernatur eveniet assumenda rerum facere est neque omnis quod ipsam enim, iure alias.</div>
			</div>



			<!-- .col-6*2>.card.soft>lorem20 -->
			<div class="col-4">
				<div class="card soft">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore non quis similique, sit, doloremque hic excepturi dolorum odit explicabo mollitia?</div>
			</div>
			<div class="col-4">
				<div class="card soft">Hic modi, soluta quasi? Consequuntur necessitatibus autem aspernatur eveniet assumenda rerum facere est neque omnis quod ipsam enim, iure alias.</div>
			</div>
			<div class="col-4">
				<div class="card soft">Hic modi, soluta quasi? Consequuntur necessitatibus autem aspernatur eveniet assumenda rerum facere est neque omnis quod ipsam enim, iure alias.</div>
			</div>


			<!-- .col-6*2>.card.soft>lorem20 -->
			<div class="col-3">
				<div class="card soft">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore non quis similique, sit, doloremque hic excepturi dolorum odit explicabo mollitia? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit officiis blanditiis asperiores accusamus at quo natus. Quisquam minus obcaecati, deleniti.</div>
			</div>
			<div class="col-6">
				<div class="grid">
					<!-- .col-4*3>.card.soft>lorem10 -->
					<div class="col-4">
						<div class="card soft">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, ut.</div>
					</div>
					<div class="col-4">
						<div class="card soft">Harum et inventore minima reiciendis, minus dolorum illum ab omnis.</div>
					</div>
					<div class="col-4">
						<div class="card soft">Consequuntur fugiat quidem possimus officiis in, eum animi suscipit eveniet?</div>
					</div>
				</div>
			</div>
			<div class="col-3">
				<div class="card soft">Hic modi, soluta quasi? Consequuntur necessitatibus autem aspernatur eveniet assumenda rerum facere est neque omnis quod ipsam enim, iure alias.</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="card soft medium">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt tempora laboriosam suscipit consequuntur nemo vitae eos, obcaecati doloribus rem labore animi porro necessitatibus mollitia autem sequi accusantium facere minima ducimus. Fugiat dignissimos quod perspiciatis mollitia facere voluptas culpa eligendi praesentium.</p>
			<p>Sequi asperiores ex mollitia reiciendis libero, maxime eum cumque beatae rerum provident tempore recusandae odio assumenda minima laudantium impedit illum aliquam accusamus autem architecto, rem molestiae, tempora voluptatibus a? Id excepturi, doloremque eius amet hic, nobis harum et praesentium a!</p>
		</div>
	</div>
</body>
</html>
