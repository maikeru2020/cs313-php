<?php
    session_start();
    require 'prophets.php';
    $numItems = 0;
    foreach ($_SESSION as $value) {
        $numItems += $value;
    }

?>

<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Browse Items</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="script.js"></script>
</head>
<body>
    <div class="navbar">
        <span class="browse">Browse</span>
        <a href="cart.php" id="cart">My Cart (<?php echo $numItems; ?>)</a>
    </div>
    <img src="joseph_smith.jpg" alt="Portrait of Joseph Smith">
    <div class="center">
        <h1>Browse Items</h1>
        <h2>Add Items to your shopping cart:</h2>
        <table>
            <tr>
                <th></th>
                <th>Item Name</th>
                <th>Price</th>
                <th></th>
            </tr>
        <?php
            foreach ($prophets as $index => $name) {
                $prophetNum = $index + 1;
                echo "<tr>";
                echo "<td>$prophetNum</td>";
                echo "<td>Portrait of $name (16x22 Framed Print)</td>";
                echo "<td>$19.99<td>";
                echo "<td><button onclick=\"addItem('$name');\">Add to Cart</button></a></td>";
                echo "</tr>";
            }
        ?>
        </table>
    </div>
    
</body>
</html>