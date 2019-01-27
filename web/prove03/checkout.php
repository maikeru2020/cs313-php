<?php
    require 'states.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Check Out</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <script src="script.js"></script>
</head>
<body>
    <div class="navbar">
        <a href="browse.php">Browse</a> >> <a href="cart.php">Cart</a> >> Check Out
    </div>
    <img src="mckay.jpg" alt="Portrait of David O. McKay">
    <div class="center">
        <h1>Check Out</h1>
        <h2>Please enter your shipping address:</h2>
        <form action="confirm.php" method="post">
            <table>
                <tr>
                    <td>Street Address:</td>
                    <td><input type="text" name="address"></td>
                </tr>
                <tr>
                    <td>City:</td>
                    <td><input type="text" name="city"></td>
                </tr>
                <tr>    
                    <td>State:</td>
                    <td><select name="state">
                    <?php
                        foreach ($states as $value) {
                            echo "<option value='$value'>$value";
                        }
                    ?>
                    </select>
                    </td>
                <tr>
                    <td>ZIP Code:</td>
                    <td><input type="text" name="zip"></td>
                </tr>
            </table><br>
                <input type="submit" value="Place Order">
        </form>
    </div>
        
</body>
</html>