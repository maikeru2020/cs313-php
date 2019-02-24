<?php
    require 'db_connect.php';

    $planId = $_GET['planId'];
    $termId = $_GET['termId'];
    $statement = $db->prepare("UPDATE lesson_plans SET is_approved = TRUE WHERE lesson_plan_id = :planId");
    $statement->bindParam(':planId', $planId);
    $statement->execute();
    header("location: display_plan_list.php?termId=$termId");
    exit();
?>