<?php
	
	echo "<h1>Customer Table</h1>"; //echo a header
	
	//database settings
	$servername = "localhost";
	$username = "root";
	$password = "";

	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error); //if theres an error connecting, cancel and display the error
	}
	
	$sql = "SELECT * FROM $table"; //select everything from whatever is saved under table (line 8)
	$result = $conn->query($sql);	

	if ($result->num_rows > 0) { //if there are at least one result
		while($row = $result->fetch_assoc()) { //turn the result into an array. Loop through each row
	        echo $row['name'] . ", "; //echo name, comma, and a space
			echo $row['balance'] . "."; //echo name and full stop
			echo "<br />"; //echo new line
	    }
	} else {
		echo "No results found."; //echo if zero resultss
	}

	//get the email to display

?>