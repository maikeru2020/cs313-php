<?php
    require 'db_connect.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Search</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <h1>Find a Scripture</h1><br>
    <form action="results.php" method="get">
        Choose a Book:
        <select name="book">
        <?php
            $books = $db->query('SELECT DISTINCT book FROM scriptures');
            foreach ($books as $row) {
                $book = $row['book'];
                echo "<option value='$book'>$book</option>";
            }
        ?>
        </select><br><br>
        <input type="submit" value="Search">
    </form>
</body>
</html>