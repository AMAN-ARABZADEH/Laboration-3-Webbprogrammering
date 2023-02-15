<?php
// Start the session
session_start();

// Check if the user has already logged in
if (isset($_COOKIE['username']) && isset($_COOKIE['password'])) {
    // If the user has logged in, set the session variables
    $_SESSION['username'] = $_COOKIE['username'];
    $_SESSION['password'] = $_COOKIE['password'];
}

// Check if the user has submitted the form
if (isset($_POST['submit'])) {
    // Get the username and password from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Hash the password for security purposes
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
    // Verify the entered password with the stored hashed password
    $passwordVerify = password_verify($password, $hashedPassword);

    // Check if the username and password are correct
    if ($username == 'admin' && $passwordVerify) {
        // If the username and password are correct, set the session variables
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $hashedPassword;

        // Set the cookies to remember the user's login
        setcookie('username', $username, time() + (86400 * 30)); // 86400 = 1 day
        setcookie('password', $hashedPassword, time() + (86400 * 30));

        // Redirect to the protected page
        header('Location:  index.php');
        exit;
    } else {
        // If the username and password are incorrect, show an error message
        $error = 'Invalid username or password';
    }
}

// Check if the user is logged in
if (!isset($_SESSION['username']) && isset($_SESSION['password'])) {
    // If the user is logged in, redirect to the protected page
    header('Location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/login.css">
    <title>Login</title>
</head>
<body>
<?php if (isset($error)) { ?>
    <p style="color: red;"><?php echo $error; ?></p>
<?php } ?>
<form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <div>
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required />
    </div>
    <br />
    <div>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required />
    </div>
    <input type="submit" name="submit" value="Login" />
</form>
</body>
</html>