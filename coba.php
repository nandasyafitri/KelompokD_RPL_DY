<?php
$databaseHost = 'localhost';
$databaseName = 'rpl';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM users");

 ?>
<!DOCTYPE html>
<html>
<head>
    <title>Homepage</title>
</head>

<body>
<a href="add.php">Add New User</a><br/><br/>

    <table width='80%' border=1>

    <tr>
        <th>id</th> <th>Email</th> <th>username</th> <th>Update</th>
    </tr>
    <?php
    while($user_data = mysqli_fetch_array($result)) {
        echo "<td>".$user_data['id']."</td>";
        echo "<td>".$user_data['email']."</td>";
        echo "<td>".$user_data['username']."</td>";
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";
    }
    ?>
    </table>
</body>
</html>
