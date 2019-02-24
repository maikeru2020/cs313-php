<?php
    session_start();
    if (isset($_SESSION['loggedIn'])) {
        $username = $_SESSION['userName'];
    } else {
        header('location: sign_in.php');
        die();
    }
    
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Welcome</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <h1>Welcome <?php echo $username ?>!</h1>
</body>
</html>