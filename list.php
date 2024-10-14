<?php
$host = 'localhost';
$db = 'userdb';         
$user = 'root';  
$pass = '';           


$conn = new mysqli($host, $user, $pass, $db);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM userdata ";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Data-All</title>
	<style>
#users {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#users td, #users th {
  border: 1px solid #ddd;
  padding: 8px;
}

#users tr:nth-child(even){background-color: #f2f2f2;}

#users tr:hover {background-color: #ddd;}

#users th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
	
	
</head>
<body>

<h2>User List</h2>

<table border="1" id="users">
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Phone Number</th>
        <th>Email ID</th>
        <th>Address</th>
		<th>Delete</th>
		<th>Update</th>
    </tr>
    <?php
    if ($result->num_rows > 0) {
        // Output data for each row
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>{$row['id']}</td><td>{$row['First_Name']}</td><td>{$row['Last_Name']}</td><td>{$row['Phone_Number']}</td><td>{$row['Email_ID']}</td><td>{$row['Address']}</td><td><a href=http://localhost/userApp/delete.php?id={$row['id']}><img src=delete.PNG height=50></a></td><td><a href=http://localhost/userApp/update.php?id={$row['id']}><img src=update.PNG height=50></a></td></tr>";
        }
    } else {
        echo "<tr><td colspan='3'>No data found</td></tr>";
    }
    ?>
</table>
<a href="form.php"><Button>Back </Button></a>
</body>
</html>
