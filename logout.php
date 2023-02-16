<?php
session_start();

// Unset the session variables
unset($_SESSION['username']);
unset($_SESSION['password']);

// Destroy the session
session_destroy();



// Redirect to the login page
header('Location: login.php');
exit;
?>