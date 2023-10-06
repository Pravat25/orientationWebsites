<!DOCTYPE html>
<html>

<head>
  <title>Homepage</title>
  <link rel="stylesheet" type="text/css" href="style/style1.css">
  <style>

  </Style>


</head>

<body>
<?php if(isset($_SESSION['message'])): ?>
    <div id="message" style="
        position: fixed;
        top: 20px;
        right: 20px;
        padding: 10px;
        background-color: <?php echo $_SESSION['msg_type'] == "success" ? "lightgreen" : "lightcoral"; ?>;
        color: white;
        border-radius: 5px;
        z-index: 1000;">
        <?php 
            echo $_SESSION['message']; 
            unset($_SESSION['message']);
        ?>
    </div>
    <script>
        setTimeout(function(){
            document.getElementById('message').style.display = 'none';
        }, 7000);
    </script>
<?php endif; ?>
  <header>
    <a href="https://www.cihe.edu.au/">
      <img src="logo\logo1.png" alt="CIHE" width="80.9" height="70" style="flex-shrink: 0;">
      <span class="cihe">Crown Institute of Higher Education</span>
    </a>
  </header>
  <p>WELCOME TO CIHE</p><

  <div class="container">
   <?php
if (isset($_GET['error'])) {
    $errorMessage = $_GET['error'];
    echo '<div style="color:brown;"class="error-message">Invalid login details. Please try again.</div>';
}
?> 
    <form method="post" name="login_form" action="login.php">
    <label style="color: white;" for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required><br>

    <label style="color: white;" for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required><br>

     <label style="color: white;" for="User Role"><b>User Role</b></label>
    <select name="user_role">
        <option value="admin">Admin</option>
        <option value="user">User</option>
        
    </select><br>
    
      <button  submit>Login</button>

  </div>
  </div><br>
  <div class="contact">
    <label style="color: white;">
      <input type="checkbox" checked="checked" name="remember"> Remember me
      <br> <br>
      <span class="text"><a href="#" style="color: white;">~Contact Service Desk~</a></span>
</label>
  </div>
  </form><br>
  <br>


  <div class="footer">
    <div class="footertext">
      Crown Institude Of Higher Education</br>University</br> &copy;</br> 2023 - Australia
    </div>


  </div>
  </div>


</body>

</html>