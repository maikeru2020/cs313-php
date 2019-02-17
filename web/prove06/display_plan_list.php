<?php
    require 'db_connect.php';
    if (!empty($_GET)) {
        $displayTerm = $_GET['termId'];
    } else {
        $displayTerm = NULL;
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Review Lesson Plans</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css">
    <script src="main.js"></script>
</head>
<body>
    <h1>Lessons Plans For Review</h1>
    <div id='selectTerm'>
    <form action="display_plan_list.php" method="get">
    <select name="termId">
    <?php
        $result = $db->query('SELECT * FROM terms');
        foreach ($result as $row) {
            $term = $row['season'] . ' ' . $row['academic_year'];
            $termId = $row['term_id'];
            if ($termId == $displayTerm) {
                $selected = "selected='selected'";
            } else {
                $selected = "";
            }
            echo "<option value='$termId' $selected>$term</option>";
        }
    ?>
    </select>
    <input type="submit" value="Get Lesson Plans">
    </form>
    </div><br>
    <?php
        echo "<table>" .
            "<tr>" .
            "<th>Teacher</th>" .
            "<th>Subject</th>" .
            "<th>Week</th>" .
            "</tr>";
        if ($displayTerm != NULL) {
            $result = $db->query("SELECT lesson_plan_id, teacher_id, subject_id, week_number FROM lesson_plans WHERE term_id = $displayTerm AND is_approved = FALSE");     
            foreach ($result as $row) {
                $planId = $row['lesson_plan_id'];
                $teacherId = $row['teacher_id'];
                $subjectId = $row['subject_id'];
                $week = $row['week_number'];

                $result = $db->query("SELECT first_name, last_name FROM teachers WHERE teacher_id = $teacherId");
                foreach ($result as $row) {
                    $teacher = $row['first_name'] . ' ' . $row['last_name'];
                }

                $result = $db->query("SELECT subject_name FROM subjects WHERE subject_id = $subjectId");
                foreach ($result as $row) {
                    $subject = $row['subject_name'];
                }

                echo "<tr>" .
                    "<td>$teacher</td>" .
                    "<td>$subject</td>" .
                    "<td id='week'>$week</td>" .
                    "<td><a href='display_lesson_plan.php?teacher=$teacher&subject=$subject&week=$week&planId=$planId'>Review</a></td>" .
                    "</tr>";                
            }

        }
        
        echo "</table>";
        
    ?>
</body>
</html>