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
			<li><a href="LimboLostSomething.php">Lost something</a></li>
			<li><a href="LimboFoundSomething.php">Found something</a></li>
			<li><a href="LimboAdminLogin.php">Admins</a></li>
			<li><a href="#">Quick Links</a></li>
		</ul>
		<p align = "center"> If you lost or found something, you're in luck: this is the place to report it. </p>
		<?php require ('ShowLimboDB.php');?>
		<p align = "center"> Reported in last 7 days </p>
	</div>
</body>

</html>