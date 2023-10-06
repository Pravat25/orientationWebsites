<?php
session_start();
if(!isset($_SESSION['username'])){
    header("Location: ../student/index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Homepage</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('logo/background.png'); /* Add your image URL here */
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh; /* This ensures the body takes up at least 100% of the viewport height */
        }

        .header {
            background-color: navy;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        .logo {
            max-width: 100px;
        }

        .content {
            flex: 1; /* This allows the content to expand and fill the available space */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: rgba(255, 255, 255, 0.9);
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
            padding: 20px;
            max-width: 100%; /* Content covers at least 95% of the webpage */
        }

        .welcome-message {
            font-size: 24px;
            margin-bottom: 20px;
            margin-top: -30px; /* Move the text a little higher */
        }

        .option-container {
            display: flex;
            justify-content: space-between;
            width: 95%;
        }

        .option-box {
            flex: 0 0 calc(50% - 20px); /* Set the width of option boxes with equal spacing */
            background-color: #fff;
            padding: 20px;
            border-radius: 10px; /* Make option boxes slightly bigger */
            border: 1px solid #ccc;
            margin-bottom: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2); /* Add shadow */
            transition: transform 0.3s, box-shadow 0.3s, background-color 0.3s; /* Transition for pop-out and highlighting */
            text-align: center;
        }

        .option-box:hover {
            transform: scale(1.05); /* Pop-out effect on hover */
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.4); /* Increased shadow on hover */
            background-color: #f0f0f0; /* Highlight on hover */
        }

        .option-title {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .option-description {
            font-size: 14px;
        }

        .logout-button {
            background-color: white;
            color:black;
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
            position: absolute;
            top: 10px;
            right: 10px;
        }

        .footer {
            background-color: navy;
            color: #fff;
            padding: 20px;
            text-align: center;
            flex-shrink: 0; /* Ensures the footer does not shrink */
        }

        /* Style for the option buttons */
        .option-button {
            display: inline-block;
            background-color: #0074D9; /* Change the button's background color */
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none; /* Remove underline from links */
            transition: background-color 0.3s; /* Transition for background color */
            margin-top: 10px;
        }

        .option-button:hover {
            background-color: #0056b3; /* Change the button's background color on hover */
        }
    </style>
</head>
<body>
    <div class="header">
        <img src="logo/logo1.png" alt="Logo" class="logo">
    </div>

    <div class="content">
        <h1 class="welcome-message"><big>Welcome, <?php echo $_SESSION['username']; ?> !</big></h1><br>
        <p class="welcome-message">You have access to the admin panel.</p>

        <div class="option-container">
            <div class="option-box">
                <h2 class="option-title">Student Details</h2>
                <p class="option-description">View and search all Students Details</p>
                <a href="view_student.php" class="option-button">View</a> <!-- Use anchor element as a button -->
            </div>
            
            <div class="option-box">
                <h2 class="option-title">create User Account</h2>
                
                <a href="create_user.php" class="option-button">create User</a> <!-- Use anchor element as a button -->
            </div>
        </div>

            <button type="submit" class="logout-button"><a href = "../student/logout.php">Logout</a></button>
    </div>

    <div class="footer">
        &copy; 2023 CIHE. All rights reserved.
    </div>
</body>
</html>
xa