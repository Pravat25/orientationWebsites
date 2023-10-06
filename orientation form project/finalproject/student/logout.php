<?php
// Start the session to access session variables
session_start();

// Clear all session variables
session_unset();

// Destroy the session
session_destroy();

// Redirect to the admin login page
header("Location: index.php");
exit; // Make sure to exit after the redirection
?>
