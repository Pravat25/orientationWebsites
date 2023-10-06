<?php
// Establish a database connection (you'll need to provide the appropriate credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "orientation";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to retrieve student requests (you'll need to adjust this query to your database schema)
$sql = "SELECT student_name, request_details FROM student_requests";

$result = $conn->query($sql);

$requests = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $requests[] = $row;
    }
}

// Close the database connection
$conn->close();

// Return the fetched student requests as a JSON response
header('Content-Type: application/json');
echo json_encode($requests);
?>
