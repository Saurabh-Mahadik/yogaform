<?php
$host = 'localhost';
$user = 'root';
$password = 'saurabh@123'; 
$database = 'saurabh';

$conn = mysqli_connect($host, $user, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connection successfully";



mysqli_close($conn)
?>
