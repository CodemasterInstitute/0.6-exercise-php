<?php
	
	$part1 = 12 * 130;
	$part2 = "codemaster";
	$part3 = strtoupper("institute");
	
	$correctpassword = $part2 . $part3 . $part1;
	
	if(isset($_POST["password"])){ //this checks if the password was sent
		if($_POST["password"] == $correctpassword){ //this compares the sent password with the correct password
			echo "Correct Password!";
		} else {
			echo "Incorrect Password!";
		}
	}
	
	//the code below outputs the form, one line at a time.
	echo "<form method='POST'>";
	echo "<label for='password'>Password: <input name='password' type='password' value=''></label>";
	echo "<input type='submit' value='Submit' />";
	echo "</form>";
	

?>