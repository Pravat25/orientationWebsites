<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "orientation";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully to the database!";
    // You can perform database operations here
}

// Close the connection when done
$conn->close();
?>
