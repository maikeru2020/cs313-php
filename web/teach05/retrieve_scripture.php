<?php
    require 'db_connect.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Scripture</title>
</head>
<body>
<h1>Scripture Resources</h1>
<?php
    foreach ($db->query('SELECT * FROM scriptures') as $row) {
        $book = $row['book'];
        $chapter = $row['chapter'];
        $verse = $row['verse'];
        $content = $row['content'];

        echo "<strong>$book $chapter:$verse</strong> - \"$content\"<br>";
    }
?>
</body>
</html>