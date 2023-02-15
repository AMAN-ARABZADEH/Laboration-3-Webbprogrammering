<?php
include("includes/config.php");

?>



<!DOCTYPE html>
<html lang="sv">
<head>
    <title><?=  $site_title . $divider . $page_title; ?></title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/navbar.css" type="text/css">
    <link rel="stylesheet" href="./css/leftcontant.css" type="text/css">
    <link rel="stylesheet" href="./css/answer.css" type="text/css">
    <link rel="stylesheet" href="./css/sidebar.css" type="text/css">
    <link rel="stylesheet" href="./css/footer.css" type="text/css">
</head>
<body>
<!-- <p>Welcome back, <?php echo $_SESSION['username']; ?>!</p> -->
<a href="logout.php" style="width:100%; height: 10%; background: white; color: darkblue; margin-top: 10; margin-left: 85%;">Logout</a>
<div id="container">
    <header id="mainheader">
        <h1>PHP Struktur</h1>
        <?php include("includes/mainmenu.php"); ?>
    </header>

    <section id="leftcontent">

