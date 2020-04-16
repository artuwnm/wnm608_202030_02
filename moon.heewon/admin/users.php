<?php

include "../lib/php/functions.php";

$users = getData("../data/users.json");

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>User Admin</title>

	<meta charset="UTF-8">

<meta name="viewport" content="width=device-width">

<base href="/aau/wnm608_02/moon.heewon/">

<link rel="stylesheet" href="lib/css/styleguide.css">
<link rel="stylesheet" href="lib/css/gridsystem.css">
<link rel="stylesheet" href="css/storetheme.css">

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script></head>
<body>

	<header class="navbar">
		<div class="container display-flex">
			<div class="flex-stretch">
				<h1>User Admin</h1>
			</div>
			<nav class="nav flex-none">
				<ul class="display-flex">
					<li><a href="admin/users.php">User List</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<div class="container">
		<div class="card soft">

			
			<h2>User List</h2>

			<ol>
			<li>
					<a href='admin/users.php?id=0'>Hamilton Cline</a>
				</li><li>
					<a href='admin/users.php?id=1'>Tiffany Zheng</a>
				</li><li>
					<a href='admin/users.php?id=2'>Peiyun Li</a>
				</li><li>
					<a href='admin/users.php?id=3'>Heewon Moon</a>
				</li><li>
					<a href='admin/users.php?id=4'>Shaonan Dong</a>
				</li>			</ol>

					</div>
	</div>
	
</body>
</html>