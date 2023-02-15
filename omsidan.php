
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/css/navbar.css" />
    <link rel="stylesheet" href="./css/footer.css" />
    <link rel="stylesheet" href="./css/sidebar.css" />
    <link rel="stylesheet" href="./css/logoutlink.css" />
    <title>Om sida</title>
</head>
<body>
<a href="logout.php" id="logoutlink" >Logout</a>
<div id="container">
    <?php include 'includes/navbar.php'; ?>
</div>

<?php
include 'includes/information.php';
?>
<?php
include("includes/sidebar.php");
include("includes/footer.php");


?>
</body>
</html>


<?php


include "includes/loginsession.php";
