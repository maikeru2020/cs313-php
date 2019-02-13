<?php
    require 'db_connect.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Insert Scripture</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <h1>Insert Scripture</h1>
    <form action='display.php' method='post'>
        Book<br>
        <input type='text' name='book'><br>
        Chapter<br>
        <input type='text' name='chapter'><br>
        Verse<br>
        <input type='text' name='verse'><br>
        Content:<br>
        <input type='textarea' name='content'><br><br>
        Select topic(s):<br>
        <?php
            $result = $db->query('SELECT * FROM topics');
            foreach ($result as $row) {
                $topicId = $row['topic_id'];
                $topicName = $row['topic_name'];
                echo "<input type='checkbox' name='topics[]' value=$topicId>$topicName<br>";
            }
            echo "<input type='checkbox' name='addTopic'><input type='text' name='newTopic'><br><br>";
        ?>
        <input type='submit' value='Insert Scripture'>
    </form>
</body>
</html>