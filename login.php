<?php session_start();
if (isset($_COOKIE['token'])) {
    header("location: main.php");
} else {
    }?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="loginCheck.php" method="post">
        <input placeholder="Email" name="email" id="email"><br>
        <input placeholder="password" name="pwd" id="pwd"><br>
        <input type="submit" value="login">
        <input type="submit" value="Sign Up">
        </form>
</body>
</html>