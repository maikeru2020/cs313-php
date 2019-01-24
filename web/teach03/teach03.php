<!DOCTYPE html>

<?php
    $name = $_POST["name"];
    $email = $_POST["email"];
    $major = $_POST["major"];
    $comments = $_POST["comments"];
    $continentIds = $_POST["continents"];

    $continents["na"] = "North America";
    $continents["sa"] = "South America";
    $continents["eu"] = "Europe";
    $continents["as"] = "Asia";
    $continents["au"] = "Australia";
    $continents["af"] = "Africa";
    $continents["an"] = "Antarctica";
?>

<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <p>You submitted the following:</p>
    <?php 
        echo "Name: $name<br>";
        echo "Email: <a href='mailto:$email'>$email</a><br><br>";
        echo "Major: $major<br><br>";
        echo "Continents Visited:<br>";
        foreach ($continentIds as $id) {
            echo "$continents[$id]<br>";
        }
        echo "<br>Comments: $comments";
    ?>  
</body>
</html>