<!DOCTYPE html>
<?php
    $majors["cs"] = "Computer Science";
    $majors["wdd"] = "Web Design and Development";
    $majors["cit"] = "Computer Information Technology";
    $majors["ce"] = "Computer Engineering";
?>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Teach 03</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form action="teach03.php" method="post">
        Name:<input type="text" name="name"><br>
        Email:<input type="email" name="email"><br><br>
        Major:<br>
        <?php
            foreach ($majors as $value) {
                echo "<input type='radio' name='major' value='$value'>$value<br>"; 
            }
        ?>
        <br>
        Continents you have visited:<br>
        <input type="checkbox" name="continents[]" value="na">North America<br>
        <input type="checkbox" name="continents[]" value="sa">South America<br>
        <input type="checkbox" name="continents[]" value="eu">Europe<br>
        <input type="checkbox" name="continents[]" value="as">Asia<br>
        <input type="checkbox" name="continents[]" value="au">Australia<br>
        <input type="checkbox" name="continents[]" value="af">Africa<br>
        <input type="checkbox" name="continents[]" value="an">Antarctica<br><br>

        Comments:<br>
        <textarea name="comments"></textarea><br>
        <input type="submit">
    </form>
    
</body>
</html>