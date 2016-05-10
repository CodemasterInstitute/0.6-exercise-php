<?php
	
	
	//database settings
	$servername = "localhost";
	$username = "root";
	$password = "";
	
	$dbname = "bank";
	$table = "customers";
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error); //if theres an error connecting, cancel and display the error
	}
	
	if(isset($_POST['name'])){

		$name = $_POST['fullname'];
		$email = $_POST['emailaddress'];
		$balance = $_POST['accountbalance'];


		$sql = "INSERT INTO $table SET name='$name', email='$email', balance='$balance'";

		if ($conn->query($sql) === TRUE) {
		    echo "Record added successfully";
		} else {
		    echo $error . $sql . "<br>" . $conn->error;
		}
	} else {
		echo "No data sent";
	}


?>