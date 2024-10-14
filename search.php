<?php
$host = 'localhost';  
$db = 'userdb';         
$user = 'root';       
$pass = '';           


$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$searchStr=$_POST['search'];
$sql = "SELECT * FROM userdata where First_Name like '%$searchStr%'";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Data-Search</title>
	
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

<table border="1"  id="users">
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Phone Number</th>
        <th>Email ID</th>
        <th>Address</th>
    </tr>
    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>{$row['id']}</td><td>{$row['First_Name']}</td><td>{$row['Last_Name']}</td><td>{$row['Phone_Number']}</td><td>{$row['Email_ID']}</td><td>{$row['Address']}</td></tr>";
        }
    } else {
        echo "<tr><td colspan='3'>No data found</td></tr>";
    }
    ?>
</table>
<a href="form.php"><Button>Back </Button></a>
</body>
</html>
