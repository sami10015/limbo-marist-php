<!--
This PHP script was modified based on result.php in McGrath (2012).
It demonstrates how to ...
  1) Connect to MySQL.
  2) Write a complex query.
  3) Format the results into an HTML table.
  4) Update MySQL with form input.
By Ron Coleman
-->

<?php

# Connect to MySQL server and the database
require( 'includes/connect_db.php' ) ;

# Includes these helper functions
require( 'includes/helpers.php' ) ;

if ($_SERVER[ 'REQUEST_METHOD' ] == 'POST') {
	$Name = $_POST['Owner'];
	
	$Description = $_POST['Description'] ;

    $Location = $_POST['Location'] ;
	
	$Date = $_POST['Date'];

	$Information = $_POST['Information'];
	
	if(!valid_text($Description))
		echo "<p style=\"color:blue;font-size:16px;\">Please enter a valid Description !!!</p>";
	else if(!valid_text($dbc, $Location))
		echo "<p style=\"color:blue;font-size:16px;\">Please enter a valid Location !!!</p>";
	else if(!valid_text($Information))
		echo "<p style=\"color:blue;font-size:16px;\">Please enter a valid Information !!!</p>";
	else if(!valid_text($Date))
		echo "<p style=\"color:blue;font-size:16px;\">Please enter a valid Date !!!</p>";
	else if(!empty($Description) && !empty($Location) && !empty($Information) && !empty($Date)) {
      $result = insert_record_FoundStuff($dbc, $Name, $Description, $Location, $Information) ;
	  
	  ob_start();
	  $message = "Successfully entered in data";
	  echo "<script type='text/javascript'>alert('$message');</script>";
	  header("Location:LimboFoundSomething.php");
      exit();
	  ob_end_flush();
    }
    
}

# Show the records
#show_records2($dbc);

# Close the connection
mysqli_close( $dbc ) ;
?>
