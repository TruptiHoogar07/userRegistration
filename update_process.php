<?php

$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "userdb"; 


$conn = new mysqli($servername, $username, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $id = intval($_POST['id']);
    $first_name = $conn->real_escape_string($_POST['first_name']);
    $last_name = $conn->real_escape_string($_POST['last_name']);
    $phone_number = $conn->real_escape_string($_POST['phone_number']);
    $email_id = $conn->real_escape_string($_POST['email_id']);
    $address = $conn->real_escape_string($_POST['address']);
	
    $sql = "UPDATE userdata SET First_Name='$first_name', Last_Name='$last_name', Phone_Number='$phone_number', Email_ID='$email_id', Address='$address' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "<center><h1>Record updated successfully</h1></center>";
    } else {
        echo "Error updating record: " . $conn->error;
    }

    // Close the database connection
    $conn->close();
} else {
    echo "Invalid request method";
}
?>
