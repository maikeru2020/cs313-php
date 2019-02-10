<?php
    require 'db_connect.php';
    $planId = $_GET['planId'];
    $teacher = $_GET['teacher'];
    $subject = $_GET['subject'];
    $week = $_GET['week'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo "Week $week"; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css">
    <script src="main.js"></script>
</head>
<body>
    <?php
        echo "<h1>$subject - Week $week</h1>";
        echo "<h3>Author: $teacher</h3>";
        $results = $db->query("SELECT * FROM lesson_plans WHERE lesson_plan_id = $planId");
        foreach ($results as $row) {
            $weekNumber = $row['week_number'];
            $weekEnding = $row['week_ending'];
            $reference = nl2br($row['reference']);
            $dayDuration = nl2br($row['day_duration']);
            $topic = nl2br($row['topic']);
            $objectives = nl2br($row['objectives']);
            $activities = nl2br($row['activities']);
            $materials = nl2br($row['materials']);
            $corePoints = nl2br($row['core_points']);
            $evaluation = nl2br($row['evaluation']);
            $termId = $row['term_id'];

            echo "<table id='planTable'>" .
                "<tr><td class='field'>Week Ending</td><td>$weekEnding</td></tr>" .
                "<tr><td class='field'>Reference</td><td>$reference</td></tr>" .
                "<tr><td class='field'>Day / Duration</td><td>$dayDuration</td></tr>" .
                "<tr><td class='field'>Topic / Sub-topic / Aspect</td><td>$topic</td></tr>" .
                "<tr><td class='field'>Objectives / R.P.K.</td><td>$objectives</td></tr>" .
                "<tr><td class='field'>Teacher-Learner Activities</td><td>$activities</td></tr>" .
                "<tr><td class='field'>Teaching Learning Materials</td><td>$materials</td></tr>" .
                "<tr><td class='field'>Core Points</td><td>$corePoints</td></tr>" .
                "<tr><td class='field'>Evaluation and Remarks</td><td>$evaluation</td></tr>" .
                "</table><br>";
            echo "<div id='approveBox'><a href='approve_plan.php?planId=$planId&termId=$termId' id='approveLink'>Approve</a></div>";

        }
    ?>

</body>
</html>