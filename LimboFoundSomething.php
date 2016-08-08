<!DOCTYPE html>
<html>
	<title> Lost Something </title>
	<head>
		<link rel="stylesheet" type="text/css" href="LimboLostSomething.css">
	</head>
<body>
	<img src = "marist2.jpg" style="width350px; height:125px">
	<div>
		<h1 align = "center"> Found something? </h1>
		<ul align = "center">
			<li><a href="LimboLanding.php">Home</a></li>
			<li><a href="LimboLostSomething.php">Lost something</a></li>
			<li><a href="LimboAdminLogin.php">Admins</a></li>
			<li><a href="#">Quick Links</a></li>
		</ul>
		<p align = "center"> Time to report it!!! </p>
		<form id="usrform" action="UpdateFoundLimbo.php" method="POST">
			Enter name here: <input id = "Name" type = "text" name = "Owner">
			<br>
			Enter description here: <br>
				<input type = "text" name="Description">
			<br>
			Location: <br>
				<select name = "Location">
				  <option value="Hancock">Hancock</option>
				  <option value="Marian Hall">Marian Hall</option>
				  <option value="Byrne House">Byrne House</option>
				  <option value="Donnelly Hall">Donnelly Hall</option>
				  <option value="James A. Cannavino Library">James A. Cannavino Library</option>
				  <option value="Champagnat Hall">Champagnat Hall</option>
				  <option value="Our Lady Seat of Wisdom Chapel">Chapel</option>
				  <option value="Cornell Boat House">Cornell Boat House</option>
				  <option value="Margaret M. and Charles H. Dyson Center">Dyson</option>
				  <option value="Fern Tor">Fern Tor</option>
				  <option value="Fontaine Annex">Fontaine Annex</option>
				  <option value="Fontaine Hall">Fontaine Hall</option>
				  <option value="Foy Townhouses">Foy Townhouses</option>
				  <option value="Fulton Street Townhouses">Fulton Street Townhouses</option>
				  <option value="Lower Fulton Townhouses">Lower Fulton Townhouses</option>
				  <option value="Gartland Apartments">Gartland Apartments</option>
				  <option value="Greystone Hall">Greystone Hall</option>
				  <option value="Kieran Gatehouse">Kirk House</option>
				  <option value="Leo Hall">Leo Hall</option>
				  <option value="Longview Park">Longview Park</option>
				  <option value="Lowell Thomas Communications Center">Lowell Thomas</option>
				  <option value="Marist Boathouse">Marist Boathouse</option>
				  <option value="James J. McCann Recreational Center">McCann Center</option>
				  <option value="Mid-Rise Hall">Mid-Rise Hall</option>
				  <option value="St. Ann's Hermitage">St. Ann's Hermitage</option>
				  <option value="St. Peter's">St. Peter's</option>
				  <option value="Sheahan Hall">Sheahan Hall</option>
				  <option value="Steel Plant Art Studios and Gallery">Steel Plant</option>
				  <option value="Student Center/Rotunda">Student Center/Rotunda</option>
				  <option value="Tennis Pavillion">Tennis Pavillion</option>
				  <option value="Tenney Stadium">Tenney Stadium</option>
				  <option value="Lower Townhouses">Lower Townhouses</option>
				  <option value="Lower West Cedar Townhouses">Lower West Cedar Townhouses</option>
				  <option value="Upper West Cedar Townhouses">Upper West Cedar Townhouses</option>
				</select>
			<br>
			Date: <br>
				<input type="text" name="Date">
			<br>
			Additional Information <br>
				<textarea rows="3" cols="50" name="Information" form="usrform">Enter text here...</textarea>
			<br><br>
			<input id = "submitbtn" type = "submit" value="Submit">
		</form>
		
	</div>
</body>

</html>