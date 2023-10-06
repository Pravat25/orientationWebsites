


<?php

include '../db_config.php';

if(!isset($_SESSION['username'])){
    header("Location: ../student/index.php");
}




$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
$recordsPerPage = 5;
$offset = ($currentPage - 1) * $recordsPerPage;

$sqlCount = "SELECT COUNT(*) as total FROM tbl_student";
$resultCount = $conn->query($sqlCount);
$rowCount = $resultCount->fetch_assoc();
$totalRecords = $rowCount['total'];
$totalPages = ceil($totalRecords / $recordsPerPage);

$sql = "SELECT firstName, lastName, studentId, currentAddress, mobile, courseEnrolled, campusLocation FROM tbl_student LIMIT $offset, $recordsPerPage";
$result = $conn->query($sql);

// Check if a search query is submitted
if (isset($_POST['student_id']) && !empty($_POST['student_id'])) {
    $searchStudentId = $_POST['student_id'];
    
    $sql = "SELECT firstName, lastName, studentId, currentAddress, mobile, courseEnrolled, campusLocation FROM tbl_student WHERE studentId = ?";
    
    // Prepare the SQL statement
    $stmt = $conn->prepare($sql);
    
    // Bind the parameter
    $stmt->bind_param("s", $searchStudentId);
    
    // Execute the query
    $stmt->execute();
    
    // Get the result
    $result = $stmt->get_result();
} else {
    // If no search query, fetch all students
    $sql = "SELECT firstName, lastName, studentId, currentAddress, mobile, courseEnrolled, campusLocation FROM tbl_student LIMIT $offset, $recordsPerPage";
    
    $result = $conn->query($sql);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Requests</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            background-image: url('logo/background.png'); /* Add your background image URL */
            background-size: cover;
        }

        .header {
            background-color: navy;
            color: #fff;
            text-align: center;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
        }

        .logo {
            max-width: 100px;
            margin: 0 auto;
        }

        .content {
            max-width: 80%;
            margin: 0 auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8); /* Decrease opacity */
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
        }

        .welcome-message {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .student-request {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 20px;
            background-color: #fff;
        }

        .footer {
            background-color: navy;
            color: #fff;
            padding: 20px;
            text-align: center;
            position: absolute;
            width: 100%; /* Span the full width */
            bottom: 0; /* Position at the bottom */
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        .pagination a {
            display: inline-block;
            padding: 5px 10px;
            margin: 0 5px;
            background-color: #ccc;
            color: #000;
            text-decoration: none;
            border-radius: 5px;
        }

        .pagination a:hover {
            background-color: #777;
            color: #fff;
        }

        .search-container {
            text-align: center;
            margin-bottom: 20px;
        }

        .search-container input[type="text"] {
            padding: 10px;
            margin: 5px;
        }

        .search-container input[type="submit"] {
            padding: 10px 20px;
            margin: 5px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

    </style>
</head>
<body>
<div class="header">
    <div>
        <button class="home-button" onclick="goToHomePage()">Home</button>
    </div>
    <img src="logo/logo1.png" alt="Logo" class="logo">
    <br> <h1 class="welcome-message">Welcome, <?php echo $_SESSION['username']; ?></h1><br>
    <button class="logout-button-top" onclick="logout()"><a href="../student/logout.php">Logout</a></button>

    
</div>
<br><br><br>
<div class="content">
    <h1><center>Student Details</center></h1>
    <div class="student-request">
        <div class="search-container">
            <form method="post">
                <input type="text" name="student_id" placeholder="Search by Student ID">
                <input type="submit" value="Search">
            </form>
        </div>

        <?php
        if ($result->num_rows > 0) {
            echo "<table border='1'>";
            echo "<tr><th>Full Name</th><th>Student ID</th><th>Current Address</th><th>Mobile</th><th>Course Enrolled</th><th>Campus Location</th><th>Actions</th></tr>";

            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["firstName"] . " " . $row["lastName"] . "</td>";
                echo "<td>" . $row["studentId"] . "</td>";
                echo "<td>" . $row["currentAddress"] . "</td>";
                echo "<td>" . $row["mobile"] . "</td>";
                echo "<td>" . $row["courseEnrolled"] . "</td>";
                echo "<td>" . $row["campusLocation"] . "</td>";
                echo "<td> <a href='edit_student.php?id=" . $row["studentId"] . "'>Edit</a>
                           <a href='del_student.php?id=" . $row["studentId"] . "' onclick='return confirmDelete();'>Delete</a></td>";
                echo "</tr>";
            }

            echo "</table>";
        } else {
            echo "No data found.";
        }
        ?>


    </div>
<!-- Pagination -->
    <div style="text-align: center;" class="pagination">
        <?php
        if ($currentPage > 1) {
            echo "<a href='view_student.php?page=" . ($currentPage - 1) . "'>Previous</a>";
        }
        for ($i = 1; $i <= $totalPages; $i++) {
            echo "<a href='view_student.php?page=" . $i . "'>" . $i . "</a>";
        }
        if ($currentPage < $totalPages) {
            echo "<a href='view_student.php?page=" . ($currentPage + 1) . "'>Next</a>";
        }
        ?>
    </div>
    
</div>
<div class="footer">
    &copy; 2023 CIHE. All rights reserved.
</div>

<script>
    // Function to handle logout
    function logout() {
        // Redirect to logout page or perform logout action
        window.location.href = "../student/logout.php";
    }

    // Function to navigate to the admin homepage
    function goToHomePage() {
        // Redirect to the admin homepage
        window.location.href = "admin_homepage.php";
    }

    function confirmDelete() {
        return confirm("Are you sure you want to delete this student?");
    }
</script>
</body>
</html>
