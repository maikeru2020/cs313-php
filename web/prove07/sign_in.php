<?php
    session_start();
    $message = "";
    if (isset($_SESSION['message'])) {
        $message = $_SESSION['message'];
        unset($_SESSION['message']);
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sign In</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css">
    <script src="main.js"></script>
</head>
<body>
    <div class="leftAlign">
    <h1>Sign In</h1>
    <p class="error"><?php echo $message; ?></p>
    <form action="confirm_login.php" method="post">
        Username:<br>
        <input type="text" name="username"><br><br>
        Password:<br>
        <input type="password" name="password"><br><br>
        <input type="submit">
    </form><br>
    <a href="sign_up.php">Sign Up</a>
    </div>
</body>
</html>