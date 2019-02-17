<?php
    require 'db_connect.php';
    if (!empty($_POST)) {
        $book = $_POST['book'];
        $chapter = $_POST['chapter'];
        $verse = $_POST['verse'];
        $content = $_POST['content'];
        $topics = $_POST['topics'];
        $db->query("INSERT INTO scriptures (book, chapter, verse, content) VALUES ('$book', '$chapter', '$verse', '$content')");
        $scriptureId = $db->lastInsertId('scriptures_scripture_id_seq');
        foreach ($topics as $topicId) {
            $db->query("INSERT INTO scriptures_topics (scripture_id, topic_id) VALUES ($scriptureId, $topicId)");
        }    

        if (isset($_POST['addTopic'])) {
            $newTopic = $_POST['newTopic'];
            $db->query("INSERT INTO topics (topic_name) VALUES ('$newTopic')");
            $topicId = $db->lastInsertId('topics_topic_id_seq');
            $db->query("INSERT INTO scriptures_topics (scripture_id, topic_id) VALUES ($scriptureId, $topicId)");
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Insert and Display</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <h1>My Scripture List</h1>
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
    <h3>Insert Scripture</h3>
    <form action='insert_display.php' method='post'>
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