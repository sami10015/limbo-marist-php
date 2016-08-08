<?php
$debug = true;
# Shows the records in prints
function show_records($dbc) {
		# Connect to MySQL server and the database
		require( 'includes/connect_db.php' ) ;
		
		# Create a query to get the name and price sorted by price
		$query = 'SELECT number, fname, lname FROM presidents ORDER BY number DESC' ;

		# Execute the query
		$results = mysqli_query( $dbc , $query ) ;

		# Show results
		if( $results )
		{
		  # But...wait until we know the query succeeded before
		  # starting the table.
		  echo '<H1>Dead Presidents</H1>' ;
		  echo '<TABLE BORDER>';
		  echo '<TR>';
		  echo '<TH>fname</TH>';
		  echo '<TH>lname</TH>';
		  echo '<TH>number</TH>';
		  echo '</TR>';

		  # For each row result, generate a table row
		  while ( $row = mysqli_fetch_array( $results , MYSQLI_ASSOC ) )
		  {
			echo '<TR>' ;
			echo '<TD>' . $row['fname'] . '</TD>' ;
			echo '<TD>' . $row['lname'] . '</TD>' ;
			echo '<TD>' . $row['number'] . '</TD>' ;
			echo '</TR>' ;
		  }

		  # End the table
		  echo '</TABLE>';

		  # Free up the results in memory
		  mysqli_free_result( $results ) ;
		}
	}
	
# Shows the records in limbo
function show_records2($dbc) {
		# Connect to MySQL server and the database
		require( 'includes/connect_db.php' ) ;
		
		# Create a query to get the name and price sorted by price
		$query = 'SELECT owner, description, location_id, status FROM stuff' ;

		# Execute the query
		$results = mysqli_query( $dbc , $query ) ;

		# Show results
		if( $results )
		{
		  # But...wait until we know the query succeeded before
		  # starting the table.
		  echo '<TABLE BORDER>';
		  echo '<TR>';
		  echo '<TH>Owner</TH>';
		  echo '<TH>Description</TH>';
		  echo '<TH>Location</TH>';
		  echo '<TH>Status</TH>';
		  echo '</TR>';

		  # For each row result, generate a table row
		  while ( $row = mysqli_fetch_array( $results , MYSQLI_ASSOC ) )
		  {
			echo '<TR>' ;
			echo '<TD>' . $row['owner'] . '</TD>' ;
			echo '<TD>' . $row['description'] . '</TD>' ;
			echo '<TD>' . $row['location_id'] . '</TD>' ;
			echo '<TD>' . $row['status'] . '</TD>' ;
			echo '</TR>' ;
		  }

		  # End the table
		  echo '</TABLE>';

		  # Free up the results in memory
		  mysqli_free_result( $results ) ;
		}
	}

function show_link_records($dbc) {
		# Connect to MySQL server and the database
		require( 'includes/connect_db.php' ) ;
		
		# Create a query to get the name and price sorted by price
		$query = 'SELECT id, lname, number FROM presidents ORDER BY number DESC' ;

		# Execute the query
		$results = mysqli_query( $dbc , $query ) ;
		
		# Show results
		if( $results )
		{
		  # But...wait until we know the query succeeded before
		  # starting the table.
		  echo '<H1>Dead Presidents</H1>' ;
		  echo '<TABLE BORDER>';
		  echo '<TR>';
	
		  echo '<TH>lname</TH>';
		  echo '<TH>number</TH>';
		  echo '</TR>';

		  # For each row result, generate a table row
		  while ( $row = mysqli_fetch_array( $results , MYSQLI_ASSOC ) )
		  {
			echo '<TR>' ;
			echo '<TD>' . $row['lname'] . '</TD>' ;
			$alink = '<A HREF=linkypresidents.php?id=' . $row['id']. '>' . $row['number'] . '</A>' ;
			echo '<TD ALIGN=right>' . $alink . '</TD>' ;
			echo '</TR>' ;
		  }
		  
		  
		  # End the table
		  echo '</TABLE>';

		  # Free up the results in memory
		  mysqli_free_result( $results ) ;
		}
	}

function show_record($dbc, $id) {
		# Connect to MySQL server and the database
		require( 'includes/connect_db.php' ) ;
		
		# Create a query to get the name and price sorted by price
		$query =  'SELECT id, lname, fname FROM presidents WHERE id = ' . $id ;


		# Execute the query
		$results = mysqli_query( $dbc , $query ) ;

		# Show results
		if( $results )
		{
		  # But...wait until we know the query succeeded before
		  # starting the table.
		  echo '<H1>Dead Presidents</H1>' ;
		  echo '<TABLE BORDER>';
		  echo '<TR>';
		  echo '<TH>id</TH>';
		  echo '<TH>lname</TH>';
		  echo '<TH>fname</TH>';
		  echo '</TR>';

		  # For each row result, generate a table row
		  while ( $row = mysqli_fetch_array( $results , MYSQLI_ASSOC ) )
		  {
			echo '<TR>' ;
			echo '<TD>' . $row['id'] . '</TD>' ;
			echo '<TD>' . $row['lname'] . '</TD>' ;
			echo '<TD>' . $row['fname'] . '</TD>' ;
			echo '</TR>' ;
		  }

		  # End the table
		  echo '</TABLE>';

		  # Free up the results in memory
		  mysqli_free_result( $results ) ;
		}
	}
	
	
# Inserts a record into the prints table
function insert_record($dbc, $number, $fname, $lname) {
  $query = 'INSERT INTO presidents(number, fname, lname) VALUES (' . $number . ' , "' . $fname . '", "' . $lname . '" )' ;
  show_query($query);

  $results = mysqli_query($dbc,$query) ;
  check_results($results) ;

  return $results ;
}

# Inserts a lost item into the stuff table
function insert_record_LostStuff($dbc, $Name, $Description, $Location, $Information) {
  $QlocationID = 'SELECT id FROM locations WHERE name = "'.$Location.'"';
  $locationIDResult = mysqli_query($dbc, $QlocationID);
  check_results($locationIDResult);
  $locationID = mysqli_fetch_array($locationIDResult,MYSQLI_NUM);

  $query = 'INSERT INTO stuff(location_id, description, owner, finder, status) 
			VALUES (' .$locationID[0]. ', "' .$Description. '", "' .$Name. '", "N/A", "lost")';
  
  $results = mysqli_query($dbc,$query) ;
  check_results($results) ;

  return $results ;
}

# Inserts a found item into the stuff table
function insert_record_FoundStuff($dbc, $Name, $Description, $Location, $Information) {
  $QlocationID = 'SELECT id FROM locations WHERE name = "'.$Location.'"';
  $locationIDResult = mysqli_query($dbc, $QlocationID);
  check_results($locationIDResult);
  $locationID = mysqli_fetch_array($locationIDResult,MYSQLI_NUM);

  $query = 'INSERT INTO stuff(location_id, description, owner, finder, status) 
			VALUES (' .$locationID[0]. ', "' .$Description. '", "N/A", "' .$Name. '", "found")';
  
  $results = mysqli_query($dbc,$query) ;
  check_results($results) ;

  return $results ;
}

# Shows the query as a debugging aid
function show_query($query) {
  global $debug;

  if($debug)
    echo "<p>Query = $query</p>" ;
}

# Checks the query results as a debugging aid
function check_results($results) {
  global $dbc;

  if($results != true)
    echo '<p>SQL ERROR = ' . mysqli_error( $dbc ) . '</p>'  ;
}

# Checks if the query is a valid number
function valid_number($number){
	if(empty($number) || !is_numeric($number))
		return false;
	else {
		$number = intval($number);
			if($number <= 0)
				return false;
	}
	return true;
}

#Checks if the query is a valid name
function valid_name($name){
	if(empty($name)  || is_numeric($name))
		return false;
	else{
		return true;
	}
}

function valid_text($text){
	if(empty($text))
		return false;
	else{
		return true;
	}
}

function valid_location($dbc, $location){
	$query = "SELECT name FROM locations WHERE name = '$location'";
	$result = mysqli_query($dbc, $query);
	
	if(mysqli_num_rows($result) > 0){
		return true;
	} else {
		return false;
	}
}
?>