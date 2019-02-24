<?php
    session_start();
    if (isset($_SESSION['isHeadmaster'])) {
        unset($_SESSION['isHeadmaster']);
    }
    require 'db_connect.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
    $result = $db->query("SELECT password_hash FROM teachers WHERE username = '$username'");
    foreach ($result as $row) {
        $passwordHash = $row['password_hash'];
        if (password_verify($password, $passwordHash)) {
            $result = $db->query("SELECT teacher_id, is_headmaster FROM teachers WHERE username = '$username'");
            foreach ($result as $row) {
                $teacherId = $row['teacher_id'];
                $isHeadmaster = $row['is_headmaster'];
            }
            $_SESSION['teacherId'] = $teacherId;
            if ($isHeadmaster) { 
                $_SESSION['isHeadmaster'] = 'true';
                header('location: display_plan_list.php');
                die();
            }

            header('location: myplans.php');
            die();
        }
    }
    $_SESSION['message'] = 'Invalid Login';
    header('location: sign_in.php');
    die();
        
?>