<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/navbar.css" />
    <link rel="stylesheet" href="./css/footer.css" />
    <link rel="stylesheet" href="./css/sidebar.css" />
    <link rel="stylesheet" href="./css/logoutlink.css" />
    <link rel="stylesheet" href="./css/form.css" />
    <title>Kontakt</title>
</head>
<body>
<!-- <p>Welcome back, <?php echo $_SESSION['username']; ?>!</p> -->
<a href="../logout.php" id="logoutlink" >Logout</a>
<div id="container">
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



?>
</body>
</html>
