<!DOCTYPE html>
<html>
	<title> Admin Login </title>
	<head>
		<link rel="stylesheet" type="text/css" href="LimboLostSomething.css">
	</head>
<body>
	<img src = "marist2.jpg" style="width350px; height:125px">
	<div>
		<h1 align = "center"> Admin Login </h1>
		<ul align = "center">
			<li><a href="LimboLanding.php">Home</a></li>
			<li><a href="LimboFoundSomething.php">Found something</a></li>
			<li><a href="LimboLostSomething.php">Lost something</a></li>
			<li><a href="#">Quick Links</a></li>
		</ul>
		<p align = "center"> Login Here </p>
	<form action = "LimboAdminCheck.php" method = "POST">
		User name:<br>
		<input type="text" name="username" value = "yourname@email.com">
		<br>
		User password:<br>
		<input type="password" name="psw">
		<input id = "submitbtn" type = "submit" value="Submit">
	</form>
	<br><br>
	</div>
</body>

</html>