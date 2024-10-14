<?php

$servername = "localhost"; 
$username = "root"; 
$password = "";
$database = "userdb";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
  
    $sql = "SELECT * FROM userdata WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $first_name = $row['First_Name'];
        $last_name = $row['Last_Name'];
        $phone_number = $row['Phone_Number'];
        $email_id = $row['Email_ID'];
        $address = $row['Address'];
    } else {
        echo "No user found with ID: $id";
        exit();
    }
} else {
    echo "User ID is required.";
    exit();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<style>


input[type=text], select, textarea {
  width: 50%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}
input[type=number], select, textarea {
  width: 50%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}
input[type=email], select, textarea {
  width: 50%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
  float: center; 		
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: center;
}

input[type=submit]:hover {
  background-color: #45a049;
}



</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User Information</title>
</head>
<body>
    <h2>Update User Information</h2>

    <form action="update_process.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">

        <label for="first_name">First Name:</label><br>
        <input type="text" name="first_name" value="<?php echo htmlspecialchars($first_name); ?>" required><br><br>

        <label for="last_name">Last Name:</label><br>
        <input type="text" name="last_name" value="<?php echo htmlspecialchars($last_name); ?>" required><br><br>

        <label for="phone_number">Phone Number:</label><br>
        <input type="text" name="phone_number" value="<?php echo htmlspecialchars($phone_number); ?>" required><br><br>

        <label for="email_id">Email ID:</label><br>
        <input type="email" name="email_id" value="<?php echo htmlspecialchars($email_id); ?>" required><br><br>

        <label for="address">Address:</label><br>
        <textarea name="address" rows="4" cols="50" required><?php echo htmlspecialchars($address); ?></textarea><br><br>

        <input type="submit" value="Update Information">
    </form>
</body>
</html>
