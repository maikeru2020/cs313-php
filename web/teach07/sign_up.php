<?php
    session_start();
    $asterisk = "";
    $message = "";
    if (isset($_SESSION['message'])) {
        $asterisk = '*';
        $message = $_SESSION['message'];
        unset($_SESSION['message']);
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sign Up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css">
    <script src="script.js"></script>
</head>
<body>
    <h1>Sign Up</h1>
    <form action="insert_user.php" method="post">
        Username:<br>
        <input type="text" name="username"><br><br>
        <p class='gray'>Must contain a number and have a minimum of 7 characters</p>
        Password:<br>
        <input type="password" name="password" id='password' oninput='checkPasswords();'><span class='error' id='message'><?php echo "$asterisk $message" ?></span><br><br>
        Confirm Password:<br>
        <input type="password" name="confirmPassword" id='confirm' oninput='checkPasswords();'><span class='error' id='asterisk'><?php echo $asterisk ?></span><br><br>
        <input type="submit">
    </form>
</body>
</html>