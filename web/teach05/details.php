<?php
    require 'db_connect.php';
    $id = $_GET['id'];
    $result = $db->query("SELECT * FROM scriptures WHERE scripture_id = '$id'");
    $scripRef = null;
    $verse = null;
    $content = null;
    foreach ($result as $row) {
        $book = $row['book'];
        $chapter = $row['chapter'];
        $verse = $row['verse'];
        $scripRef = "$book $chapter:$verse";
        $content = $row['content'];
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $scripRef; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1><?php echo $scripRef; ?></h1>
    <?php
        echo "$verse $content";
    ?>
</body>
</html>