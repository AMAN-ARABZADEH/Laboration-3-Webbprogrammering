
<?php
session_start();
// Check if the user is logged in
if (!isset($_SESSION['username']) || !isset($_SESSION['password'])) {
    // If the user is not logged in, redirect to the login page
    header('Location: ../login.php');
    exit;
}


include 'includes/navbar.php';
include "includes/about.php";
include 'includes/information.php';

include("includes/sidebar.php");
include("includes/footer.php");

