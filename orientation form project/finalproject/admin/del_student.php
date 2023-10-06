<?php


include '../db_config.php';
if(!isset($_SESSION['username'])){
    header("Location: ../student/index.php");
}


if (isset($_GET["id"]) && !empty($_GET["id"])) {
    $studentId = $_GET["id"];

    // SQL query to delete the student by studentId
    $sql = "DELETE FROM tbl_student WHERE studentId = $studentId";

    if ($conn->query($sql) === TRUE) {
        // Redirect back to the view_student.php page after successful deletion
        header("Location: view_student.php");
        exit();
    } else {
        echo "Error deleting student: " . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
