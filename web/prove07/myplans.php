<?php
    session_start();
    require 'db_connect.php';
    if (isset($_SESSION['isHeadmaster'])) {
        header('location: display_plan_list.php');
        die();
    }
    if (isset($_SESSION['teacherId'])) {
        $teacherId = $_SESSION['teacherId'];
    } else {
        header('location: sign_in.php');
        die();
    }

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
    <title>My Lesson Plans</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css">
    <script src="main.js"></script>
</head>
<body>
    <h1>My Lesson Plans</h1>
    <p class="message"><?php echo $message ?></p>
    <a href="create_plan.php"><button>Create Lesson Plan</button></a><br><br>
    <table>
    <tr>
        <th>Term</th>
        <th>Subject</th>
        <th>Week</th>
        <th>Topic</th>
        <th>Approved</th>
    <?php
        $result = $db->query("SELECT tm.season, tm.academic_year, s.subject_name, lp.week_number, lp.topic, lp.lesson_plan_id, lp.is_approved FROM lesson_plans lp JOIN terms tm ON tm.term_id = lp.term_id JOIN subjects s ON s.subject_id = lp.subject_id JOIN teachers t ON t.teacher_id = lp.teacher_id WHERE t.teacher_id = '$teacherId'");
        foreach ($result as $row) {
            $term = $row['season'] . ' ' . $row['academic_year'];
            $subject = $row['subject_name'];
            $weekNumber = $row['week_number'];
            $topic = $row['topic'];
            $planId = $row['lesson_plan_id'];
            $isApproved = $row['is_approved'];
            $approved = "NO";
            if ($isApproved) {
                $approved = "YES";
            }
            echo "<tr>" .
                 "<td>$term</td>" .
                 "<td>$subject</td>" .
                 "<td>$weekNumber</td>" .
                 "<td>$topic</td>" .
                 "<td>$approved</td>" .
                 "<td><a href='edit_plan.php?id=$planId'>Edit</a></td>" .
                 "</tr>";
        }
    ?>
    </table>
</body>
</html>