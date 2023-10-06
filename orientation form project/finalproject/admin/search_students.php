<?php
include '../db_config.php';

if (isset($_POST['student_id'])) {
    $studentId = $_POST['student_id'];

    // SQL query to search for a student by ID
    $sql = "SELECT firstName, lastName, studentId, currentAddress, mobile, courseEnrolled, campusLocation FROM tbl_student WHERE studentId = ?";
    
    // Prepare the SQL statement
    $stmt = $conn->prepare($sql);
    
    // Bind the parameter
    $stmt->bind_param("s", $studentId);
    
    // Execute the SQL query
    $stmt->execute();
    
    // Get the result
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Output table header
        echo "<table border='1'>";
        echo "<tr><th>Full Name</th><th>Student ID</th><th>Current Address</th><th>Mobile</th><th>Course Enrolled</th><th>Campus Location</th><th>Actions</th></tr>";

        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["firstName"] . " " . $row["lastName"] . "</td>";
            echo "<td>" . $row["studentId"] . "</td>";
            echo "<td>" . $row["currentAddress"] . "</td>";
            echo "<td>" . $row["mobile"] . "</td>";
            echo "<td>" . $row["courseEnrolled"] . "</td>";
            echo "<td>" . $row["campusLocation"] . "</td>";
            echo "<td> <a>Edit</a>  <a href='del_student.php?id=" . $row["studentId"] . "' onclick='return confirmDelete();'>Delete</a></td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "No data found.";
    }

    // Close the database connection
    $stmt->close();
    $conn->close();
}
?>
