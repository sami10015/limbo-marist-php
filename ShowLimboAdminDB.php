<?php 

# Connect to MySQL server and the database
		require( 'includes/connect_db.php' ) ;
		
		# Create a query to get the name and price sorted by price
		$query = 'SELECT s.id, owner, finder, description, name, status FROM stuff AS s, locations AS l WHERE s.location_id = l.id' ;

		# Execute the query
		$results = mysqli_query( $dbc , $query ) ;
		
		# Show results
		if( $results )
		{
		  # But...wait until we know the query succeeded before
		  # starting the table;
		  echo '<TABLE BORDER align = "center">';
		  echo '<TR>';
		  echo '<TH>ID#</TH>';
		  echo '<TH>Owner</TH>';
		  echo '<TH>Finder</TH>';
		  echo '<TH>Description</TH>';
		  echo '<TH>Location</TH>';
		  echo '<TH>Status</TH>';
		  echo '</TR>';

		  # For each row result, generate a table row
		  while ( $row = mysqli_fetch_array( $results , MYSQLI_ASSOC ) )
		  {
			echo '<form method = "POST" action = "UpdateStatusAdmin.php">';
			echo '<TR>' ;
			echo '<TD name = "ID" value = '.$row['id'].'>'. $row['id'] .'</TD>';
			echo '<TD>' . $row['owner'] . '</TD>' ;
			echo '<TD>' . $row['finder'] . '</TD>';
			echo '<TD>' . $row['description'] . '</TD>' ;
			echo '<TD>' . $row['name'] . '</TD>' ;
			echo '<TD class = "select">
					<select name = "Status">
						<option value = "lost">Lost</option>
						<option value = "found">Found</option>
					</select>
				  </TD>' ;
			echo '<TD> <input type = "submit" value = "Submit"> </TD>';
			echo '</TR>' ;
			echo '</form>';
		  }

		  # End the table
		  echo '</TABLE>';

		  # Free up the results in memory
		  mysqli_free_result( $results ) ;
		}

?>