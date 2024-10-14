<?php
$host = 'localhost'; 
$db = 'userdb'; 
$user = 'root';      
$pass = '';           

// Create connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$Fname=$_POST['firstName'];
$Lname=$_POST['lastName'];
$Phone=$_POST['phoneNo'];
$Email=$_POST['email'];
$Address=$_POST['address'];

// Prepare and bind statement to prevent SQL Injection
    $stmt = $conn->prepare("INSERT INTO userdata (First_Name,Last_Name,Phone_Number,Email_ID,Address) VALUES ('$Fname', '$Lname','$Phone','$Email','$Address')");
  
    if ($stmt->execute()) {
        echo "<center><h1>New record created successfully!</h1><center>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
?>