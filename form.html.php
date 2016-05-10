<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Database Form</title>
</head>
<body>
	<!-- Create your form here -->
	<form method="post" action="add.php">

	<!-- three inputs (name, balance, email)-->
	<label for="name">Name: <input type="text" id="name" /></label>
	<label for="email">Email address:<input type="email" id="email" /></label>
	<label for="balance">Balance: <input type="text" id="balance"/> </label>
	<!-- submit button -->
	<input type="submit" value="submit"/>
	</form>
	<?php echo "test!"; ?>

</body>
</html>