<?php
    session_start();
    require 'db_connect.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
   
    $result = $db->query("SELECT password_hash FROM users WHERE username = '$username'");

    foreach ($result as $row) {
        $passwordHash = $row['password_hash'];
        if (password_verify($password, $passwordHash)) {
            $_SESSION['loggedIn'] = TRUE;
            $_SESSION['userName'] = $username; 
            header('location: welcome.php');
            exit();
        } else {
            header('location: sign_in.php');
            exit();
        }
        
    }
    

?>