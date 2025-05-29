<?php
// db_connect.php: Database connection file

// Database connection parameters
$servername = "127.0.0.1:3307";
$username = "root"; // Default XAMPP username
$password = ""; // Empty password as specified in config
$dbname = "dataproje";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Return the connection object (can be used in other files)
return $conn;
?>
