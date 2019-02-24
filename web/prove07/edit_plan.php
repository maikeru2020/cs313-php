<?php
    session_start();
    require 'db_connect.php';
    $rows = 5;
    $cols = 50;
    $planId = $_GET['id'];
    $message = "";
    if (isset($_SESSION['message'])) {
        $message = $_SESSION['message'];
        unset($_SESSION['message']);
    }
    $result = $db->query("SELECT * FROM lesson_plans WHERE lesson_plan_id = $planId");
    foreach ($result as $row) {
        $teacherId = $row['teacher_id'];
        $thisSubjectId = $row['subject_id'];
        $thisTermId = $row['term_id'];
        $weekNumber = $row['week_number'];
        $weekEnding = $row['week_ending'];
        $reference = $row['reference'];
        $dayDuration = $row['day_duration'];
        $topic = $row['topic'];
        $objectives = $row['objectives'];
        $activities = $row['activities'];
        $materials = $row['materials'];
        $corePoints = $row['core_points'];
        $evaluation = $row['evaluation'];
        $isApproved = $row['is_approved'];
    }

    $approvalWarning = "";
    if ($isApproved) {
        $approvalWarning = '*Clicking save will remove lesson plan approval*';
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Edit Lesson Plan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css">
    <script src="script.js"></script>
</head>
<body>
    <h1>Edit Lesson Plan</h1>
    <p class='message'><?php echo $message ?></p>
    <form action='update_plan.php' method='post'>
    <table class='planTable'>
    <tr>
        <td class='field'>Term</td>
        <td> 
            <select name="term">
            <?php
                $result = $db->query('SELECT * FROM terms');
                foreach ($result as $row) {
                    $termId = $row['term_id'];
                    $termName = $row['season'] . ' ' . $row['academic_year'];
                    if ($termId == $thisTermId) {
                        $selected = "selected='selected'";
                    } else {
                        $selected = "";
                    }
                    echo "<option value=$termId $selected>$termName</option>";
                }
            ?>
            </select>
        </td>
    </tr>
    <tr>
        <td class='field'>Subject</td>
        <td>
            <select name="subject">
            <?php
                $result = $db->query('SELECT * FROM subjects');
                foreach ($result as $row) {
                    $subjectId = $row['subject_id'];
                    $subjectName = $row['subject_name'];
                    if ($subjectId == $thisSubjectId) {
                        $selected = "selected='selected'";
                    } else {
                        $selected = "";
                    }
                    echo "<option value=$subjectId $selected>$subjectName</option>";
                }
            ?>
            </select>
        </td>
    </tr>
    <tr>
        <td class='field'>Week Number</td>
        <td>
            <select name='weekNumber'>
            <?php
                for ($week = 1; $week < 17; $week++) {
                    if ($week == $weekNumber) {
                        $selected = "selected='selected'";
                    } else {
                        $selected = "";
                    }
                    echo "<option value=$week $selected>Week $week</option>";
                }
            ?>
            </select>
        </td>
    </tr>
    <tr>
        <td class='field'>Week Ending</td>
        <td><input type='date' name='weekEnding' <?php echo "value='$weekEnding'"; ?>></td>
    </tr>
    <tr>
        <td class='field'>Reference</td>
        <td class='ta'><?php echo "<textarea name='reference' rows=$rows cols=$cols>$reference</textarea>"; ?></td>
    </tr>
    <tr>
        <td class='field'>Day / Duration</td>
        <td class='ta'><?php echo "<textarea name='dayDuration' rows=$rows cols=$cols>$dayDuration</textarea>"; ?></td>
    </tr>
    <tr>
        <td class='field'>Topic / Sub-Topic / Aspect</td>
        <td class='ta'><?php echo "<textarea name='topic' rows=$rows cols=$cols>$topic</textarea>"; ?></td>
    </tr>
    <tr>
        <td class='field'>Objectives / R.P.K.</td>
        <td class='ta'><?php echo "<textarea name='objectives' rows=$rows cols=$cols>$objectives</textarea>"; ?></td>
    </tr>
    <tr>
        <td class='field'>Teacher-Learner Activities</td>
        <td class='ta'><?php echo "<textarea name='activities' rows=$rows cols=$cols>$activities</textarea>"; ?></td>
    </tr>
    <tr>
        <td class='field'>Teaching Learning Materials</td>
        <td class='ta'><?php echo "<textarea name='materials' rows=$rows cols=$cols>$materials</textarea>"; ?></td>
    </tr>
    <tr>
        <td class='field'>Core Points</td>
        <td class='ta'><?php echo "<textarea name='corePoints' rows=$rows cols=$cols>$corePoints</textarea>"; ?></td>
    </tr>
    <tr>
        <td class='field'>Evaluation and Remarks</td>
        <td class='ta'><?php echo "<textarea name='evaluation' rows=$rows cols=$cols>$evaluation</textarea>"; ?></td>
    </tr>
    </table><br>
    <input type="hidden" name="teacherId" <?php echo "value=$teacherId"; ?> >
    <input type="hidden" name="planId" <?php echo "value=$planId"; ?> >
    <p class="error"><?php echo $approvalWarning ?></p>
    <input type="submit" value='Save' class="bottom">
    </form>
</body>
</html>