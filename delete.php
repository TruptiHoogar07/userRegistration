<?php
$host = 'localhost';  
$db = 'userdb';         
$user = 'root';       
$pass = '';    

$id = $_GET['id'];


$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "DELETE FROM userdata WHERE id = $id"; 

if (mysqli_query($conn, $sql)) {
    mysqli_close($conn);
    header('Location: list.php'); 
    exit;
} else {
    echo "Error deleting record";
}
?>

<!DOCTYPE html>
<html lang="en">

<body>
<a href="form.php"><Button>Back </Button></a>
</body>
</html>
