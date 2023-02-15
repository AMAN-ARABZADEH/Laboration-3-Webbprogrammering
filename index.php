

<?php
$page_title = "Startsida";
include("includes/header.php");
?>
    <h2>Startsidan</h2>
    <p>Det här är startsidan.</p>
<?php  include("includes/startsida.php");

    ?>

<?php
include("includes/sidebar.php");
include("includes/footer.php");


?>

<?php
// Start the session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username']) || !isset($_SESSION['password'])) {
    // If the user is not logged in, redirect to the login page
    header('Location: login.php');
    exit;
}
?>

