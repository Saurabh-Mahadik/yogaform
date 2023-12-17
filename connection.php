<?php
$host = 'localhost';
$user = 'root';
$password = ''; // Replace with your actual password
$database = 'saurabh';

// Create a connection to the MySQL database
$conn = mysqli_connect($host, $user, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";

// Now you can perform database operations using $conn

// Remember to close the connection when you're done
mysqli_close($conn)
?>