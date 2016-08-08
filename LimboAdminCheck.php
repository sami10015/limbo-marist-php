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
	$Username = $_POST['username'];
	
	$Password = $_POST['psw'] ;
	
	$query = 'SELECT email, pass FROM users WHERE email = "'.$Username.'" AND pass = "'.$Password.'"';
	$result = mysqli_query($dbc, $query);
	check_results($result);
	
	if(mysqli_num_rows($result)> 0){
	  ob_start();
	  $message = "Successfully entered in data";
	  echo "<script type='text/javascript'>alert('$message');</script>";
	  header("Location: LimboAdminPage.php");
      exit();
	  ob_end_flush();
	} else {
		echo"<p>Error</p>";
	  }
    }
    


# Show the records
#show_records2($dbc);

# Close the connection
mysqli_close( $dbc ) ;
?>
