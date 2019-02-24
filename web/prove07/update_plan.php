<?php
    session_start();
    require 'db_connect.php';

    $planId = $_POST['planId'];
    $teacherId = $_POST['teacherId'];
    $termId = $_POST['term'];
    $subjectId = $_POST['subject'];
    $weekNumber = $_POST['weekNumber'];
    $weekEnding = $_POST['weekEnding'];
    $reference = $_POST['reference'];
    $dayDuration = $_POST['dayDuration'];
    $topic = $_POST['topic'];
    $objectives = $_POST['objectives'];
    $activities = $_POST['activities'];
    $materials = $_POST['materials'];
    $corePoints = $_POST['corePoints'];
    $evaluation = $_POST['evaluation'];
    
    $statement = $db->prepare("UPDATE lesson_plans SET term_id = $termId, subject_id = $subjectId, week_number = $weekNumber, week_ending = '$weekEnding', reference = :reference, day_duration = :dayDuration, topic = :topic, objectives = :objectives, activities = :activities, materials = :materials, core_points = :corePoints, evaluation = :evaluation, is_approved = FALSE WHERE lesson_plan_id = $planId");
    $statement->bindParam(':reference', $reference);
    $statement->bindParam(':dayDuration', $dayDuration);
    $statement->bindParam(':topic', $topic);
    $statement->bindParam(':objectives', $objectives);
    $statement->bindParam(':activities', $activities);
    $statement->bindParam(':materials', $materials);
    $statement->bindParam(':corePoints', $corePoints);
    $statement->bindParam(':evaluation', $evaluation);
    $statement->execute();
    $_SESSION['message'] = 'Lesson Plan Saved';
    header("location: edit_plan.php?id=$planId");
?>