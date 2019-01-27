<?php
    session_start();
    $address = htmlspecialchars($_POST['address']);
    $city = htmlspecialchars($_POST['city']);
    $state = $_POST['state'];
    $zip = htmlspecialchars($_POST['zip']);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Order Confirmation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <script src="script.js"></script>
</head>
<body>
    <div class="navbar">
        <a href="browse.php">Browse</a>
    </div>
    <img src="nelson.jpg" alt="Portrait of Russell M. Nelson">
    <div class="center">
        <h1>Order Confirmation</h1>
        <h2>Items you purchased:</h2>
        <table>
        <tr>
            <th>Item Name</th>
            <th>Price</th>
            <th>Qty</th>
            <th>Total</th>
        </tr>
        <?php
            $total = 0;
            foreach ($_SESSION as $prophet => $quantity) {
                $subtotal = $quantity * 19.99;
                $total += $subtotal;
                $subtotal = number_format($subtotal, 2);
                echo "<tr>";
                echo "<td>Portrait of $prophet (16x22 Framed Print)</td>";
                echo "<td>$19.99</td>";
                echo "<td class='qty'>$quantity</td>";
                echo "<td>$subtotal</td>";
                echo "<tr>";
            }
            $total = number_format($total, 2);
            session_destroy(); 
        ?>
        </tr>
        </table>
        <?php
            
        ?>
        <p>Total Price: $<?php echo $total?></p>
        <h2>Your order will be shipped to:</h2>
        <div>
            <?php
                echo "$address<br>";
                echo "$city, $state $zip<br>";
            ?>

        </div>
        <br>
        <a href="browse.php"><button>Continue Shopping</button></a>
    </div>
</body>
</html>