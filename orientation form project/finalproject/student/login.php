<?php
// error_reporting(E_ALL);
// ini_set('display_errors', 1);


include '../db_config.php';

$userInputUsername = $_POST['uname'];
$userInputPassword = $_POST['psw'];
$usertype = $_POST['user_role'];
//$echo $usertype;


// Prepare and execute a query to check the login 
$query = "SELECT * FROM tbl_login WHERE username = '$userInputUsername' AND password = '$userInputPassword' AND user_type = '$usertype'";
$result = $conn->query($query);

// Check if a row with the provided username and password exists
if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $_SESSION['username'] = $userInputUsername;
    $userRole = $row['user_type'];

    // Check the user role and redirect accordingly
    if ($usertype == 'admin') {
        header("Location: ../admin/admin_homepage.php");
    } elseif ($usertype == 'user') {
        header("Location: home.php");
    } else {
        // Handle other user roles or cases as needed
        echo "Invalid user role.";
    }
} else {
    header("Location: index.php?error=1");
}


// Close the database connection after all operations
$conn->close();
?>
