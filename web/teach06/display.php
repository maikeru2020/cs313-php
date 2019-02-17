<?php
    require 'db_connect.php';

    $book = $_POST['book'];
    $chapter = $_POST['chapter'];
    $verse = $_POST['verse'];
    $content = $_POST['content'];
    $topics = $_POST['topics'];
    $db->query("INSERT INTO scriptures (book, chapter, verse, content) VALUES ('$book', '$chapter', '$verse', '$content')");
    $scriptureId = $db->lastInsertId();
    foreach ($topics as $topicId) {
        $db->query("INSERT INTO scriptures_topics (scripture_id, topic_id) VALUES ($scriptureId, $topicId)");
    }    

    if (isset($_POST['addTopic'])) {
        $newTopic = $_POST['newTopic'];
        $db->query("INSERT INTO topics (topic_name) VALUES ('$newTopic')");
        $topicId = $db->lastInsertId();
        $db->query("INSERT INTO scriptures_topics (scripture_id, topic_id) VALUES ($scriptureId, $topicId)");
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Display Scriptures</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <?php
        $result = $db->query('SELECT * FROM scriptures');
        foreach ($result as $row) {
            $book = $row['book'];
            $chapter = $row['chapter'];
            $verse = $row['verse'];
            $scripture_id = $row['scripture_id'];
            echo "$book $chapter:$verse - ";
            $topicResult = $db->query("SELECT topic_name FROM topics t INNER JOIN scriptures_topics st ON st.topic_id = t.topic_id WHERE st.scripture_id = $scripture_id");
            foreach ($topicResult as $row) {
                $topic = $row['topic_name'];
                echo "$topic ";
            }
            echo "<br>"; 
        }

    ?>
</body>
</html>