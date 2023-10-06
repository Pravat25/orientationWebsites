<?php
include '../db_config.php';

// Make sure to use proper POST field names
$studentUsername = $_POST['uname'];
$studentPassword = $_POST['psw'];
$Usertype = $_POST['user_role'];

// Initialize $stmt to null
$stmt = null;

// Check if the username already exists
$checkQuery = "SELECT username FROM tbl_login WHERE username = ?";
$stmtCheck = $conn->prepare($checkQuery);
$stmtCheck->bind_param("s", $studentUsername);
$stmtCheck->execute();
$stmtCheck->store_result();

if ($stmtCheck->num_rows > 0) {
    header("Location: create_user.php?err=1");

   
} else {
    // Username doesn't exist, proceed with inserting the new user
    $stmtCheck->close();

    // Insert the new user
    $insertQuery = "INSERT INTO tbl_login (username, password, user_type) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($insertQuery);
    $stmt->bind_param("sss", $studentUsername, $studentPassword, $Usertype);

    if ($stmt->execute()) {
        echo "New record created successfully";
        header("Location: admin_homepage.php");
    } else {
        echo "Error: " . $stmt->error;
    }
}

// Close database connections if $stmt is not null
if ($stmt !== null) {
    $stmt->close();
}

// Close the database connection
$conn->close();
?>
