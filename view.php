<!DOCTYPE html>
<?php
	require "db.php";
	// TODO: Check the user has permission (their own activity or an activity of someone who friended them)
	$activity = $db->query("SELECT * FROM activity WHERE id = ?", [$_GET["id"]]);
?>
<html>
<head>
	<title>Stravan't</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="libs/bootstrap.min.css">
	<script src="libs/jquery.slim.min.js"></script>
	<script src="libs/popper.min.js"></script>
	<script src="libs/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand navbar-light bg-light">
		<a class="navbar-brand" href="home.php">
			<img src="logo.png" alt="Stravan't" height="30">
		</a>
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" href="home.php">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="statistics.php">Records and statistics</a>
			</li>
		</ul>
		<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<span class="navbar-text">
					Logged in as <?=$_SESSION["username"]?>
				</span>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="logout.php">Logout</a>
			</li>
		</ul>
	</nav>
	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				<h1>
					TODO: Activity name
				</h1>
				TODO: Map of activity
			</div>
			<div class="col-sm-4">
				<h1>
					Details
					<button type="button" class="btn btn-primary float-right mt-2" data-toggle="modal" data-target="#edit-details">Edit</a>
				</h1>
				TODO: Categories, miles, etc. go here
			</div>
		</div>
	</div>

</body>
</html>