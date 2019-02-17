<?php
    require 'db_connect.php';

    $teacherId = $_POST['teacher'];
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

    $sql = 'INSERT INTO lesson_plans(teacher_id, term_id, subject_id, week_number, week_ending, reference, day_duration, topic, objectives, activities, materials, core_points, evaluation, is_approved)' .
           "VALUES ($teacherId, $termId, $subjectId, $weekNumber, '$weekEnding', :reference, :dayDuration, :topic, :objectives, :activities, :materials, :corePoints, :evaluation, FALSE)";
    $statement = $db->prepare($sql);
    $statement->bindParam(':reference', $reference);
    $statement->bindParam(':dayDuration', $dayDuration);
    $statement->bindParam(':topic', $topic);
    $statement->bindParam(':objectives', $objectives);
    $statement->bindParam(':activities', $activities);
    $statement->bindParam(':materials', $materials);
    $statement->bindParam(':corePoints', $corePoints);
    $statement->bindParam(':evaluation', $evaluation);
    
    $statement->execute();
    header('location: create_plan.php');
    exit();
?>
