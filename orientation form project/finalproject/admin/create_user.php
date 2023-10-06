<?php
session_start();
if(!isset($_SESSION['username'])){
    header("Location: ../student/index.php");
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Create Student Account</title>
    <style>
        /* Global styles */
        html, body {
            height: 100%;
            margin: 0;
        }

        body {
            background-image: url('logo/background.png');
            background-size: cover;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
        }

        main {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Container to house the form */
        .container {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 40px 60px;
            border-radius: 15px;
            width: 400px;
            box-shadow: 0px 0px 25px 5px rgba(0,0,0,0.3);
        }

        label {
            color: #333;
            font-size: 18px;
            margin-bottom: 10px;
        }

    
    .cihe {
    color: white;
    font-family: Julius Sans One;
    vertical-align: middle;
    display: inline-block;
  }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 15px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #aaa;
            font-size: 16px;
        }

        button {
            padding: 10px 10px;
            background-color: #0066ff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
            width: 100%;
            margin-top: 20px;
        }

        button:hover {
            background-color: #0055cc;
        }

        .footer {
            background-color: #001F3D; 
            padding: 20px;
            text-align: center;
            color: white;
            font-weight: bold;
        }

        header {
            text-align: center;
            margin-bottom: 30px;
        }

        header img {
            margin-top: 20px;
        }

        header span {
            font-size: 24px;
            font-weight: bold;
            display: block;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <header>
        <a href="https://www.cihe.edu.au/">
            <img src="logo/logo1.png"  width="80.9" height="70"><br>
            <span class="cihe">Crown Institute of Higher Education</span>
        </a>
    </header>

    <main>
        <div class="container">
        <?php
        if (isset($_GET['err'])) {
    $errorMessage = $_GET['err'];
    echo '<div style="color:brown;"class="error-message">User name already exist. Please choose another username. </div>';
}
?> 
         <a href="admin_homepage.php"> <button> homepage  </button> </a>

            <form method="post" name="create_user_form" action="create_user_action.php" onsubmit="return validatePasswords();">
                
                

                <label for="uname">Username</label>
                <input type="text" placeholder="Enter Username" name="uname" required>

                <label for="psw">Password</label>
                <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

                <label for="psw-repeat">Retype Password</label>
                <input type="password" placeholder="Retype Password" name="psw-repeat" id="psw-repeat" required>

                <label for="User Role"><b>User Role</b></label>
                <select name="user_role">
                     <option value="admin">Admin</option>
                    <option value="user">User</option>
        
                        </select><br>

                <button type="submit">Create Account</button>
            </form>
        </div>
    </main>

    <div class="footer">
        Crown Institute Of Higher Education<br> &copy; 2023 - Australia
    </div>

    <script>
        function validatePasswords() {
            var pass = document.getElementById("psw").value;
            var passRepeat = document.getElementById("psw-repeat").value;

            if (pass !== passRepeat) {
                alert("Passwords do not match!");
                return false;
            }
            return true;
        }
    </script>

</body>

</html>
