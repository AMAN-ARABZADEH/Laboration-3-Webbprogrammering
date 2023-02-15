

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .column {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 60%;
            margin: auto;
            margin-top: 10%;
        }

        input[type="text"],
        select,
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        @media only screen and (max-width: 600px) {
            .column {
                width: 100%;
            }
        }
    </style>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/navbar.css" />
    <link rel="stylesheet" href="./css/footer.css" />
    <link rel="stylesheet" href="./css/sidebar.css" />
    <link rel="stylesheet" href="./css/logoutlink.css" />


    <title>Kontakt</title>
</head>
<body>
<!-- <p>Welcome back, <?php echo $_SESSION['username']; ?>!</p> -->
<a href="logout.php" id="logoutlink" >Logout</a>
<div id="container">
    <?php include 'includes/navbar.php'; ?>
    <section class="column">
        <form action="/action_page.php">
            <label for="fname">Förnamn: </label>
            <input type="text" id="fname" name="firstname" placeholder="Din förnamn..">
            <label for="lname">Efternamn: </label>
            <input type="text" id="lname" name="lastname" placeholder="Din efternamn..">
            <label for="color">Favorit färg</label>
            <select id="color" name="color">
                <option value="red">Red</option>
                <option value="blue">Blue</option>
                <option value="green">Green</option>
                <option value="yellow">Yellow</option>
                <option value="purple">Purple</option>
            </select>
            <label for="subject">Ämne</label>
            <textarea id="subject" name="subject" placeholder="Skriv nåt här.." style="height:170px"></textarea>
            <input type="submit" value="Submit">
        </form>
    </section>
</div>
<?php
include("includes/sidebar.php");
include("includes/footer.php");


?>
</body>
</html>

<?php


include "includes/loginsession.php";