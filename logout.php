<?php
session_start();

// Unset the session variables
unset($_SESSION['username']);
unset($_SESSION['password']);

// Destroy the session
session_destroy();

// Delete the cookies
setcookie('username', '', time() - 3600);
setcookie('password', '', time() - 3600);

// Redirect to the login page
header('Location: login.php');
exit;
?>