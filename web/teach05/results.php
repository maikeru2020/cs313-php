<?php
    require 'db_connect.php';
    $searchBook = $_GET['book'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Results</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1>Search Results</h1>
    <?php
        $results = $db->query("SELECT * FROM scriptures WHERE book = '$searchBook'");
        foreach ($results as $row) {
            $book = $row['book'];
            $chapter = $row['chapter'];
            $verse = $row['verse'];
            $id = $row['scripture_id'];
    
            echo "<strong>$book $chapter:$verse</strong> - <a href='details.php?id=$id'>Details</a><br>";
        }
    ?>
</body>
</html>