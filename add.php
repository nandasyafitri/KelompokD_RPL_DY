<html>
<head>
	<title>Add Users</title>
</head>

<body>
	<a href="index.php">Go to Home</a>
	<br/><br/>

	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr>
				<td>Name</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>

	<?php
	$databaseHost = 'localhost';
	$databaseName = 'rpl';
	$databaseUsername = 'root';
	$databasePassword = '';

	$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
	// Fetch all users data from database
	$result = mysqli_query($mysqli, "SELECT * FROM users");

	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$nama = $_POST['nama'];
		$email = $_POST['email'];
		$username = $_POST['username'];
		$password = md5($_POST['password']);

		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO users(nama,email,username,password) VALUES('$nama','$email','$username','$password')");

		// Show message when user added
		echo "User added successfully. <a href='index.php'>View Users</a>";
	}
	?>
</body>
</html>
