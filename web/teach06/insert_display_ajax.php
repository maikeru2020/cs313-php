<?php
    require 'db_connect.php';
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Insert and Display</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="script.js"></script>
</head>
<body>
    <h1>My Scripture List</h1>
    <div id='scriptureList'>
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
    </div>
    <h3>Insert Scripture</h3>
    Book<br>
    <input type='text' id='book'><br>
    Chapter<br>
    <input type='text' id='chapter'><br>
    Verse<br>
    <input type='text' id='verse'><br>
    Content:<br>
    <textarea id='content'></textarea><br><br>
    Select topic(s):<br>
    <?php
        $result = $db->query('SELECT * FROM topics');
        foreach ($result as $row) {
            $topicId = $row['topic_id'];
            $topicName = $row['topic_name'];
            echo "<input type='checkbox' name='topics[]' value=$topicId>$topicName<br>";
        }
        echo "<input type='checkbox' id='addTopic'><input type='text' id='newTopic'><br><br>";
    ?>
    <button value='Insert Scripture' onclick='insertScriptureData();'>Insert Scripture</button>
</body>
</html>