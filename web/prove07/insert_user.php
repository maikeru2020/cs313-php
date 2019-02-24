<?php
    session_start();
    require 'db_connect.php';
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    if ($firstName == "" || $lastName == "" || $username == "") {
        $_SESSION['message'] = 'All fields required';
        header('location: sign_up.php');
        die();
    }
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
    $statement = $db->prepare("INSERT INTO teachers (first_name, last_name, username, password_hash, is_headmaster) VALUES (:firstName, :lastName, :username, :passwordHash, FALSE)");
    $statement->bindParam(':firstName', $firstName);
    $statement->bindParam(':lastName', $lastName);
    $statement->bindParam(':username', $username);
    $statement->bindParam(':passwordHash', $passwordHash);
    $statement->execute();
    header('location: sign_in.php');
    exit();
?>