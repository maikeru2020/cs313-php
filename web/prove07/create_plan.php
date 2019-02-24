<?php
    session_start();
    require 'db_connect.php';
    $rows = 5;
    $cols = 50;
    if (isset($_SESSION['teacherId'])) {
        $teacherId = $_SESSION['teacherId'];
    } else {
        header('location: sign_in.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Create Lesson Plan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css">
    <script src="script.js"></script>
</head>
<body>
    <h1>Create Lesson Plan</h1>
    <form action='insert_plan.php' method='post'>
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
                    echo "<option value=$termId>$termName</option>";
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
                    echo "<option value=$subjectId>$subjectName</option>";
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
                    echo "<option value=$week>Week $week</option>";
                }
            ?>
            </select>
        </td>
    </tr>
    <tr>
        <td class='field'>Week Ending</td>
        <td><input type='date' name='weekEnding'></td>
    </tr>
    <tr>
        <td class='field'>Reference</td>
        <td class='ta'><textarea name='reference' <?php echo "rows=$rows cols=$cols" ?>></textarea></td>
    </tr>
    <tr>
        <td class='field'>Day / Duration</td>
        <td class='ta'><textarea name='dayDuration' <?php echo "rows=$rows cols=$cols" ?>></textarea></td>
    </tr>
    <tr>
        <td class='field'>Topic / Sub-Topic / Aspect</td>
        <td class='ta'><textarea name='topic' <?php echo "rows=$rows cols=$cols" ?>></textarea></td>
    </tr>
    <tr>
        <td class='field'>Objectives / R.P.K.</td>
        <td class='ta'><textarea name='objectives' <?php echo "rows=$rows cols=$cols" ?>></textarea></td>
    </tr>
    <tr>
        <td class='field'>Teacher-Learner Activities</td>
        <td class='ta'><textarea name='activities' <?php echo "rows=$rows cols=$cols" ?>></textarea></td>
    </tr>
    <tr>
        <td class='field'>Teaching Learning Materials</td>
        <td class='ta'><textarea name='materials' <?php echo "rows=$rows cols=$cols" ?>></textarea></td>
    </tr>
    <tr>
        <td class='field'>Core Points</td>
        <td class='ta'><textarea name='corePoints' <?php echo "rows=$rows cols=$cols" ?>></textarea></td>
    </tr>
    <tr>
        <td class='field'>Evaluation and Remarks</td>
        <td class='ta'><textarea name='evaluation' <?php echo "rows=$rows cols=$cols" ?>></textarea></td>
    </tr>
    </table><br>
    <input type="hidden" name="teacherId" <?php echo "value='$teacherId'" ?> >
    <input type="submit" value='Create' id='createPlan'>
    </form>
</body>
</html>