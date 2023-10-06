<?php
session_start();
if(!isset($_SESSION['username'])){
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Homepage</title>
    <link rel="stylesheet" type="text/css" href="style/style1.css">

    <style>



    </style>
</head>

<body
    style="background-image: url('../logo/background.png'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed; background-blend-mode: darken; background-position: center center; margin: 0; padding: 0;">

    <header>
        <a href="https://www.cihe.edu.au/">
            <img src="logo\logo1.png" alt="CIHE" width="80.9" height="70" style="flex-shrink: 0;">
            <span class="cihe">Crown Institute of Higher Education</span>
        </a>
        <span style=" color: white; font-size: 18px;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Hello, <?php echo $_SESSION['username']; ?>
        </nav>
    </header>

    <div class="sidebar light-grey">

        <a href="home.php" class="w3-button">Home</a><br>
        <a href="form.php" class="w3-button">Form</a><br>
        <a href="index.php" class="w3-button">Logout</a>
    </div>

    <div style="margin-left:25%">


        <div class="rectangle-container">
            <h3>"Thank you for attending Orientation class. "</h3>
        </div>


    </div>

    <div class="footer">
        <div class="footer-text">
            Crown Institute Of Higher Education<br>University &copy;<br> 2023 - Australia
        </div>
    </div>

</body>

</html>