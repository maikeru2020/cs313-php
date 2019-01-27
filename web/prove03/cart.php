<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>My Cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="script.js"></script>
</head>
<body>
    <div class="navbar">
        <a href="browse.php">Browse</a> >> Cart
    </div>
    <img src="woodruff.jpg" alt="Portrait of Wilford Woodruff">
    <div class="center">
        <h1>My Shopping Cart</h1>
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
                echo "<td><button onclick=\"removeItem('$prophet');\">Remove</button></td>";
                echo "<tr>";
            }
            $total = number_format($total, 2); 
        ?>
        </tr>
        </table>
        <p>Total Price: $<?php echo $total?></p>
        <a href="checkout.php"><button>Continue to Checkout</button></a>
    </div>
</body>
</html>