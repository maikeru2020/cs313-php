<?php
    session_start();
    require 'db_connect.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    if ($password != $confirmPassword) {
        $_SESSION['message'] = 'Passwords do not match';
        header('location: sign_up.php');
        die();
    } else if (strlen($password) < 7) {
        $_SESSION['message'] = 'Password must be at least 7 characters';
        header('location: sign_up.php');
        die();
    } else if (!preg_match("/\d/", $password)) {
        $_SESSION['message'] = 'Password must contain at least one number';
        header('location: sign_up.php');
        die();
    }

    $passwordHash = password_hash($password, PASSWORD_DEFAULT);
    $statement = $db->prepare("INSERT INTO users (username, password_hash) VALUES (:username, :passwordHash)");
    $statement->bindParam(':username', $username);
    $statement->bindParam(':passwordHash', $passwordHash);
    $statement->execute();
    header('location: sign_in.php');
    exit();
?>