<!DOCTYPE html>
<html>
	<title> Limbo </title>
	<head>
		<link rel="stylesheet" type="text/css" href="LimboLanding.css">
	</head>
<body>
	<img src = "marist2.jpg" style="width350px; height:125px">
	<div>
		<h1 align = "center"> Welcome to Limbo! </h1>
		<ul align = "center">
			<li><a href="LimboLanding.php">Home</a></li>
			<li><a href="LimboFoundSomething.php">Found something</a></li>
			<li><a href="LimboLostSomething.php">Lost something</a></li>
			<li><a href="#">Quick Links</a></li>
		</ul>
		<p align = "center"> Admin Page</p>
		
				<?php require ('ShowLimboAdminDB.php');?>
	
		<p align = "center"> Reported in last 7 days </p>
	</div>
</body>

</html>