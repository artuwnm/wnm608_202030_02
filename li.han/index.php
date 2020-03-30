<!DOCTYPE html>
<html lang="en">
<head>
	<title>Landing Page</title>
<?php include "parts/meta.php" ?>
<link href="https://fonts.googleapis.com/css?family=Titillium+Web|Varela&display=swap" rel="stylesheet">
</head>
<body>
	
	<!-- header.navbar>h1+nav.nav -->
	<header class="navbar">
		<div class="container display-flex">
			<div class="flex-stretch">
				<h1>Store Page</h1>
			</div>
			<nav class="nav flex-none">
				<!-- ul>li*3>a[href=#]>{Link $} -->
				<ul class="display-flex">
					<li><a href="#">Link 1</a></li>
					<li><a href="#">Link 2</a></li>
					<li><a href="#">Link 3</a></li>
				</ul>
			</nav>
		</div>
	</header>
<?php include "parts/navbar.php" ?>
	<!-- .container>p*2>lorem40 -->
	
	<div class="container">
	<div class="grid gap">
	<div class="col-2">
		<img src="image/shiseido.png" alt="shiseido.png" style="width: 100%">
	</div>
	<div class="col-2"><img src="image/ptr.png" alt="ptr.png" style="width: 100%">
	</div>
	<div class="col-2"><img src="image/eve.png" alt="eve.png" style="width: 90%">
	</div>
	<div class="col-2"><img src="image/lancome.jpg" alt="lancome" style="width: 100%"></div>
	<div class="col-2"><img src="image/cpb.png" alt="cpb" style="width: 100%"></div>
	<div class="col-2"><img src="image/erno.png" alt="erno laszro" style="width: 100%"></div>
	</div>	
		<div class="card heroimg">
		</div>
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

	<div class="view-window display-flex flex-align-center flex-justify-center" style="background-image:url(img/mountains01.jpg)">
		<div class="card soft">
			<h2>PRODUCT</h2>
		</div>
	</div>

	<div class="container">
		<h2>Grid</h2>
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
		<h2>Responsive Grid</h2>

		<div class="grid gap">
			<!-- .col-xs-12.col-md-4*3>.card.soft>lorem20 -->
			<div class="col-xs-12 col-md-4">
				<div class="card soft">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis aperiam aspernatur sapiente dignissimos voluptatibus libero quis placeat dolorem ipsa, aliquid?</div>
			</div>
			<div class="col-xs-12 col-md-4">
				<div class="card soft">Sint assumenda ullam voluptatum necessitatibus recusandae aut ex in voluptatem, quam cumque natus ratione nesciunt quia architecto dolorem cum obcaecati.</div>
			</div>
			<div class="col-xs-12 col-md-4">
				<div class="card soft">At cum facere voluptate vel fugit nisi quisquam, magni explicabo. Sint neque unde quos placeat commodi, sapiente ullam aliquid sunt.</div>
			</div>
		</div>

		<div class="grid gap">
			<!-- .col-xs-12.col-md-6.col-lg-4.col-xl-3*12>.card.soft>lorem20 -->
			<div class="col-xs-12 col-md-6 col-lg-4 col-xl-3">
				<div class="card soft">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum deserunt nobis non, esse doloribus quo nam, id repudiandae ea odio.</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-4 col-xl-3">
				<div class="card soft">Nam consequatur ducimus saepe architecto quasi suscipit, nostrum, mollitia neque dolorem, voluptatum adipisci aut rerum repellendus. Placeat dicta, accusantium saepe.</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-4 col-xl-3">
				<div class="card soft">Delectus veniam nisi corporis aut distinctio nulla beatae consequuntur quasi, rem, dolor, et vero adipisci commodi veritatis iusto corrupti repudiandae.</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-4 col-xl-3">
				<div class="card soft">Tenetur distinctio quia qui odit. Unde at, impedit reprehenderit iure debitis, quo odit! Minima, commodi. Exercitationem omnis, numquam veniam velit.</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-4 col-xl-3">
				<div class="card soft">Aliquid blanditiis minus consequuntur adipisci mollitia dolores ipsum. Minima sint quibusdam natus commodi voluptatum sunt excepturi, exercitationem autem molestias pariatur!</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-4 col-xl-3">
				<div class="card soft">Voluptatum dignissimos quisquam amet quae voluptates, numquam, nulla asperiores cumque nobis quis obcaecati doloremque ratione exercitationem nihil earum sit aut!</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-4 col-xl-3">
				<div class="card soft">Aut cumque, vel. Omnis, facere, dolores? Distinctio nulla ullam laboriosam, doloremque nemo eaque, officia enim atque, nobis amet ipsa eveniet.</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-4 col-xl-3">
				<div class="card soft">Maxime suscipit, blanditiis eligendi eum, adipisci deserunt temporibus esse reiciendis hic obcaecati eaque facere recusandae at placeat incidunt architecto tempore!</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-4 col-xl-3">
				<div class="card soft">Debitis voluptas unde quibusdam, eaque rem autem obcaecati libero suscipit mollitia assumenda in quas sapiente, architecto amet, modi delectus itaque.</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-4 col-xl-3">
				<div class="card soft">Id sit dicta nesciunt nobis rerum ipsa aperiam quas, vero voluptate hic accusantium voluptatibus possimus repudiandae tempore aliquam, magni nam!</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-4 col-xl-3">
				<div class="card soft">Ratione voluptatum et aut suscipit vero perferendis fugit soluta deleniti nisi saepe est eaque provident, odit reiciendis debitis maxime asperiores.</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-4 col-xl-3">
				<div class="card soft">Est, vitae, illo consequuntur expedita omnis nam officiis, at facilis impedit laudantium distinctio. Voluptatibus aspernatur laboriosam corporis id, eaque molestias!</div>
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